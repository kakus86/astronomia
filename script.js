(() => {
    const button = document.querySelector(".js-main__nav-mobile-button");
    const menu = document.querySelector(".js-main__nav-menu")

    const toggleClass = () => {
        menu.classList.toggle("main__nav-menu--open");
    };

    button.addEventListener("click", toggleClass);
    menu.addEventListener("click", toggleClass);
})();

var pole = document.querySelector(".js-solar-system__planet");

    pole.addEventListener("click", function(){
        var image = document.querySelector(".solar-system__planet-image");
        var bonus = document.querySelector(".solar-system__planet-bonus");
    
        image.style.display = "none";
        bonus.style.display = "unset";
    })

    var quiz_container = document.querySelector(".js-quiz__container");
    var btn = document.querySelector(".quiz__button");
    var quiz_questions = document.createElement("DIV");
    quiz_questions.classList.add("quiz__questions");
    quiz_container.appendChild(quiz_questions); //dodaje diva do dokumentu
    var pytanie = document.querySelector("quiz__questions");
    var pytania = [
        ["Planetą gazową nie jest:", "Uran", "Wenus", "Neptun", "Wenus" ],
        ["Pierwszą planetą układu słonecznego jest:", "Mars", "Uran", "Merkury", "Merkury"],
        ["Deimos to naturalny satelita:", "Jowisza", "Ziemii", "Marsa", "Marsa"],
        ["Która planeta nie obraca się w sposób wsteczny:", "Mars", "Wenus", "Uran", "Mars"],
        ["Która planeta ma najwięcej naturalnych satelitów:", "Jowisz", "Ziemia", "Saturn", "Saturn"],
        ["Wenus to planeta:", "Gazowa", "Skalista", "Pyłowa", "Skalista"],
        ["W naszym Układzie Słonecznym znajduje się:", "10 planet", "9 planet", "8 planet", "8 planet"],
        ["Pas obiektów skalno-lodowych za orbitą Neptuna to:", "Mały Obłok Magellana", "Pas Kuipera", "Galaktyka Andromedy", "Pas Kuipera"],
        ["Nasz Układ Słoneczny znajduje się w galaktyce:", "Galaktyka Trójkąta", "Wielki Obłok Magellana", "Droga Mleczna", "Droga Mleczna"],
    ];//pytanie; odpowiedz;odpowiedz;odpowiedz;poprawna odpowiedz
    
    function wyswietl_pytanie(i) {
        quiz_questions.innerHTML = "<h3 class='quiz__question'>"+pytania[i][0]+"</h3><label class='quiz__item'><input type='radio' name='astro' value='"+pytania[i][1]+"'>"+pytania[i][1]+"</label><label class='quiz__item'><input type='radio' name='astro' value='"+pytania[i][2]+"'>"+pytania[i][2]+"</label><label  class='quiz__item'><input type='radio' name='astro' value='"+pytania[i][3]+"'>"+pytania[i][3]+"</label><div class='massage'></div><button class='check button'>Sprawdź</button>";
        /*var massage = document.createElement("DIV");
        var quiz_question = document.querySelector(".quiz__question");
        quiz_question.appendChild(massage);*/
        var massage = document.querySelector(".massage");


        var sprawdz = document.querySelector(".check");
        sprawdz.addEventListener("click", function() {
            var answer = document.querySelector('input[name="astro"]:checked').value;
            var correct = pytania[i][4];
    
            if (answer == correct) {
                document.querySelector(".check").style.display = "none";
                massage.innerHTML = "<p class='good'>Poprawna odpowiedź</p><button class='button' id='next'>Następne pytanie</button>";
                var next = document.querySelector("#next");
                next.addEventListener("click", function() {
                    next.style.display="none";
                    massage.innerHTML = "";
                    if(i+1<pytania.length){
                        wyswietl_pytanie(i+1);
                    }
                    else{
                        quiz_questions.innerHTML = "<p class='koniec'>Koniec :)</p>";
                    }
                });
            }
            else {
                massage.innerHTML = "<p class='bad'>Źle! Spróbuj jeszcze raz</p>";
                }
        });
    }
    
    btn.addEventListener("click", function () {
        btn.style.display = "none";    
        wyswietl_pytanie(0);

    });
    

