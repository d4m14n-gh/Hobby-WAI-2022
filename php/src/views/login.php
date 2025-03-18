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
        html{--theme-color: royalblue;}
        article{min-height: unset;}
    </style>
</head>
<body>
<img src="img/background.jpg" alt="none" id="background-image">
<div id="div-top">
    <header style="text-align: center">
        <h1 id="left-header">GALERIA</h1
        ><h1 id="center-header">
            <span><img src="img/pngfromsvg/bishop.png" alt="logo"></span>
        </h1
        ><h1 id="right-header">ZDJĘĆ</h1>
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
            <li>
                <a href="galeria"><img src="img/galeria.png" alt="logo"><br><span>Galeria Zdjęć</span></a>
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
        <h2 style="display: none">article</h2>
        <section>
            <h2>Zaloguj się</h2>
            <fieldset>
                <legend>
                    logowanie
                </legend>
                <form action="galeria-logowanie" style="" method="post">
                    <label for="lgs">Login:</label>
                    <br>
                    <input type="text" name="login" id="lgs">
                    <br>
                    <label for="pds">Hasło:</label>
                    <br>
                    <input type="password" name="pass" id="pds">
                    <br>
                    <input type="reset" value="Resetuj">
                    <input type="submit" value="Zaloguj się">
                </form>
                Nie posiadasz konta? - <a href="galeria-rejestracja">Zarejetruj się!</a>
            </fieldset>
            <br>
            <?php
                if(isset($message))
                    echo "<span style='color: red'>Uwaga!</span> {$message}";
            ?>
            <br>
        </section>
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