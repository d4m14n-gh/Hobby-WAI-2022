window.onload = play;

var last=1;
var questn=1;
var res=0;
var checked=false;
var sect;
const answ=[1, 2, 2, 3, 1, 2];
const quest=["",
    "Na czym polega gambit w szachach?",
    "Co oznacza wyrażenie \"Szach mat\" w tłumaczeniu z j.perskiego",
    "Kto został pierwszym oficjalnym mistrzem świata w szachach?",
    "Kto jest uważany najlepszym szachistą wszechczasów?",
    "Jacy szachiści rozegrali \"Partie stulecia\"?"];
const answp=[["", "", ""],
    ["Zamiana miejscami króla i wieży", "Poświecenie bierki dla lepszego ustawienia", "Polega na zbiciu hetmana pionem"],
    ["Otoczony", "Król jest martwy", "Bez wyjścia"],
    ["Emanuel Lasker", "Aleksandr Alechin", "Wilhelm Steinitz"],
    ["Garri Kasparov", "Bobby Fisher", "Magnus Carlsen"],
    ["Aleksandr Alechin i Wilhelm Steinitz", "Bobby Fisher i Boris Spassky", "Boris Spassky i Michaił Tal"]
];
const pref=["A: ", "B: ", "C: "];

function checkq(nm){
    if(checked)
        return;
    document.getElementById("q"+last).setAttribute("style", "border: none; box-shadow: none");
    last=nm;
    document.getElementById("q"+nm).setAttribute("style", "border: 1px silver solid; box-shadow: 0 0 5px silver");
    check();
}

function check(){
    var color="forestgreen";
    if(answ[questn-1]!==last){
        document.getElementById("q"+answ[questn-1]).setAttribute("style", "border: 1px darkgoldenrod solid; box-shadow: 0 0 5px "+color);
        color="brown";
    }
    else
        res++;
    document.getElementById("q"+last).setAttribute("style", "border: 1px "+color+" solid; box-shadow: 0 0 5px "+color);
    checked=true;
}

function goNext(){
    if(!checked)
        return;
    questn++;
    if(questn===6)
        document.getElementById("q").getElementsByTagName("button")[0].innerText="zakończ"
    if(questn===7){
        goEnd();
        return;
    }
    checked=false;
    for (var i=1;i<4;i++){
        document.getElementById("q"+i).setAttribute("style", "border: none; box-shadow: none");
        document.getElementById("q"+i).innerText=pref[i-1]+answp[questn-1][i-1];
    }
    document.getElementById("legend").innerText="Quiz-Ile wiesz o szachach? pytanie "+questn+" z 6";
    document.getElementById("question").innerText=quest[questn-1];
    document.getElementById("quiz-image").setAttribute("src", "img/quiz/"+questn+".webp");
}

function goEnd(){
    document.getElementById("q").innerHTML="";
    document.getElementById("legend").innerText="Quiz-Ile wiesz o szachach? podsumowanie";
    var stv=1;
    var sbrv=res;
    var tv=1;
    var brv=res;
    if (window.sessionStorage) {
        if(sessionStorage.getItem("st")){
            stv=Number(sessionStorage.getItem("st"));
            stv++;
        }
        sessionStorage.setItem("st", stv);

        if(sessionStorage.getItem("sbr")){
            sbrv=Number(sessionStorage.getItem("sbr"));
            if(res>sbrv)
                sbrv=res;
        }
        sessionStorage.setItem("sbr", sbrv);
    }

    if (window.localStorage) {
        if(localStorage.getItem("t")){
            tv=Number(localStorage.getItem("t"));
            tv++;
        }
        localStorage.setItem("t", tv);

        if(localStorage.getItem("br")){
            brv=Number(localStorage.getItem("br"));
            if(res>brv)
                brv=res;
        }
        localStorage.setItem("br", brv);
    }
    document.getElementById("q").innerHTML="<h2>Twój wynik to: "+res+"/6!</h2>\n" +
        "Liczba podejść: "+tv+"<br>\n" +
        "Liczba podejść w bieżącej sesji: "+stv+"<br>\n" +
        "Najlepszy wynik w bieżącej sesji: "+sbrv+"<br>\n" +
        "Najlepszy wynik: "+brv+"<br>\n"+
        "<button onclick='play()'>zagraj ponownie</button>";
}
function play(){
    last=1;
    questn=1;
    res=0;
    checked=false;
    document.getElementById("quiz").remove();
    sect=document.createElement("section");
    sect.setAttribute("id", "quiz");
    document.getElementsByTagName("article")[0].appendChild(sect);
    sect.innerHTML=
        "<h3>Quiz</h3>\n" +
        "      <fieldset style=\"text-align: left; width: 100%\">\n" +
        "        <legend id=\"legend\">Quiz-Ile wiesz o szachach? 1/6</legend>\n" +
        "        <div id=\"q\">\n" +
        "          <h3 id=\"question\">Z jakiego państwa najprawdopodobniej pochodzą szachy?</h3>\n" +
        "          <img src=\"img/medival-chess.jpg\" alt=\"partia\" id=\"quiz-image\">\n" +
        "          <ul>\n" +
        "            <li onclick=\"checkq(1)\" id=\"q1\">A: Z Indii</li>\n" +
        "            <li onclick=\"checkq(2)\" id=\"q2\">B: Z Włoch</li>\n" +
        "            <li onclick=\"checkq(3)\" id=\"q3\">C: Z Persji</li>\n" +
        "          </ul>\n" +
        "          <button onclick=\"goNext()\">następny</button>\n" +
        "          <br>\n" +
        "        </div>\n" +
        "      </fieldset>";
}

