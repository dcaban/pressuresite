<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="./css/main.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

</head>

<body>


<div id="cover">
    <a href="#coverimg"><img id="homeImg" src="./img/PERFOMANCE%20DRAFT.png" alt=""></a>
    <a id="firstBox" class="white-text" href="#about"><h3 class="menuButtons center-align">Our Values</h3></a>

    <a id="secondBox"class="white-text" href="#certifications"><h3 class="menuButtons center-align">Our Services</h3></a>
    <a id="thirdBox" class="white-text" href="#quote"><h3 class="menuButtons center-align">Get a Quote</h3></a>
    <a id="fourthBox" class="white-text" href="#contact"><h3 class="menuButtons center-align">Contact</h3></a>

    <a id="firstFake" href="#about"></a>
    <a id="secondFake"class="white-text" href="#certifications"></a>
    <a id="thirdFake" class="white-text" href="#quote"></a>
    <a id="fourthFake" class="white-text" href="#contact"></a>
    <a id="fakeHome" href="#coverimg"></a>



    <div class="parallax-container">
        <div id="filterImg"  class="parallax"><img src="./img/filter%20copy.jpg"></div>
    </div>
    <!--<img id="filterImg" src="./img/filter%20copy.jpg" alt="">-->
    <div id="coverimg" class="scrollspy section"></div>
    <div id="infoCover">
        <img id="logo" src="./img/PERFOMANCE%20DRAFT.png" alt="">

        <!--<h2 class="white-text center-align">Perfomance Kitchen Exhaust Cleaning</h2>-->
        <div id="blueLine"></div>
        <!--<h5 class="center-align blue-grey-text text-darken-5;">Some really informative text goes here</h5>-->

        <a class="arrow down" href="#about"></a>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col s12 m9 l10">

            <div id="about" class="section scrollspy fullsize">
                <div class="row">
                    <div class="dotTitle col s12 center-align white-text"><h1>Our Values</h1></div>
                    <div class="white-text col l3 m12 center-align">


                        <div class="dot"><img class="icon" src="./img/reliability.svg" alt=""></div>
                        <h5>Trustworthiness</h5>
                        <p>Lorem ipsum dolor amet church-key taiyaki skateboard,
                            vinyl umami semiotics tote bag ennui tilde cardigan you probably haven't heard of them.
                            Tote bag normcore kogi freegan, vexillologist chartreuse gastropub actually seitan edison
                            bulb distillery everyday carry church-key farm-to-table tattooed. Hot chicken polaroid live-edge,
                            sustainable jean shorts mixtape ugh. Tousled freegan fingerstache,
                            asymmetrical poutine occupy hot chicken. Truffaut letterpress pork belly YOLO.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/shipped.svg" alt=""></div>
                        <h5>Dependability</h5>
                        <p>Pork belly pok pok roof party, literally banjo keffiyeh fixie gochujang squid.
                            You probably haven't heard of them banjo retro flannel knausgaard microdosing aesthetic.
                            Vaporware try-hard freegan cold-pressed adaptogen viral.
                            Hoodie fam poke literally vexillologist bitters.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/stopwatch.svg" alt=""></div>
                        <h5>Punctuality</h5>
                        <p>Tote bag prism vegan crucifix humblebrag. Tilde blue bottle chillwave forage occupy, ramps bushwick waistcoat mixtape kickstarter.
                            Tilde ugh tattooed 3 wolf moon vexillologist hashtag, locavore art party poutine raw denim sriracha cardigan edison bulb whatever.
                            Fuck Kinfolk four dollar toast hexagon drinking vinegar neutra, freegan prism photo booth tousled quinoa cred meditation.
                            Distillery artisan pinterest meditation literally bespoke, VHS man braid photo booth af before they sold out hoodie.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/fire-alarm.svg" alt=""></div>
                        <h5>Compliance</h5>
                        <p>Leggings 8-bit squid selvage artisan kogi, bushwick venmo chicharrones locavore prism next level taiyaki.
                            Selfies etsy hell of, cornhole marfa fanny pack godard pickled schlitz copper mug. Selfies pop-up vegan knausgaard,
                            ugh la croix authentic kogi yuccie organic locavore williamsburg.
                            PBR&B occupy skateboard bushwick.</p>
                    </div>

                </div>
            </div>



            <div id="certifications" class="section scrollspy fullsize">
                <h1></h1>
            </div>
            <div id="quote" class="section scrollspy fullsize">
                <h1 class="white-text">Get a Quote</h1>
                <div class="contact-form row card quoteForm">
                    <form class="col s12" action="contactFormHandler.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="name" name="name" type="text" class="validate">
                                <label for="name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" name="lastName" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="mail" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Details about your kitchen you love</label>
                            </div>
                        </div>

                        <div class="center-align">
                            <button type="submit" name="submit" class="btn white-text waves-effect">Submit</button>
                        </div>

                    </form>

                </div>
            </div>







            <div id="contact" class="section scrollspy fullsize">
                <p>Content </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>






<!--JavaScript at end of body for optimized loading-->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>