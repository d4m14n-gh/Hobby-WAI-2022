<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/pngfromsvg/king.png" type="image/x-icon">
    <title>Szachy-wybitni szachiści</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="static/style-uni.css">
    <link rel="stylesheet" href="static/gms.css">
    <link rel="stylesheet" href="static/style-media.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $( document ).tooltip();
        } );
    </script>
    <style>
        html{--theme-color: brown;}
    </style>
</head>
<body>
<img src="img/background.jpg" alt="none" id="background-image">
<div id="div-top">
    <header style="text-align: center">
        <h1 id="left-header">NAJLEPSI</h1
        ><h1 id="center-header">
            <span><img src="img/pngfromsvg/king.png" alt="logo"></span>
        </h1
        ><h1 id="right-header">SZACHIŚCI</h1>
    </header>
</div>
<div id="div-left">
    <div style="overflow: hidden;height: 600px;">
        <nav>
            <ul>
                <li>
                    <a href="/">
                        <img src="img/home.png" alt="logo"><br><span>Strona Głowna</span>
                    </a>
                </li>
                <li>
                    <a href="zasady"><img src="img/rules.png" alt="logo"><br><span>Zasady Gry</span></a>
                </li>
                <li>
                    <a href="galeria"><img src="img/galeria.png" alt="logo"><br><span>Galeria Zdjęć</span></a>
                </li>
                <li class="current" style="padding: 0">
                    <div id="main-content" style="padding: 5px">
                            <img src="img/cup.png" alt="logo"><br>
                            <span>Najlepsi Szachiści</span>
                    </div>
                    <div id="add-content">
                        <ol>
                            <li>
                                <a href="#fischer"><span>Robert James</span> Fischer</a>
                            </li>
                            <li>
                                <a href="#kasparov"><span>Garry</span> Kasparov</a>
                            </li>
                            <li>
                                <a href="#carlsen"><span>Magnus</span> Carlsen</a>
                            </li>
                        </ol>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div id="div-right">
    <article>
        <h2 style="display: none">article</h2>
        <section>
            <h2>Mistrzowstwa świata w szachach</h2>
            <figure>
                <img src="img/mecz.jfif" alt="mecz">
                <figcaption>Mecz o mistrzostwo świata</figcaption>
            </figure>
            <p>
                Mistrzostwa Świata w Szachach rozgrywane są w celu wyłonienia mistrza świata w szachach. Obecnym mistrzem świata
                jest Magnus Carlsen z Norwegii, który posiada tytuł od 2013 roku.<br>
                Pierwszym wydarzeniem powszechnie uznanym za mistrzostwo świata był mecz 1886 pomiędzy dwoma czołowymi graczami na świecie, Wilhelmem Steinitzem
                i Johannesem Zukertortem. Steinitz wygrał, zostając pierwszym mistrzem świata. Od 1886 do 1946 mistrz ustalał warunki, wymagając od
                każdego pretendenta podniesienia sporej stawki i pokonania mistrza w meczu, aby zostać nowym mistrzem świata. Po śmierci panującego mistrza świata
                Aleksandra Alechina w 1946 r. FIDE (Międzynarodowa Federacja Szachowa) przejęła administrację Mistrzostw Świata, zaczynając od turnieju
                Mistrzostw Świata w 1948 r. Od 1948 do 1993 roku FIDE co trzy lata organizowało zestaw turniejów, w których wybierano nowego pretendenta.
                W 1993 roku panujący mistrz Garry Kasparow oderwał się od FIDE, co doprowadziło do powstania dwóch tytułów mistrza świata na kolejne trzynaście lat.
                Tytuły zostały ujednolicone na Mistrzostwach Świata w Szachach 2006, a wszystkie kolejne mecze były ponownie administrowane przez FIDE.<br>
                Od 2014 roku mistrzostwa przyjęły cykl dwuletni, choć mecz w 2020 roku został przełożony na rok 2021 z powodu pandemii COVID-19, a kolejny mecz
                odbędzie się w 2023 roku. Magnus Carlsen jest mistrzem świata od czasu pokonania Viswanathana Ananda w 2013 roku. Z powodzeniem obronił tytuł w latach
                2014, 2016, 2018 i 2021. W 2022 roku ogłosił, że nie obroni swojego tytułu po raz piąty, a więc mistrzostwa 2023 zostaną
                rozegrane pomiędzy dwoma najlepszymi graczami kwalifikacyjnego Turnieju Kandydatów 2022: Ian'em Nepomniachtchi z Rosji i Ding Liren'em z Chin.<br>
                Chociaż mistrzostwa świata są otwarte dla wszystkich graczy, istnieją osobne mistrzostwa dla kobiet,
                osób poniżej 20 roku życia i niższych grup wiekowych oraz seniorów, jak również dla komputerów.
                Są też mistrzostwa świata w szachach szybkich, błyskawicznych, korespondencyjnych, rozwiązywaniu problemów i szachach losowych Fischera.
            </p>
            <div class="cboth"><br></div>
            <h3>Mecz Stulecia</h3>
            <figure>
                <img src="img/mecz100.jpg" alt="mecz">
                <figcaption>Fischer-Spassky, 1972r. Rejkiawik</figcaption>
            </figure>
            <p>
                Mecz stulecia odbył się w Reykjavíku, od lipca do września 1972, jednak do ostatniej chwili nie było wiadomo,
                czy w ogóle się odbędzie. Fischer stawiał coraz to nowe wymagania przed organizatorami, wycofywał się i wracał
                do negocjacji. Mecz początkowo obfitował w nieporozumienia i dalsze żądania Fischera, a jego fatalny, prosty błąd
                w pierwszej partii tylko podgrzał atmosferę. Na drugą partię Fischer nie przyszedł – poddał ją walkowerem, i radziecka
                federacja szachowa zażądała od Spasskiego przerwania meczu. Ten nie zareagował, gdyż chciał wygrać mecz,
                w którym prowadził już dwoma punktami. Jednak Fischer stawił się na trzecią partię i ją wygrał. Ostatecznie zwyciężył
                w całym meczu w stosunku 12½ – 8½. Tym samym przerwał hegemonię radzieckich arcymistrzów i został szachistą numer jeden
                na świecie (po raz pierwszy w historii przekroczył granicę 2700 w rankingu Elo).
                Zwycięstwo Fischera w meczu stulecia było jednym z najgłośniejszych wydarzeń w całej historii szachów. W szczytowych
                latach zimnej wojny zostało wykorzystane przez amerykańską propagandę do pognębienia ZSRR, w którym porażka Spasskiego
                została przyjęta jak klęska narodowa. Niemniej, w wielkim stopniu przysłużyło się do ogromnego wzrostu zainteresowania
                szachami w USA. Amerykańska federacja szachowa odnotowała trzykrotny wzrost liczby członków.
            </p>
            <div class="cboth"><br></div>
        </section>
        <section>
            <h3>Mistrzowie świata na przestrzeni lat:</h3>
            <div id="table-container">
                <table>
                    <tr>
                        <th>Nr</th>
                        <th colspan="2">Szachista</th>
                        <th>Narodowość</th>
                        <th>Lata</th>
                        <th>Wiek</th>
                    </tr>
                    <tr class="data">
                        <td>1.</td>
                        <td class="photo">
                            <img src="img/MOW/steiniz.jpg" alt="steiniz" class="gm">
                        </td>
                        <td>Wilhelm Steinitz</td>
                        <td class="photo"><img src="img/MOW/flaga-aw.png" alt="austro-węgry" title="Austro-Węgry" class="flag"></td>
                        <td>1886–1894</td>
                        <td>50 lat</td>
                    </tr>
                    <tr class="data">
                        <td>2.</td>
                        <td class="photo">
                            <img src="img/MOW/lasker.jpg" alt="lasker" class="gm">
                        </td>
                        <td>Emanuel Lasker</td>
                        <td class="photo"><img src="img/MOW/flaga-n.png" alt="niemcy" title="Cesarstwo Niemieckie" class="flag"></td>
                        <td>1894–1921</td>
                        <td>25 lat</td>
                    </tr>
                    <tr class="data">
                        <td>3.</td>
                        <td class="photo">
                            <img src="img/MOW/capablanca.jpg" alt="lasker" class="gm">
                        </td>
                        <td>José Raúl Capablanca</td>
                        <td class="photo"><img src="img/MOW/flaga-kuby.png" alt="kuba" title="Kuba" class="flag"></td>
                        <td>1921–1927</td>
                        <td>33 lata</td>
                    </tr>
                    <tr class="data">
                        <td>4.</td>
                        <td class="photo">
                            <img src="img/MOW/alechin.jpg" alt="alechin" class="gm">
                        </td>
                        <td>Aleksandr Alechin</td>
                        <td class="photo"><img src="img/MOW/flaga-francji.jpg" alt="francja" title="Francja" class="flag"></td>
                        <td>1927–1935, <br> 1937–1946</td>
                        <td>35 lat</td>
                    </tr>
                    <tr class="data">
                        <td>5.</td>
                        <td class="photo">
                            <img src="img/MOW/euwe.jpg" alt="euwe" class="gm">
                        </td>
                        <td>Max Euwe</td>
                        <td class="photo"><img src="img/MOW/flaga-niderlandów.png" alt="niderlandy" title="Niderlandy" class="flag"></td>
                        <td>1935–1937</td>
                        <td>34 lata</td>
                    </tr>
                    <tr class="data">
                        <td>6.</td>
                        <td class="photo">
                            <img src="img/MOW/botwinik.jpg" alt="botwinnik" class="gm">
                        </td>
                        <td>Michaił Botwinnik</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1948–1957, <br> 1958–1960, <br> 1961–1963</td>
                        <td>37 lat</td>
                    </tr>
                    <tr class="data">
                        <td>7.</td>
                        <td class="photo">
                            <img src="img/MOW/smysłow.jpg" alt="smysłow" class="gm">
                        </td>
                        <td>Wasilij Smysłow</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1957–1958</td>
                        <td>36 lat</td>
                    </tr>
                    <tr class="data">
                        <td>8.</td>
                        <td class="photo">
                            <img src="img/MOW/tal.jpg" alt="tal" class="gm">
                        </td>
                        <td>Michaił Tal</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1960–1961</td>
                        <td>23 lata</td>
                    </tr>
                    <tr class="data">
                        <td>9.</td>
                        <td class="photo">
                            <img src="img/MOW/petrosjan.jpg" alt="petrosjan" class="gm">
                        </td>
                        <td>Tigran Petrosjan</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1963–1969</td>
                        <td>34 lata</td>
                    </tr>
                    <tr class="data">
                        <td>10.</td>
                        <td class="photo">
                            <img src="img/MOW/spasski.jpg" alt="spasski" class="gm">
                        </td>
                        <td>Boris Spasski</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1969–1972</td>
                        <td>32 lata</td>
                    </tr>
                    <tr class="data">
                        <td>11.</td>
                        <td class="photo">
                            <img src="img/MOW/fischer.jpg" alt="fischer" class="gm">
                        </td>
                        <td>Bobby Fischer</td>
                        <td class="photo"><img src="img/MOW/usa.webp" alt="usa" title="USA" class="flag"></td>
                        <td>1972–1975</td>
                        <td>29 lat</td>
                    </tr>
                    <tr class="data">
                        <td>12.</td>
                        <td class="photo">
                            <img src="img/MOW/karpov.jpg" alt="karpov" class="gm">
                        </td>
                        <td>Anatolij Karpow</td>
                        <td class="photo"><img src="img/MOW/flaga-zsrr.png" alt="zsrr" title="ZSRR" class="flag"></td>
                        <td>1975–1985</td>
                        <td>23 lata</td>
                    </tr>
                    <tr class="data">
                        <td>13.</td>
                        <td class="photo">
                            <img src="img/MOW/kasparov.jpg" alt="kasparov" class="gm">
                        </td>
                        <td>Garry Kasparov</td>
                        <td class="photo"><img src="img/MOW/flaga-rosji.png" alt="rosja" title="Rosja" class="flag"></td>
                        <td>1985–2000</td>
                        <td>22 lata</td>
                    </tr>
                    <tr class="data">
                        <td>14.</td>
                        <td class="photo">
                            <img src="img/MOW/kramnik.jpg" alt="kramnik" class="gm">
                        </td>
                        <td>Władimir Kramnik</td>
                        <td class="photo"><img src="img/MOW/flaga-rosji.png" alt="rosja" title="Rosja" class="flag"></td>
                        <td>2000–2007</td>
                        <td>25 lat</td>
                    </tr>
                    <tr class="data">
                        <td>15.</td>
                        <td class="photo">
                            <img src="img/MOW/anand.jpg" alt="anand" class="gm">
                        </td>
                        <td>Viswanathan Anand</td>
                        <td class="photo"><img src="img/MOW/flaga-indii.png" alt="indie" title="Indie" class="flag"></td>
                        <td>2007-2013</td>
                        <td>38 lat</td>
                    </tr>
                    <tr class="data">
                        <td>16.</td>
                        <td class="photo">
                            <img src="img/MOW/carlsen.jpg" alt="carlsen" class="gm">
                        </td>
                        <td>Magnus Carlsen</td>
                        <td class="photo"><img src="img/MOW/Flag-Norway.webp" alt="norwegia" title="Norwegia" class="flag"></td>
                        <td>2013-2022</td>
                        <td>22 lata</td>
                    </tr>
                </table>
            </div>
        </section>
        <section>
            <h2>Najwybitniejsi szachiści</h2>
            <br>
            <section id="fischer">
                <h3>Robert James "Bobby" Fischer</h3>
                <p>
                    <img src="img/gms/fischer.jpg" alt="fischer" class="text-image">
                    Robert James Fischer (9 marca 1943 – 17 stycznia 2008) był amerykańskim arcymistrzem szachowym i
                    jedenastym mistrzem świata w szachach. Cudowny szachista,
                    w wieku 14 lat zdobył swój pierwszy z ośmiu rekordowych mistrzostw USA.
                    W 1964 roku wygrał z wynikiem 11:0, jedynym doskonałym wynikiem w historii turnieju.
                    W kwalifikacjach do Mistrzostw Świata 1972 Fischer zgarnął wyniki 6-0 w meczach z
                    Markiem Taimanovem i Bentem Larsenem.
                    Po kolejnym meczu kwalifikacyjnym z Tigranem Petrosianem Fischer wygrał walkę o tytuł
                    z Borysem Spasskim z ZSRR w Reykjaviku, Islandia.
                    Ogłoszony jako zimnowojenna konfrontacja między USA a ZSRR,
                    mecz cieszył się większym zainteresowaniem na całym świecie niż jakiekolwiek mistrzostwa
                    szachowe przed lub od tego czasu.
                    W 1975 roku Fischer odmówił obrony swojego tytułu, gdy nie udało się osiągnąć porozumienia z FIDE,
                    międzynarodowym organem zarządzającym szachami, w sprawie warunków meczu.
                    W rezultacie radziecki pretendent Anatolij Karpow został domyślnie nazwany mistrzem świata.
                    Fischer następnie zniknął z oczu opinii publicznej, chociaż pojawiały się sporadyczne doniesienia
                    o nieprawidłowym zachowaniu. W 1992 roku powrócił, aby wygrać nieoficjalny rewanż ze Spasskim.
                    Odbyła się ona w Jugosławii, która była wówczas pod embargiem ONZ.
                    Jego udział doprowadził do konfliktu z rządem USA, który ostrzegł Fischera,
                    że ​​jego udział w meczu naruszy zarządzenie wykonawczenałożenie amerykańskich sankcji
                    na Jugosławię. Rząd USA ostatecznie wydał nakaz jego aresztowania.
                    Potem Fischer żył na emigracji. W 2004 roku został aresztowany w Japonii i przetrzymywany
                    przez kilka miesięcy za posługiwanie się paszportem, który odebrał rząd USA. Ostatecznie
                    specjalną ustawą islandzkiego parlamentu przyznano mu obywatelstwo islandzkie,
                    co pozwoliło mu mieszkać tam aż do śmierci w 2008 roku.
                    Fischer wniósł wiele trwałych wkładów do szachów. Jego książka Moje 60 pamiętnych partii,
                    opublikowana w 1969 roku, jest uważana za podstawową lekturę w literaturze szachowej.
                    W latach 90. opatentował zmodyfikowany system pomiaru czasu w szachach,
                    który dodawał przyrost czasu po każdym ruchu, co jest obecnie standardową praktyką w
                    najlepszych turniejach i meczach. Wynalazł również losowe szachy Fischera,
                    znane również jako Chess960, wariant szachów, w którym początkowa pozycja bierek jest losowo
                    wybierana do jednej z 960 możliwych pozycji.
                    Fischer wygłosił wiele antysemickich wypowiedzi i zaprzeczał Holokaustowi;
                    jego antysemityzm, wyznawany co najmniej od lat 60,
                    był głównym tematem jego publicznych i prywatnych wypowiedzi.
                    Pojawiły się szerokie komentarze i spekulacje dotyczące jego stanu psychicznego,
                    oparte na jego skrajnych poglądach i ekscentrycznym zachowaniu.
                </p>
                <div class="cboth"></div>
            </section>
            <section id="kasparov">
                <h3>Garry Kasparov</h3>
                <p>
                    <img src="img/gms/kasparov.jpg" alt="kasparov" class="text-image">
                    Garry Kimovich Kasparov (ur. 13 kwietnia 1963) jest rosyjskim arcymistrzem szachowym,
                    byłym mistrzem świata w szachach, pisarzem, działaczem politycznym i komentatorem.
                    Jego szczytowa ocena wynosząca 2851 [2], osiągnięta w 1999 r., była najwyższa odnotowana do czasu,
                    gdy w 2013 r. został wyprzedzony przez Magnusa Carlsena.
                    Od 1984 r. do przejścia na emeryturę w 2005 r.
                    Kasparow zajmował pierwsze miejsce na świecie z rekordowym wynikiem 255 miesięcy w swojej karierze.
                    Kasparow jest również rekordzistą w najbardziej kolejnych profesjonalnych zwycięstwach w turniejach i Szachowych Oskarach.
                    Kasparow został najmłodszym w historii niekwestionowanym mistrzem świata w szachach w 1985 roku w wieku 22 lat,
                    pokonując ówczesnego mistrza Anatolija Karpowa. Posiadał oficjalny tytuł mistrza świata FIDE do 1993 roku,
                    kiedy spór z FIDE doprowadził go do założenia konkurencyjnej organizacji,
                    Professional Chess Association. W 1997 roku został pierwszym mistrzem świata,
                    który przegrał mecz z komputerem pod standardowym czasem, kiedy przegrał z superkomputerem IBM Deep Blue w bardzo
                    nagłośnionym meczu. Kontynuował utrzymywanie „klasycznych” mistrzostw świata w szachach aż do porażki z Vladimirem Kramnikiemw
                    2000 roku. Pomimo utraty tytułu, nadal wygrywał turnieje i był najwyżej ocenianym graczem na świecie, kiedy przeszedł na emeryturę z profesjonalnych szachów w 2005 roku.
                    Od przejścia na emeryturę poświęcił się polityce i pisarstwu. Utworzył ruch Zjednoczonego Frontu Cywilnego i dołączył
                    jako członek Innej Rosji, koalicji przeciwstawiającej się administracji i polityce Władimira Putina.
                    W 2008 roku ogłosił zamiar kandydowania w tegorocznym wyścigu prezydenckim w Rosji, ale po napotkaniu problemów logistycznych
                    w swojej kampanii, za którą obwiniał „oficjalną obstrukcję”, wycofał się.
                    W następstwie rozpoczętych w 2011 roku rosyjskich masowych protestów ogłosił w 2013 roku,
                    że w obawie przed prześladowaniami opuścił Rosję na najbliższą przyszłość.
                    Po ucieczce z Rosji mieszkał z rodziną w Nowym Jorku.
                    W 2014 roku uzyskał obywatelstwo chorwackie i zatrzymał rezydencję w Podstranie koło Splitu.
                    Kasparow jest obecnie przewodniczącym Fundacji Praw Człowieka i przewodniczy jej Międzynarodowej Radzie.
                    W 2017 roku założył Renew Democracy Initiative (RDI), amerykańską organizację polityczną promującą i broniącą liberalnej
                    demokracji w USA i za granicą. Pełni funkcję przewodniczącego grupy. Kasparow jest również Ambasadorem Bezpieczeństwa dla
                    firmy programistycznej Avast.
                </p>
                <div class="cboth"></div>
            </section>
            <section id="carlsen">
                <h3>Magnus Carlsen</h3>
                <p>
                    <img src="img/carlsen.jfif" alt="carlsen" class="text-image">
                    Sven Magnus Øen Carlsen (ur. 30 listopada 1990) jest norweskim arcymistrzem szachowym,
                    który jest pięciokrotnym mistrzem świata w szachach.
                    Jest także trzykrotnym mistrzem świata w szachach szybkich i pięciokrotnym mistrzem świata w szachach błyskawicznych.
                    Carlsen zajmuje pierwsze miejsce w światowych szachowych rankingach FIDE od 1 lipca 2011 roku i ustępuje
                    tylko Garry'emu Kasparovowi w czasie spędzonym jako najwyżej oceniany gracz na świecie. Jego szczytowa ocena
                    wynosząca 2882 jest najwyższa w historii. Jest także rekordzistą w najdłuższej bezkonkurencyjnej passiena poziomie
                    elitarnym w szachach klasycznych.
                    Jako cudowne dziecko Carlsen zajął pierwsze
                    miejsce w grupie C turnieju szachowego Corus wkrótce po ukończeniu 13
                    lat i kilka miesięcy później zdobył tytuł arcymistrza. W wieku 15 lat zdobył mistrzostwo Norwegii w szachach, aw wieku 17 lat zajął wspólne pierwsze miejsce w czołowej grupie Corusa. Przekroczył ocenę 2800 w wieku 18 lat, najmłodszy w tym czasie. W 2010 roku, w wieku 19 lat, osiągnął pierwsze miejsce w światowych rankingach FIDE, będąc najmłodszą osobą, która to zrobiła.
                    Carlsen został mistrzem świata w szachach w 2013 roku,
                    pokonując Viswanathana Ananda. Utrzymał swój tytuł przeciwko Anandowi w następnym roku
                    i wygrał zarówno mistrzostwa świata w szachach szybkich 2014, jak i mistrzostwa świata w
                    błyskawicznym tempie, stając się pierwszym graczem, który zdobył wszystkie trzy tytuły
                    jednocześnie, co powtórzył w 2019 roku. Obronił swój klasyczny tytuł mistrza świata przeciwko
                    Sergeyowi Karjakinowi w 2016 r., przeciwko Fabiano Caruanie w 2018 r. i Ianowi Nepomniachtchi w 2021 r.
                    Carlsen nie obroni tytułu przed Nepomniachtchi w 2023 roku.
                    Znany ze swojego stylu ataku jako nastolatek,
                    Carlsen od tego czasu stał się uniwersalnym graczem.
                    Używa różnych otwarć, aby utrudnić przeciwnikom przygotowanie się przeciwko niemu i zmniejszyć użyteczność
                    komputerowej analizy przed grą. Stwierdził, że gra środkowa jest jego ulubioną częścią gry,
                    ponieważ „sprowadza się do czystych szachów”.
                </p>
                <div class="cboth"></div>
            </section>
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
