<!DOCTYPE html>
<html lang="pl">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/pngfromsvg/rook.png" type="image/x-icon">
  <title>Szachy-zasady gry</title>
  <link rel="stylesheet" href="static/style-uni.css">
  <link rel="stylesheet" href="static/form.css">
  <link rel="stylesheet" href="static/rules.css">
  <link rel="stylesheet" href="static/style-media.css">
  <script src="static/quiz.js"></script>
  <style id="style">
    html{
      --theme-color: olive;
    }
  </style>
</head>
<body>
<img src="img/background.jpg" alt="none" id="background-image">
<div id="div-top">
  <header style="text-align: center">
    <h1 id="left-header">GŁÓWNE</h1
    ><h1 id="center-header">
    <span><img src="img/pngfromsvg/rook.png" alt="logo"></span>
  </h1
  ><h1 id="right-header">ZASADY</h1>
  </header>
</div>
<div id="div-left">
  <div style="overflow: hidden;height: 700px">
    <nav>
      <ul>
        <li>
          <a href="/"><img src="img/home.png" alt="logo"><br><span>Strona Głowna</span></a>
        </li>
        <li class="current">
          <img src="img/rules.png" alt="logo"><br><span>Zasady Gry</span>
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
</div>
<div id="div-right">
  <article>
    <h2 style="display: none">article</h2>
    <section>
      <h2>Zasady gry</h2>
      <h3>Bierki</h3>
      <p>
        <img src="img/figury.jpg" alt="figury" class="text-image">
        Przeciwnicy dysponują zestawami bierek w odmiennych kolorach.
        W skład każdego z nich wchodzi szesnaście bierek: król, hetman (potocznie zwany też damą, damką, królową lub królówką),
        dwa gońce (z niemieckiego nazywane czasami lauframi), dwa skoczki (zwane też popularnie końmi lub konikami), dwie wieże oraz osiem pionów
        (pionków). Wartość figur szachowych może być absolutna lub względna. Przy założeniu, że wartość absolutna piona wynosi 1,
        względne wartości statyczne figur przedstawiają się następująco:
      </p>
      <div class="cboth"></div>
      <ul>
        <li>hetman – 9 (według niektórych autorów 9,5 lub 10) punktów</li>
        <li>wieża – 5 punktów</li>
        <li>goniec – 3 punkty</li>
        <li>skoczek – 3 punkty</li>
        <li>król – nie ma przypisanej wartości ze względu na to, że nie można go wymienić, ale jego siłę szacuje się na około 4 punktów (od 3,5 do 5)</li>
      </ul>
      <p>
        W konkretnej sytuacji na szachownicy wartość względna jest ważniejsza od wartości absolutnej.
        Wynika to z tego, że w określonych przypadkach figury mogą mieć różne wartości, na przykład w
        pozycjach o charakterze zamkniętym wartość skoczka przewyższa wartość gońca i odwrotnie – w pozycjach otwartych wartość
        gońca jest większa niż skoczka (a tym bardziej pary gońców nad parą skoczków). Podobnie dochodzący do pola przemiany pion może mieć wartość
        o wiele wyższą niż 1 punkt.
        Jeśli jeden z graczy ma figury o sumarycznej wartości punktowej większej niż drugi, jest to podstawą do stwierdzenia,
        że ma przewagę materialną. Jednak nie zawsze musi ona przesądzać o wygranej – czasami decyduje przewaga pozycyjna. Debata
        nad wartością skoczków i gońców (dotycząca też kolorów pól, po których poruszają się gońce) również jest natury pozycyjnej i nie ma sensu
        bez odniesienia do konkretnej sytuacji na szachownicy. Z kolei dwie wieże mają przewagę nad hetmanem, mimo że gra tym ostatnim jest z reguły łatwiejsza.
        Wartości punktowe poszczególnych figur mają charakter umowny i zależą od konkretnej pozycji na szachownicy. Są jednak dobrą wskazówką dla początkujących
        szachistów, zwłaszcza przy podejmowaniu decyzji o wymianie figur. Wówczas w oparciu o wartości punktowe poszczególnych figur mogą oni stosować następujące reguły:
        Przy przewadze materialnej powinno dążyć się do uproszczenia pozycji (poprzez wymianę figur), sprowadzając grę do końcówki.
        Wartość punktowa pionka rośnie wraz ze zbliżaniem się do pola przemiany (patrz rozdział „Reguły”).
        Wartość skoczka zależy od charakteru pozycji: w zamkniętych pozycjach skoczek (3,4) ma przewagę nad gońcem (3), natomiast w otwartych pozycjach na odwrót
        (skoczek 1,7, goniec 3); wszystko zależy od konkretnego ustawienia figur na szachownicy.
        Siła bojowa króla rośnie wraz ze zmniejszaniem się liczby figur na szachownicy: jest on wtedy znacznie mniej narażony
        na atak matowy przeciwnika, dzięki czemu może stać się aktywną bierką.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/svg/pawn.svg" alt="pionek" class="piece">
        Pionki
      </h3>
      <p>
        Ich na polu gry jest najwięcej lecz mają jednocześnie najmniejsze możliwości ruchu mogąc się ruszać jedynie
        o jedno pole do przodu. Są jednak od tej zasady wyjątki bowiem w pierwszym ruchu w grze pion może wykonać ruch
        o dwa pola (pamiętać jednak musimy, że nadal może to być jedynie ruch do przodu w linii prostej).
        Wyjątek stanowi też sytuacja gdy w na ukos od naszego pionka znajdzie się figura przeciwnika, wtedy może on
        poruszyć się na ukos właśnie bijąc figurę wroga.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/pngfromsvg/knight.png" alt="skoczek" class="piece">
        Skoczek
      </h3>
      <p>
        To dość ciekawa figura mogąca mieć naprawdę istotną rolę podczas gry w szachy.
        Przede wszystkim uwagę zwraca specyficzny zakres ruchu skoczka gdyż figura ta wykonuje ruch w kształcie litery L (trzy pola
        do przodu i jedno w bok - dowolnie lewa lub prawa).
        Co ciekawe skoczek to druga oprócz pionków figura, którą możemy rozpoczynać grę. To co jeszcze
        czyni skoczka wyjątkową figurą w szachach to fakt, że może on przeskakiwać inne figury i dotyczy to
        zarówno figur przeciwnika jak i naszych własnych. Jak więc widać skoczek daje naprawdę duże możliwości
        taktyczne i tylko od nas zależy czy uda nam się je odpowiednio wykorzystać.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/pngfromsvg/bishop.png" alt="goniec" class="piece">
        Goniec
      </h3>
      <p>
        Ta figura może poruszać się jedynie po przekątnej aczkolwiek może wykonywać ruch o dowolną liczbę pól.
        Goniec biały porusza się jedynie po białych polach natomiast czarny po czarnych. Gońce jednego koloru można rozróżniać w zależności
        od ich początkowego pola, nazywając je odpowiednio królewskim i hetmańskim. Ponieważ goniec zawsze operuje na polach tego samego koloru,
        częściej używa się rozróżnienia na gońce białopolowe i czarnopolowe. Dla białych goniec królewski będzie gońcem białopolowym, a
        hetmański czarnopolowym, natomiast dla czarnych goniec królewski będzie gońcem czarnopolowym a hetmański białopolowym.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/pngfromsvg/rook.png" alt="wieża" class="piece">
        Wieża
      </h3>
      <p>
        Wieża porusza się po liniach pionowych i poziomych, w dowolnym kierunku, o dowolną liczbę niezajętych pól. Wieża bije bierkę przeciwnika, zajmując jej pole.
        Uczestniczy również wraz z królem w specyficznym ruchu, zwanym <a href="#roszada">roszadą</a>. Na pustej szachownicy niezależnie od miejsca wieża atakuje zawsze 14 pól.
        Wieża jest silniejszą figurą od gońca i skoczka (jej wartość jest wyceniana na 5 punktów). Przyjmuje się, że różnica wartości pomiędzy wieżą a gońcem
        (skoczkiem) wynosi dwa piony. Wymiana wieży na gońca lub skoczka nazywana jest stratą jakości lub potocznie jakością (w niektórych rejonach Polski
        spotkać się z określeniem kwalitas). Para 2 lekkich figur ma zazwyczaj przewagę nad jedną wieżą,
        natomiast dwie wieże w zdecydowanej większości przypadków są silniejsze od hetmana. Wieża i hetman są nazywane ciężkimi figurami, goniec i skoczek – lekkimi.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/pngfromsvg/queen.png" alt="hetman" class="piece">
        Hetman
      </h3>
      <p>
        To jest z kolei najsilniejsza figura w grze bowiem jej możliwości ruchu są nieograniczone.
        Hetman może poruszać się o dowolna liczbę pól zarówno w przód i w tył a także na boki i na ukos.
        Warto więc mądrze wykorzystywać Hetmana podczas rozgrywki bowiem jego strata może być dla nas bolesna.
      </p>
    </section>
    <section>
      <h3>
        <img src="img/pngfromsvg/king.png" alt="król" class="piece">
        Król
      </h3>
      <p>
        Najważniejsza figura w grze w szachy, która jednocześnie ma mocno ograniczony zakres ruchu.
        Król w szachach może się bowiem poruszać jedynie o jedno pole w każdym kierunku.
        Jak więc widać każda z figur ma swoją określoną specyfikę przez co mniej czy bardziej może przydać się w różnych sytuacjach.
      </p>
    </section>
    <section>
      <h3>Jak grać w szachy?</h3>
      <p>
        Skoro już wiemy jak mogą poruszać się poszczególne figury na szachownicy to pora opowiedzieć sobie nieco o zasadach odpowiadając na
        tytułowe pytanie o to "jak grać w szachy?". Podstawa to początek gry a zacząć musimy od odpowiedniego ustawienia figur.
        Zasady gry w szachy jasno określają kolejność ustawienia figur. Idąc od prawej:
      </p>
      <ul>
        <li>Wieża</li>
        <li>Skoczek</li>
        <li>Goniec</li>
        <li>Król</li>
        <li>Hetman</li>
        <li>Goniec</li>
        <li>Skoczek</li>
        <li>Wieża</li>
      </ul>
      <img src="img/chessboard.png" alt="szachownica" class="board">
      <p>
        Jak więc widać Hetman i Król to to figury pojedyncze, które ustawiane są
        w środku a po lewej i prawej mają figury podwójne w postaci Wieży, Skoczka i Gońca.
        Gdy ustawienie pierwszej linii figur będzie już gotowe pora na drugą linie w której umieszczamy wszystkie pionki z naszego koloru.
        Gdy ustawienie figur jest już poprawne to można rozpocząć właściwą rozgrywkę. Zasady
        gry w szachy jasno definiują, że pierwszy ruch wykonuje gracz mający białe figury i może
        wykorzystać do tego tylko pionek albo skoczka. Potem kolejne ruchy gracze wykonują już na zmianę, raz jeden raz drugi.
        Celem gry w szachy jest doprowadzenie dopadnięcie króla przeciwnika. Gdy król znajduje
        się w zasięgu bicia naszej figury następuje mat i w takim przypadku w kolejnym ruchu przeciwnik musi wykonać właśnie ruch królem na bezpieczne pole.
        Grę definitywnie kończy szach mat a więc ustawienie w którym król przeciwnika bez względu na ruch jaki wykona byłby zbity w następnej turze.
      </p>
      <div class="cboth"></div>
    </section>
    <section>
      <h3>Szach i mat</h3>
      <p>
        Kiedy król jest natychmiast atakowany, mówi się, że jest szachowany . Ruch w odpowiedzi na szach jest legalny tylko wtedy, gdy prowadzi do pozycji,
        w której król nie jest już szachowany. Może to obejmować zbicie elementu sprawdzającego; wstawienie figury między szachową figurę a króla (co jest możliwe
        tylko wtedy, gdy atakującą figurą jest hetman, wieża lub goniec,
        a między nią a królem znajduje się pole); lub przesunięcie króla na pole, na którym nie jest atakowany. Roszada nie jest dopuszczalną odpowiedzią na szach.
        Celem gry jest zamatowanie przeciwnika; dzieje się tak, gdy król przeciwnika jest szachowany i nie ma legalnego sposobu na wyprowadzenie go z szachu. Nigdy
        nie jest legalne, aby gracz wykonał ruch, który stawia lub pozostawia szacha własnego króla gracza. W grach zwykłych często ogłasza się „czek” podczas
        szachowania króla przeciwnika, ale nie jest to wymagane przez zasady gry w szachy i zwykle nie jest wykonywane w turniejach.
      </p>
    </section>
    <section id="roszada">
      <h3>Roszada</h3>
      <div id="ani-board">
        <img src="img/ani/wk.png" alt="król" id="king">
        <img src="img/ani/wr.png" alt="wieża" id="rook">
      </div>
      <p>
        Raz na grę każdy król może wykonać ruch zwany roszadą . Roszada polega na przesunięciu króla o dwa pola w kierunku wieży tego samego koloru na tym samym poziomie,
        a następnie umieszczeniu wieży na polu, które król przekroczył.
        Roszada jest dopuszczalna, jeżeli spełnione są następujące warunki:
      </p>
      <ul>
        <li>Ani król, ani wieża nie poruszały się wcześniej podczas gry.</li>
        <li>Między królem a wieżą nie ma figur.</li>
        <li>Król nie jest szachowany i nie przechodzi ani nie ląduje na żadnym polu atakowanym przez wrogą figurę.</li>
        <li>Roszada jest nadal dozwolona, ​​jeśli wieża jest atakowana lub gdy wieża przecina atakowane pole.</li>
      </ul>
    </section>
    <section>
      <h3>Strony internetowe do nauki gry w szachy</h3>
      <p>
        Te sześć najlepszych stron internetowych to najlepsze miejsca do rozpoczęcia gry w szachy online:
      </p>
      <ul>
        <li><a href="https://www.chess.com/" target="_blank">chess.com.</a></li>
        <li><a href="https://lichess.org/" target="_blank">lichess.org.</a></li>
        <li><a href="https://chess24.com/pl" target="_blank">chess24.com.</a></li>
        <li><a href="https://www.chessable.com/" target="_blank">chessable.com.</a></li>
        <li><a href="https://pl.chesstempo.com/" target="_blank">chesstempo.com.</a></li>
        <li><a href="https://cclchess.com/" target="_blank">cclchess.com.</a></li>
      </ul>
    </section>
    <section id="quiz">
      <h2 style="display: none">article</h2>
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