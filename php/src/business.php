<?php
function get_db()
{
    $mongo = new MongoDB\Client("mongodb://localhost:27017/wai", ['username' => 'wai_web', 'password' => 'w@i_w3b']);
    return $mongo->wai;
}
function getUser($login)
{
    $db = get_db();
    $query = ['login' => $login];
    return $db->users->findOne($query);
}
function collectionExists($collect){
    $collections = get_db()->listCollections();
    $collectionNames = [];
    foreach ($collections as $collection)
        $collectionNames[] = $collection->getName();
    return in_array($collect, $collectionNames);
}
function getAllElements($collect){
    if(!collectionExists($collect))
        return 404;
    $db = get_db();
    return $db->$collect->find();
}
function addElement($element, $collect)
{
    if(!collectionExists($collect))
        return null;
    $db = get_db();
    $inserted=$db->$collect->insertOne($element);
    return $inserted->getInsertedId();
}
function clearCollection($name)
{
    if(!collectionExists($name))
        return;
    $db = get_db();
    $images = $db->$name->find();
    foreach ($images as $image)
        $db->$name->deleteOne($image);
}
function imagesCount(){
	$elements=getAllElements('images');
	$count=0;
	foreach ($elements as $image){
		if(($image['status']==='private' && (!isset($_SESSION['logged']) || $_SESSION['login']!==$image['authorLogin'])))
			continue;
		$count++;
	}
	return $count;
}
function isPng($path){
    return finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path)==='image/png';
}
function isJpg($path){
    return finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path)==='image/jpeg';
}
function saveImage($img, $id){
    if(!isPng($img['nameTmp'])&&!isJpg($img['nameTmp']))
        return 1;
    $filename=$img['name'];
    $path='images/';
    $path1=$path.$id.'---'.$filename;
    $path2=$path.$id.'---wm-'.$filename;
    $path3=$path.$id.'---ic-'.$filename;
    move_uploaded_file($img['nameTmp'], $path1);
    ///////
    if(isPng($path1))
        $image = imagecreatefrompng($path1);
    else
        $image = imagecreatefromjpeg($path1);
    $newImage = imagecreate(200, 125);
    imagecolorallocate($newImage, 21, 19, 19);
    imagesavealpha($newImage, true);
    imagesavealpha($image, true);
    $x=getimagesize($path1)[0];
    $y=getimagesize($path1)[1];
    $prop=$x/$y;
    if($prop>(200.0/125.0))
        imagecopyresized($newImage, $image, 0, (125-200.0/$prop)/2.0, 0, 0, 200.0, 200.0/$prop, $x, $y);
    else
        imagecopyresized($newImage, $image, (200.0-125.0*$prop)/2.0, 0, 0, 0, 125.0*$prop, 125.0, $x, $y);
    if(isPng($path1))
        imagepng($newImage, $path3);
    elseif (isJpg($path1))
        imagejpeg($newImage, $path3);
    imagedestroy($newImage);
    /////////
    $blackcolor = imagecolorallocate($image, 21, 19, 19);
    $whitecolor = imagecolorallocate($image, 190, 190, 190);
    imagefilledrectangle($image, 0, $y*0.94, $y*((strlen($img['watermark'])+1)*1.2/13), $y*0.8, $whitecolor);
    $font = 'static/fonts/font.ttf';
    imagefttext($image, $y/13, 0, $y*0.02, $y*0.9, $blackcolor, $font, $img['watermark']);
    if(isPng($path1))
        imagepng($image, $path2);
    elseif (isJpg($path1))
        imagejpeg($image, $path2);
    imagedestroy($image);
    return 0;
}
function find($value){
    $querry=['title'=>['$regex' => $value, '$options' => 'i']];
    $res=get_db()->images->find($querry);
    $ret="";
    foreach ($res as $item){
        if($item['status']==='public'||(isset($_SESSION['logged'])&&$_SESSION['login']===$item['authorLogin']))
            $ret=$ret."<div class='gallery-image'>
                    <a href='images/{$item['_id']}---wm-{$item['name']}' target='_blank'>
                        <figure>
                            <img src='images/{$item['_id']}---ic-{$item['name']}' alt='zestaw' >
                            <figcaption>
                                tytuł: {$item['title']}
                                <br>
                                autor: {$item['author']}
                            </figcaption>
                        </figure>
                    </a>
                </div>";
    }
    return $ret;
}

