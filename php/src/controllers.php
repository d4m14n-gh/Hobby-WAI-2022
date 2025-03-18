<?php
    function index(&$model){
        return 'index.php';
    }
    function rules(&$model){
        return 'rules.php';
    }
    function gallery(&$model){
        return 'gallery.php';
    }
    function grandmasters(&$model){
        return 'grandmasters.php';
    }
    function gp(&$model){
        if(isset($_GET['strona'])){
			if($_GET['strona']>ceil(imagesCount()/pageImgCount))
				return 'redirect:galeria';
            $model['gpage']=$_GET['strona'];
		}
        if(isset($_SESSION['selected']))
            $model['selected']=$_SESSION['selected'];
        if(isset($_SESSION['login']))
            $model['login']=$_SESSION['login'];
        if(isset($_SESSION['logged']))
            $model['logged']=$_SESSION['logged'];
        $model['allEl']=getAllElements('images');
        return 'gallery.php';
    }
    function search(&$model){
        if(isset($_SESSION['logged']))
            $model['logged']=$_SESSION['logged'];
        return 'search.php';
    }
    function selected(&$model){
        if(isset($_GET['strona'])){
			if(!isset($_SESSION['selected']))
				return 'redirect:galeria-wybrane';
			else if($_GET['strona']>ceil(count($_SESSION['selected'])/pageImgCount))
				return 'redirect:galeria-wybrane';
			$model['gpage']=$_GET['strona'];
		}
        if(isset($_SESSION['selected']))
            $model['selected']=$_SESSION['selected'];
        if(isset($_SESSION['login']))
            $model['login']=$_SESSION['login'];
        if(isset($_SESSION['logged']))
            $model['logged']=$_SESSION['logged'];
        $model['allEl']=getAllElements('images');
        return 'selected.php';
    }
    function notif(&$model){
        if(!isset($_SESSION['message']))
            return 'redirect:galeria';
        $model['message']=$_SESSION['message'];
        return 'message.php';
    }
    function login(&$model){
        if(!isset($_POST['login'])){
            if(isset($_SESSION['logged']))
                return 'redirect:galeria';
            else
                return 'login.php';
        }
        $login=$_POST['login'];
        $pass=$_POST['pass'];
        if(getUser($login)===null)
            $m='Podany login nie istnieje!';
        else if(!password_verify($pass, getUser($login)['password']))
            $m='Błędne Hasło!';
        else{
            session_regenerate_id();
            $_SESSION['logged']=true;
            $_SESSION['login']=$login;
            $_SESSION['start']=time();
            $_SESSION['message']='Zalogowano pomyślnie!';
            return 'redirect:galeria-powiadomienie';
        }
        $model['message']=$m;
        return 'login.php';
    }
    function register(&$model){
        if(!isset($_POST['login'])){
            if(isset($_SESSION['logged']))
                return 'redirect:galeria';
            else
                return 'register.php';
        }
        $m='Zarejstrowano pomyślnie!';
        $login=$_POST['login'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $passr=$_POST['passr'];
        $user = [
            'login' => $login,
            'email' => $email,
            'password' => password_hash($pass, PASSWORD_DEFAULT),
        ];
        if(getUser($login)!==null)
            $m='Podany login już istnieje!';
        else if(strlen($pass)<5)
            $m='Hasło jest zbyt krótkie!';
        else if($pass!=$passr)
            $m='Podane hasła są różne!';
        else{
            addElement($user, 'users');
            $_SESSION['message']='Zarejestrowano pomyślnie!';
            return 'redirect:galeria-powiadomienie';
        }
        $model['message']=$m;
        return 'register.php';
    }
    function upload(&$model){
        if(isset($_SESSION['login']))
            $model['login']=$_SESSION['login'];
        if(isset($_SESSION['logged']))
            $model['logged']=$_SESSION['logged'];
        if(!isset($_FILES['uploadf']['name']))
            return 'upload.php';
        $login='';
        if(isset($_SESSION['logged']))
            $login=$_SESSION['login'];
        if($_FILES['uploadf']['error']!=0&&$_FILES['uploadf']['error']>2)
            $m='Wystąpił błąd!';
        else if($_FILES['uploadf']['error']!=0||$_FILES['uploadf']['error']==0&&$_FILES['uploadf']['size']>(1024*1024)) {
            $m='Plik jest za duży!';
            if($_FILES['uploadf']['error']==0&&!($_FILES['uploadf']['type']=='image/jpeg')&&!($_FILES['uploadf']['type']=='image/png'))
                $m='Plik jest za duży i ma nieprawidłowy format!';
        }
        else if($_FILES['uploadf']['error']==0) {
            if(!($_FILES['uploadf']['type']=='image/jpeg')&&!($_FILES['uploadf']['type']=='image/png'))
                $m='Plik ma zły format!';
            else{
                $image = [
                    'name' => $_FILES['uploadf']['name'],
                    'nameTmp' => $_FILES['uploadf']['tmp_name'],
                    'file' => $_FILES['uploadf'],
                    'watermark' => $_POST['watermark'],
                    'title' => $_POST['title'],
                    'author' => $_POST['author'],
                ];
                $statusDb = 'public';
                if(isset($_POST['status']))
                    $statusDb=$_POST['status'];
                $imageDb = [
                    'name' => $image['name'],
                    'title' => $image['title'],
                    'author' => $image['author'],
                    'authorLogin' => $login,
                    'status' => $statusDb
                ];
                $id=addElement($imageDb, 'images');
                saveImage($image, $id);
                $_SESSION['message']='Pomyślnie przesłano zdjęcie!';
                return 'redirect:galeria-powiadomienie';
            }
        }
        $model['message']=$m;
        return 'upload.php';
    }
    function logout(&$model){
        if(!isset($_SESSION['logged']))
            return 'galeria';
        session_destroy();
        return 'redirect:galeria';
    }
    function saveSelected(&$model){
        if(!isset($_SESSION['selected']))
            $_SESSION['selected']=[];
        $_SESSION['selected']=array_diff($_SESSION['selected'], json_decode($_POST['unselected']));
        $_SESSION['selected']=array_unique(array_merge($_SESSION['selected'], json_decode($_POST['selected'])));
        echo json_encode($_SESSION['selected']);
        exit();
    }
    function deleteSelected(&$model){
        $toDestroy=[];
        foreach(getAllElements('images') as $image)
            if(isset($_POST['img-'.$image['_id']]))
                $toDestroy[]=$image['_id'];
        $_SESSION['selected']=array_diff($_SESSION['selected'], $toDestroy);
        return 'redirect:galeria-wybrane';
        exit();
    }
    function findImages(){
        echo find($_POST['tfind']);
        exit();
    }