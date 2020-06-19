<?php
include("shared/header.php");

?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Header -->
<?php

include ("shared/navmenu.php")
?>




<div id ="banner-wrapper">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="assets/Images/CoffeeTables/Crate1404.jpg" style="max-height:400px; margin:auto" alt="Contemporary coffee table">
            </div>

            <div class="item">
                <img src="assets/Images/Sofa/Harusi1263.jpg" style="max-height:400px; margin:auto" alt="Elegant sofas">
            </div>

            <div class="item">
                <img  src="assets/Images/BedsCribsDeckers/Elsa1375.jpg" style="max-height:400px; margin:auto" alt="Kids Beds">
            </div>
            <div class="item">
                <img  src="assets/Images/Sofa/Blockshape1254.jpg" style="max-height:400px; margin:auto" alt="Daybeds">
            </div>
            <div class="item">
                <img  src="assets/Images/Outdoor/Beach1152.jpg" style="max-height:400px; margin:auto" alt="Daybeds">
            </div>
            <div class="item">
                <img  src="assets/Images/CoffeeTables/Soho1481.jpg" style="max-height:400px; margin:auto" alt="Daybeds">
            </div>


            <div id="banner">     </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class ="clr"></div>
    </div>
</div>

<!-- Features -->
<div id="features-wrapper">
    <div id="features">
            <div class ="sec1">
                <!-- Feature #1 -->
                <section>
                    <a href="#" class="bordered-feature-image"><img src="assets/Images/BedsCribsDeckers/Bby1001.jpg" alt="white baby cot" /></a>
                    <h2>Welcome to Beaver Industries</h2>
                    <p>
                        Your home for custom furniture, Bring your ideas
                        to life with the help of our
                        <a href="contact.php">consultants</a>
                        for free. Leave the task to us and rest easy. Our experts will take
                        measurements and recommend the ideal piece for your home.

                    </p>
                </section>
            </div>

            <div class ="sec1">

                <!-- Feature #2 -->
                <section>
                    <a href="#" class="bordered-feature-image"><img src="assets/Images/BedsCribsDeckers/Castle1016.jpg" alt="" /></a>
                    <h2>Your dream bed?</h2>
                    <p>
                        A great day starts with a good night sleep. A solid and beautiful
                        bed gets you a step closer to your dream sleep. Check out our <a href= "bedroom.php">
                            gallery of beds</a> or visit our store.
                    </p>
                </section>

            </div>
            <div class ="sec1">

                <!-- Feature #3 -->
                <section>
                    <a href="#" class="bordered-feature-image"><img src="assets/Images/DiningSets/Bachelor1119.jpg" alt="" /></a>
                    <h2>Dining King</h2>
                    <p class="index">
                        Be crowned the top host or hostess with your classic elegant
                        <a href="dining.php">dining sets</a>
                        We offer dining tables for groups of four, six or more.
                    </p>
                </section>

            </div>
            <div class ="sec1">

                <!-- Feature #4 -->
                <section>
                    <a href="#" class="bordered-feature-image"><img src="assets/Images/Locks/Laos1137.jpg" alt="Door lock" /></a>
                    <h2>All things fixtures</h2>
                    <p>
                        You can count on the Beaver Industries experts to know the right
                        door handle, kitchen or bathroom faucet, window railing,
                    </p>
                </section>
            </div>
    </div>
    <div class ="clr"></div>
</div>


<!-- Content -->
<div id="content-wrapper">
    <div id="content">

                <!-- Box #1 -->
        <section class="sec2">
            <header>
                <h2>Who We Are</h2>
                <h3>The Beaver Family</h3>
            </header>
            <a href="#" class="feature-image"><img src="assets/Images/HeaderBi.png" alt="Beaver Industries Staff" /></a>
            <p>
                        Beaver has been in the timber and furniture business since 2008 and home deco and fixtures since 1980.
                        Beaver boasts a wealth of experts in perfecting the look of the home.
                        In venturing into furinuture and and wood finishes, our work comes full circle
                        as we are now a one stop shop, floor to ceiling for everything your house needs to make it your home.
            </p>
        </section>




                <!-- Box #2 -->
        <section class="sec2 indexmidcontent">
            <header>
                <h2>Services we offer</h2>
                <h3>Beaver values Customer Satisfaction</h3>
            </header>
            <ul class="check-list">
                <li>Professional delivery Services </li>
                <li>Expert installation for quality results</li>
                <li>Free on location furniture assembly</li>
                <li>Fundi for on site measurements</li>
                <li>Free consultation and price quote</li>
                <li>Custom designs: dream it-we build it</li>
                <li>Repairs and alteration-when possible</li>

            </ul>
        </section>

                <!-- Box #3-->
        <section class="sec2">
            <header>
                <h2>Customer Corner</h2>
                <h3>Drop us a line on facebook</h3>
            </header>
            <div id="fb" class="fb-page" data-href="https://www.facebook.com/BeavertimberCo/" data-tabs="timeline"
                 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                 data-show-facepile="true"><blockquote cite="https://www.facebook.com/BeavertimberCo/" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/BeavertimberCo/ ">Beaver Timber</a></blockquote></div>

        </section>

    </div>
    <div class ="clr"></div>
</div>

<?php include("shared/footer.php"); ?>
