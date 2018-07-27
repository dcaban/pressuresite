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
    <a href="#coverimg"><img id="menuImg" src="./img/menu.svg" alt=""></a>
    <a href="#coverimg"><img id="homeImg" src="./img/home.svg" alt=""></a>
    <img id="close" src="./img/close.svg" alt="">
    <div id="fakeClose"></div>

    <a id="firstBox" class="white-text" href="#about"><h3 class="menuButtons center-align">Values</h3></a>

    <a id="secondBox"class="white-text" href="#certifications"><h3 class="menuButtons center-align">Services</h3></a>
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
        <span class="col s12 m9 l10">

            <div id="about" class="section scrollspy fullsize">
                <div class="row">
                    <div class="dotTitle col s12 center-align white-text"><h1>Our Values</h1><p>We are here to make maintenance as simple and easy as possible</p></div>
                    <div class="white-text col l3 m12 center-align">


                        <div class="dot"><img class="icon" src="./img/reliability.svg" alt=""></div>
                        <h5>Simplicity</h5>
                        <p>We work hard to make your experience simple. We take on the stress of keeping up with regular maintenance, to keep your kitchen in compliance so, you can spend more time focusing on what matters.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/shipped.svg" alt=""></div>
                        <h5>Dependability</h5>
                        <p>We believe the job is not done until everything is done. We strive to be as detail oriented as you are in your kitchen. We ensure to leave the area better condition than when we came.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/stopwatch.svg" alt=""></div>
                        <h5>Punctuality</h5>
                        <p>Your time is important, we know that. Because your time is important, we will do everything to respect your time. We relentlessly strive to be on time and to not waste yours.</p>
                    </div>
                    <div class="white-text col l3 m12 center-align">
                        <div class="dot"><img class="icon" src="./img/fire-alarm.svg" alt=""></div>
                        <h5>Compliance</h5>
                        <p>Local regulations require regular routine maintenance on hood exhausts. We are Phil Ackland Certified to ensure compliance. Performance Hood Cleaning makes rescheduling appointments easy.</p>
                    </div>

                </div>
            </div>



            <div id="certifications" class="section scrollspy fullsize">
                <div class="row">
                <h1 class="white-text center-align">Our Services</h1>
                <h3 class="center-align col s12 white-text">Commercial Patio Cleaning</h3>
                <h3 class="center-align col s12 white-text">Kitchen Exhaust Cleaning</h3>
                <h3 class="center-align col s12 white-text">Gas Station Canopy Cleaning</h3>
                <h3 class="center-align col s12 white-text">Commercial Exterior Cleaning</h3>
                <h3 class="center-align col s12 white-text">Sidewalks Pressure Washing</h3>
                <h3 class="center-align col s12 white-text">Parking Lot Cleaning</h3>
                <h3 class="center-align col s12 white-text">Roof Pressure Washing</h3>
                </div>
            </div>
            <div id="quote" class="section scrollspy fullsize">
                <h1 class="center-align white-text">Get a Quote</h1>
                <div class="contact-form row card quoteForm">
                    <form class="col s12" action="contactFormHandler.php" method="post">
                        <div class="row">
                            <div class="input-field col s6">
                                <input  id="name" name="name" type="text" class="validate">
                                <label for="name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" name="last_name" type="text" class="validate">
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
                            <div class="input-field col s6">
                                <input  id="city" name="city" type="text" class="validate">
                                <label for="city">City</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="state" name="state" type="text" class="validate">
                                <label for="state">State</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="phone" name="phone" type="text" class="validate">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="input-field col s6">
                                <input  id="company" name="company" type="text" class="validate">
                                <label for="company">Company Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                <label for="message">Details about your kitchen</label>
                            </div>
                        </div>


                        <div class="center-align">
                            <button type="submit" name="submit" class="btn white-text waves-effect">Submit</button>
                        </div>

                    </form>

                </div>
            </div>







            <div id="contact" class="section scrollspy fullsize">
                <h4 class="white-text">Contact Us</h4>

                <h6>Phone:</h6>
                <h6 class="amber-text">(863)409-8375</h6>
                <h6>Email:</h6>
                    <h6 class="amber-text">forcleanhoods@gmail.com</h6>


            </div>
        </div>
    </div>
</div>
</div>
</div>






<!--JavaScript at end of body for optimized loading-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<!--<script>-->
<!--    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;-->
<!--    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')-->
<!--</script>-->
<!--<script src="https://www.google-analytics.com/analytics.js" async defer></script>-->
</body>

</html>
