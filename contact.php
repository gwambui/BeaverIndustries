<?php
include("shared/header.php");


?>



<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Header -->
<?php
include ("shared/navmenu.php")
?>



<!-- Content -->
<div id="content-wrapper">
    <div id="content">

        <div class="col-9">

            <!-- Box #2 -->
            <section>
                <h2>Visit our store</h2><hr>
                <p>Beaver Industries(Timber and Furniture)<br>
                    New Pumwani Road<br>
                    Gikomba P.O Box 52166<br>
                    Nairobi, Kenya</p>
                <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2037663733975!2d36.83780802915626!3d-1.2849191591736393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1131dca9c38f%3A0x8a8e187a884aadeb!2sBeaver+Timber+Co.!5e0!3m2!1sen!2sca!4v1525122469573"
                             width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe></div>

                <br><br>

                <h2>Call us</h2><hr>
                <h2>Kinyanjui Wanyoike, Managing Director
                    <a href="tel:+254722765657">Tel: +254 722 675 657</a><br>
                </h2>
                <h2>Sales Specialists</h2><hr>

                <a href="tel:+254722981937">Edwin: +254 722 981 937</a><br>
                    <a href="tel:+254728204489">Cate: +254 728 204 489</a><br>
                    <a href="tel:+254710303030">John: +254 710 303 030</a>
                <h2><br>Email us</h2><hr>
                <a href="mailto:beaver@beaverindustries.co.ke">Email</a>


            </section>

        </div>
    </div>

</div>



<?php include("shared/footer.php"); ?>

