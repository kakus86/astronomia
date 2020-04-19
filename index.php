<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Tytuł strony</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700|Roboto+Mono:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
</head>

<body>

    <section class="main" id="main">
        <nav class="main__nav-container">
            <h1 class="main__nav-logo">Astronomia</h1>
            <ul class="main__nav-menu">
                <a href="#main" class="main__nav-menu-item">
                    <li>Strona główna</li>
                </a>
                <a href="#solar-system" class="main__nav-menu-item">
                    <li>Układ słoneczny</li>
                </a>
                <a href="#gallery" class="main__nav-menu-item">
                    <li>Galeria</li>
                </a>
                <a href="#quiz" class="main__nav-menu-item">
                    <li>Quiz</li>
                </a>
            </ul>
        </nav>
        <div class="main__stars">
            <img src="images/star.png" class="main__stars-item3">
            <img src="images/star.png" class="main__stars-item">
            <img src="images/star.png" class="main__stars-item2">
            <img src="images/star.png" class="main__stars-item3">
            <img src="images/star.png" class="main__stars-item">
            <img src="images/star.png" class="main__stars-item2">
            <img src="images/star.png" class="main__stars-item3">
            <img src="images/star.png" class="main__stars-item">
            <img src="images/star.png" class="main__stars-item2">
            <img src="images/star.png" class="main__stars-item3">
            <img src="images/star.png" class="main__stars-item">
            <img src="images/star.png" class="main__stars-item2">
            <img src="images/star.png" class="main__stars-item3">
        </div>

    </section>


    <section class="solar-system" id="solar-system">
        <h1 class="solar-system__header">Układ słoneczny</h1>
        <img class="solar-system__image" src="images/uklad.jpg" alt="Układ słoneczny">
        <div class="solar-system__about">
            <p>Układ słoneczny jest układem planetarnym w galaktyce Drogi Mlecznej, składającym się ze Słońca i
                powiązanych z nim grawitacyjnie
                ciał niebieskich: ośmiu planet, co najmniej 205 ich księżyców, pięciu planet karłowatych i miliardów (a
                być może nawet bilionów) małych ciał, do których zalicza się planetoidy, komety i meteoroidy, a także
                pył międzyplanetarny.</p>
            <p>Zbadane regiony Układu Słonecznego zawierają, licząc od Słońca: cztery planety skaliste (Merkury, Wenus,
                Ziemia, Mars), pas planetoid składający się z małych skalistych ciał, cztery zewnętrzne gazowe olbrzymy
                (Jowisz, Saturn, Uran, Neptun) oraz drugi pas składający się z obiektów skalno-lodowych, tak zwany Pas
                Kuipera.
            </p>
            <p>Szacuje się, że formowanie się i ewolucja Układu Słonecznego rozpoczęły się 4,6 miliarda lat temu, gdy na
                skutek grawitacyjnego zapadnięcia się części niestabilnego obłoku molekularnego rozpoczął się proces
                formowania Słońca i innych gwiazd. Układ wciąż podlega ewolucyjnym i chaotycznym zmianom i nie będzie
                istniał wiecznie w obecnej postaci. Za około 4 miliardy lat rozpocznie się zderzenie Galaktyki Andromedy
                z Drogą Mleczną, a w ciągu około 5 miliardów lat Słońce wielokrotnie się powiększy, stając się czerwonym
                olbrzymem, co doprowadzi do zniszczenia planet wewnętrznych, w tym Ziemi. </p>
            <small><i>- Źródło Wikipedia</i></small>
        </div>
        <div class="solar-system__container">
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Mercury</h3>
                    <ul>
                        <li>Pierwsza planeta układu słonecznego</li>
                        <li>Typ planety: planeta skalista</li>
                        <li>Temperatura powierzchni od −173 °C do 427 °C.</li>
                        <li>Okres obrotu: 58 d 15 h 26 m</li>
                        <li>Okres orbitalny: 87,969 dni</li>
                        <li>Gęstość: 5427 kg/m³</li>
                        <li>Nie posiada naturalnych satelit</li>
                    </ul>
                </div>
                <img src="images/merkury.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Wenus</h3>
                    <ul>
                        <li>Druga planeta układu słonecznego</li>
                        <li>Typ planety: planeta skalista</li>
                        <li>Temperatura powierzchni: średnio: 737 K</li>
                        <li>Okres obrotu: −243,025 d (obrót wsteczny)</li>
                        <li>Okres orbitalny: 224,701 d</li>
                        <li>Gęstość: 5243 kg/m³</li>
                        <li>Nie posiada naturalnych satelit</li>
                    </ul>
                </div>
                <img src="images/wenus.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Ziemia</h3>
                    <ul>
                        <li>Trzecia planeta układu słonecznego</li>
                        <li>Typ planety: planeta skalista</li>
                        <li>Temperatura powierzchni: 185–331 K</li>
                        <li>Okres obrotu: 23,9345 h</li>
                        <li>Okres orbitalny: 365,256363004 d</li>
                        <li>Gęstość: 5513 kg/m³</li>
                        <li>Naturalny satelita: Księżyc</li>
                    </ul>
                </div>
                <img src="images/ziemia.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Mars</h3>
                    <ul>
                        <li>Czwarta planeta układu słonecznego</li>
                        <li>Typ planety: planeta skalista</li>
                        <li>Temperatura powierzchni: -140.15 °C – 19.85 °C</li>
                        <li>Okres obrotu: 24,6229 h</li>
                        <li>Okres orbitalny: 686,980 d</li>
                        <li>Gęstość: 3933 kg/m³</li>
                        <li>Naturalne satelity: Deimos i Fobos</li>
                    </ul>
                </div>
                <img src="images/mars.jpeg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Jowisz</h3>
                    <ul>
                        <li>Piąta planeta układu słonecznego</li>
                        <li>Typ planety: planeta gazowa</li>
                        <li>Temperatura powierzchni: 165 K</li>
                        <li>Okres obrotu: 9,9250 h</li>
                        <li>Okres orbitalny: 4332,589 d</li>
                        <li>Gęstość: 1326 kg/m³</li>
                        <li>Naturalne satelity: 79,<br>w tym Europa, Io, Ganimedes, Kallisto</li>
                    </ul>
                </div>
                <img src="images/jowisz.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Saturn</h3>
                    <ul>
                        <li>Szósta planeta układu słonecznego</li>
                        <li>Typ planety: planeta gazowa</li>
                        <li>Temperatura powierzchni: 134 K</li>
                        <li>Okres obrotu: 10,656 h</li>
                        <li>Okres orbitalny: 29,457 lat</li>
                        <li>Gęstość: 687 kg/m³</li>
                        <li>Naturalne satelity: 82,<br>w tym Tytan, Mimas, Rea</li>
                    </ul>
                </div>
                <img src="images/saturn.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Uran</h3>
                    <ul>
                        <li>Siódma planeta układu słonecznego</li>
                        <li>Typ planety: planeta gazowa</li>
                        <li>Temperatura powierzchni: 76 K</li>
                        <li>Okres obrotu: −17,24 h (obrót wsteczny)</li>
                        <li>Okres orbitalny: 84,011 lat</li>
                        <li>Gęstość: 1271 kg/m³</li>
                        <li>Naturalne satelity: 27,<br>w tym Umbriel, Miranda, Ariel, Oberon</li>
                    </ul>
                </div>
                <img src="images/uran.jpg" class="solar-system__planet-image">
            </div>
            <div class="solar-system__planet">
                <div class="solar-system__planet-opis">
                    <h3>Neptun</h3>
                    <ul>
                        <li>Ósma planeta układu słonecznego</li>
                        <li>Typ planety: planeta gazowa</li>
                        <li>Temperatura powierzchni: 72 K</li>
                        <li>Okres obrotu: 16,11 h</li>
                        <li>Okres orbitalny: 164,79 lat</li>
                        <li>Gęstość: 1638 kg/m³</li>
                        <li>Naturalne satelity: 14,<br>w tym Tryton, Proteusz</li>
                    </ul>
                </div>
                <img src="images/neptun.jpg" class="solar-system__planet-image">
            </div>

        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="gallery__content">
            <h1 class="gallery__header">Galeria</h1>
            <div class="gallery__container">
                <img src="images/1.jpg" class="gallery__item">
                <img src="images/2.jpg" class="gallery__item">
                <img src="images/3.jpg" class="gallery__item">
                <img src="images/4.jpg" class="gallery__item">
                <img src="images/5.jpg" class="gallery__item">
                <img src="images/6.jpg" class="gallery__item">
                <img src="images/7.jpg" class="gallery__item">
                <img src="images/1.jpg" class="gallery__item">
                <img src="images/2.jpg" class="gallery__item">
                <img src="images/3.jpg" class="gallery__item">
                <img src="images/4.jpg" class="gallery__item">
            </div>
        </div>
    </section>
    <section class="quiz" id="quiz">
        <h1 class="quiz__header">Quiz</h1>
        <div class="quiz__container">
            
            <?php
            $massage1 = "";
            $massage2 = "";
            $massage3 = "";
            $massage4 = "";
            $massage5 = "";
            $massage6 = "";
            $massage7 = "";
            $massage8 = "";
            $massage9 = "";
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if(isset($_GET["first"])){
                    $_SESSION['first']=$_GET["first"];
                    $first = "wenus";
                    if ($first == $_GET["first"]){
                    $massage1 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage1 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }
                
                if (isset($_GET["second"])){
                    $second = "mercury";
                    if ($second == $_GET["second"]){
                    $massage2 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage2 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }
                if (isset($_GET["third"])){
                    $third = "mars";
                    if ($third == $_GET["third"]){
                    $massage3 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage3 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }
                if (isset($_GET["fourth"])){
                    $fourth = "mars";
                    if ($fourth == $_GET["fourth"]){
                    $massage4 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage4 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }
                if (isset($_GET["fifth"])){
                    $fifth = "saturn";
                    if ($fifth == $_GET["fifth"]){
                    $massage5 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage5 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                } 
                if (isset($_GET["sixth"])){
                    $sixth = "skalista";
                    if ($sixth == $_GET["sixth"]){
                    $massage6 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage6 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }  
                if (isset($_GET["seventh"])){
                    $seventh = "8";
                    if ($seventh == $_GET["seventh"]){
                    $massage7 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage7 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                } 
                if (isset($_GET["eighth"])){
                    $eighth = "pas";
                    if ($eighth == $_GET["eighth"]){
                    $massage8 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage8 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                    }
                }   
                if (isset($_GET["ninth"])){
                    $ninth = "mleczna";
                    if ($ninth == $_GET["ninth"]){
                    $massage9 = "<div class='good'>To jest poprawna odpowiedź</div>";
                    }
                    else {
                    $massage9 = "<div class='bad'>Udzielono złej odpowiedzi</div>";    
                   }
                }
               
                 
            if(isset($_GET["reset"])){
                unset($_SESSION['first']);
                header("Location: index.php#quiz");
            }
        }
            ?>

            <form action="index.php#quiz" method="GET" class="quiz__form">
                <ul class="quiz__questions">
                    <fieldset class="quiz__question"><legend>Pytanie #1</legend>
                    <li>
                        <p>Planetą gazową nie jest:</p>
                        <input type="radio" name="first" id="uran" value="uran"><label for="uran">Uran</label><br>
                        <input type="radio" name="first" id="wenus" value="wenus"><label for="wenus">Wenus</label><br>
                        <input type="radio" name="first" id="neptun" value="neptun"><label for="neptun">Neptun</label><br>
                        <div class="massage"><?php echo $massage1 ?></div>
                    </li></fieldset>
                    <fieldset  class="quiz__question"><legend>Pytanie #2</legend>
                    <li>
                        <p>
                            Pierwszą planetą układu słonecznego jest:</p>
                        <input type="radio" name="second" id="mars" value="mars"><label for="mars">Mars</label><br>
                        <input type="radio" name="second" id="uran" value="uran"><label for="uran">Uran</label><br>
                        <input type="radio" name="second" id="mercury" value="mercury"><label
                            for="mercury">Merkury</label><br>
                            <div class="massage"><?php 
                            echo $massage2 ?></div>
                    </li></fieldset>
                    <fieldset class="quiz__question"><legend>Pytanie #3</legend>
                    <li>
                        <p>
                            Deimos to naturalny satelita:</p>
                        <input type="radio" name="third" id="jowisz" value="jowisz"><label for="jowisz">Jowisz</label><br>
                        <input type="radio" name="third" id="ziemia" value="ziemia"><label
                            for="ziemia">Ziemia</label><br>
                        <input type="radio" name="third" id="mars" value="mars"><label for="mars">Mars</label><br>
                            <div class="massage"><?php 
                            echo $massage3 ?></div>
                    </li></fieldset>
                    <fieldset class="quiz__question"><legend>Pytanie #4</legend>
                    <li>
                        <p>
                            Która planeta nie obraca się w sposób wsteczny: </p>
                        <input type="radio" name="fourth" id="mars" value="mars"><label for="mars">Mars</label><br>
                        <input type="radio" name="fourth" id="wenus" value="wenus"><label
                            for="wenus">Wenus</label><br>
                        <input type="radio" name="fourth" id="uran" value="uran"><label for="uran">Uran</label><br>
                            <div class="massage"><?php 
                            echo $massage4 ?></div>
                    </li></fieldset>
                    <fieldset class="quiz__question"><legend>Pytanie #5</legend>
                    <li>
                        <p>
                            Która planeta ma najwięcej naturalnych satelitów: </p>
                        <input type="radio" name="fifth" id="jowisz" value="jowisz"><label for="jowisz">Jowisz</label><br>
                        <input type="radio" name="fifth" id="ziemia" value="ziemia"><label
                            for="ziemia">Ziemia</label><br>
                        <input type="radio" name="fifth" id="saturn" value="saturn"><label for="saturn">Saturn</label><br>
                            <div class="massage"><?php 
                            echo $massage5 ?></div>
                    </li></fieldset>
                    <fieldset  class="quiz__question"><legend>Pytanie #6</legend>
                    <li>
                        <p>
                            Wenus to planeta:</p>
                        <input type="radio" name="sixth" id="gazowa" value="gazowa"><label for="gazowa">Gazowa</label><br>
                        <input type="radio" name="sixth" id="skalista" value="skalista"><label for="skalista">Skalista</label><br>
                        <input type="radio" name="sixth" id="pylowa" value="pylowa"><label
                            for="pylowa">Pyłowa</label><br>
                            <div class="massage"><?php 
                            echo $massage6 ?></div>
                    </li></fieldset>
                    <fieldset  class="quiz__question"><legend>Pytanie #7</legend>
                    <li>
                        <p>
                            W naszym Układzie Słonecznym znajduje się:</p>
                        <input type="radio" name="seventh" id="10" value="10"><label for="10">10 planet</label><br>
                        <input type="radio" name="seventh" id="9" value="9"><label for="9">9 planet</label><br>
                        <input type="radio" name="seventh" id="8" value="8"><label
                            for="8">8 planet</label><br>
                            <div class="massage"><?php 
                            echo $massage7 ?></div>
                    </li></fieldset>
                    <fieldset  class="quiz__question"><legend>Pytanie #8</legend>
                    <li>
                        <p>
                            Pas obiektów skalno-lodowych za orbitą Neptuna to:</p>
                        <input type="radio" name="eighth" id="oblok" value="oblok"><label for="oblok">Mały Obłok Magellana</label><br>
                        <input type="radio" name="eighth" id="pas" value="pas"><label for="pas">Pas Kuipera</label><br>
                        <input type="radio" name="eighth" id="galaktyka" value="galaktyka"><label
                            for="galaktyka">Galaktyka Andromedy</label><br>
                            <div class="massage"><?php 
                            echo $massage8 ?></div>
                    </li></fieldset>
                    <fieldset  class="quiz__question"><legend>Pytanie #9</legend>
                    <li>
                        <p>
                            Nasz Układ Słoneczny znajduje się w galaktyce:</p>
                        <input type="radio" name="ninth" id="trojkat" value="trojkat"><label for="trojkat">Galaktyka Trójkąta</label><br>
                        <input type="radio" name="ninth" id="magellan" value="magellan"><label for="magellan">Wielki Obłok Magellana</label><br>
                        <input type="radio" name="ninth" id="mleczna" value="mleczna"><label
                            for="mleczna">Mroga Mleczna</label><br>
                            <div class="massage"><?php 
                            echo $massage9 ?></div>
                    </li></fieldset>
                </ul>
                <div><button type="submit">Sprawdź odpowiedzi</button><button type="submit" value="reset">Od nowa</button></div>
            </form>
        </div>
    </section>



</body>

</html>