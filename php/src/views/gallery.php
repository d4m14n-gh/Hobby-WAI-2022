<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/pngfromsvg/bishop.png" type="image/x-icon">
    <title>Szachy-galeria</title>
    <link rel="stylesheet" href="static/style-uni.css">
    <link rel="stylesheet" href="static/style-media.css">
    <link rel="stylesheet" href="static/form.css">
    <style>
        html{
            --theme-color: royalblue;
        }
        figure{
            width: 100%;
        }
        figure:hover{
            box-shadow: 0 0 5px silver;
        }
        article{
            min-height: unset;
        }
        #galleryMenu {
            padding: 0;
            list-style-type: none;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 40%);
            overflow: hidden;
            width: calc(100% - 40px);
            margin: 0 20px;
            text-align: center;
        }
        #galleryMenu a, #galleryMenu a:hover {text-decoration: none; color: silver; margin: 0; padding: 10px; display: block}
        #galleryMenu li{
            width: 25%;
            float: left;
        }
        #galleryMenu li:hover {
            background-color: rgba(0, 0, 0, 60%);
        }
        #logout{
            float: right;
            display: block;
            margin-right: 10px;
        }
    </style>
    <script src="static/jquery-3.6.3.min.js"></script>
    <script src="static/galleryScript.js"></script>
</head>
<body>
<img src="img/background.jpg" alt="none" id="background-image">
<div id="div-top">
    <header style="text-align: center">
        <h1 id="left-header">GALERIA</h1
        ><h1 id="center-header">
            <span><img src="img/pngfromsvg/bishop.png" alt="logo"></span>
        </h1
        ><h1 id="right-header">ZDJĘĆ
        </h1>
    </header>
</div>
<div id="div-left">
    <nav>
        <ul>
            <li>
                <a href="/"><img src="img/home.png" alt="logo"><br><span>Strona Głowna</span></a>
            </li>
            <li>
                <a href="zasady"><img src="img/rules.png" alt="logo"><br><span>Zasady Gry</span></a>
            </li>
            <li class="current">
                <img src="img/galeria.png" alt="logo"><br><span>Galeria Zdjęć</span>
            </li>
            <li>
                <div id="main-content">
                    <a href="arcymistrzowie">
                        <img src="img/cup.png" alt="logo"><br>
                        <span>Najlepsi Szachiści</span>
                    </a>
                </div>
                <div id="add-content">
                    <ol>
                        <li>
                            <a href="arcymistrzowie#fischer"><span>Robert James</span> Fischer</a>
                        </li>
                        <li>
                            <a href="arcymistrzowie#kasparov"><span>Garry</span> Kasparov</a>
                        </li>
                        <li>
                            <a href="arcymistrzowie#carlsen"><span>Magnus</span> Carlsen</a>
                        </li>
                    </ol>
                </div>
            </li>
        </ul>
    </nav>
</div>
<div id="div-right">
    <article>
        <?php
            require 'static/loginTemplate.php';
        ?>
        <h2 style="margin-top: 10px">Galeria-miniatury</h2>
        <ul id="galleryMenu">
            <li style="padding: 10px;border-bottom:  1px solid royalblue">Miniatury</li>
            <li><a href="galeria-upload">Prześlij zdjęcie</a></li>
            <li><a href="galeria-wyszukiwarka">Wyszukiwarka</a></li>
            <li><a href="galeria-wybrane">Wybrane zdjęcia</a></li>
        </ul>
        <br>
        <br>
        <button onclick="Save()">Zapamiętaj wybrane</button>
        <br>
        <?php
            $i=1;
            $page=1;
            if(isset($gpage))
                $page=intval($gpage);
            foreach ($allEl as $image){
                $checked=isset($selected) && in_array(strval($image['_id']), $selected);
                if($image['status']==='private' && (!isset($logged) || $login!==$image['authorLogin']))
                    continue;
                else if($i>pageImgCount*($page-1)&&$i<=pageImgCount*$page)
                    include 'static/template.php';
                $i++;
            }
            echo '<br>';
            echo '<br>';
        ?>
        <div class="cboth"></div>
        <style>
            .pg{
                font-size: 20px;
                width: fit-content;
                background-color: rgba(0, 0, 0, 50%);
                padding: 5px 10px;
                display: inline-block;
                margin: 0 5px;
                user-select: none;
                border-radius: 5px;
            }
            .pg:hover{
                box-shadow: white 0 0 5px;
                background-color: rgba(0, 0, 0, 60%);
                cursor: grab;
            }
            #pageEnd a{
                text-decoration: none;
                color: silver;
                padding: 0;
            }
        </style>
        <div id="pageEnd" style="text-align: center">
            <?php
                $maxPage=ceil(($i-1.0)/pageImgCount);
                if($maxPage==0)
                    $maxPage=1;
                $prePage=$page-1;
                $nexPage=$page+1;
                $inactive="style='color: rgb(60, 60, 60);'";
                $href['0']="href='galeria'";
                if($page==1)
                    $href['0']=$inactive;
                $href['1']="href='galeria?strona=$prePage'";
                if($page==2)
                    $href['1']="href='galeria'";
                if($page<2)
                    $href['1']=$inactive;
                $href['2']="href='galeria?strona=$nexPage'";
                if($page>=$maxPage)
                    $href['2']=$inactive;
                $href['3']="href='galeria?strona=$maxPage'";
                if($page==$maxPage)
                    $href['3']=$inactive;
                echo
                "<a {$href['0']}>
                    <div class='pg'>
                        |<<
                    </div>
                </a>
                <a {$href['1']}>
                    <div class='pg'>
                        <<
                    </div>
                </a>
                <a>
                    <div class='pg'>
                            $page/$maxPage
                    </div>
                </a>
                <a {$href['2']}>
                    <div class='pg'>
                        >>
                    </div>
                </a>
                <a {$href['3']}>
                    <div class='pg'>
                        >>|
                    </div>
                </a>";
            ?>
        </div>
    </article>
</div>
<div id="div-bottom">
    <footer>
        <h1 style="display: inline-block">SZACHY</h1
        ><svg viewBox="0 0 140 110">
            <circle r="20" cx="70" cy="21"/>
            <polygon points="60,45 80,45 90,95 50,95"/>
            <rect x="50" y="35" rx="10" ry="10" width="40" height="20"/>
            <rect x="30" y="90" rx="20" ry="20" width="80" height="25"/>
            <polyline points="30,108 110,108"/>
        </svg>
    </footer>
</div>
</body>
</html>