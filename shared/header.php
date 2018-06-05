<?php
$cookie_name = "beaver";
$cookie_value = "beaverpages";
if(!isset($_COOKIE)){setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/");}

//session
if(!isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html>
    <head>
        <title> | Beaver Industries</title>
       <!--Google analytics tracking code-->
        <style>.async-hide { opacity: 0 !important} </style>
        <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
                h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
                (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
            })(window,document.documentElement,'async-hide','dataLayer',4000,
                {'GTM-KFVT7RW':true});</script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-119203606-1', 'auto');
            ga('require', 'GTM-KFVT7RW');
            ga('send', 'pageview');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-M8GN99K');
            gtag('config', 'UA-119203606-1');

        </script>


        <!-- End Google Tag Manager -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Wood home finishing, Custom furniture for your home or office at great prices.Nairobi. Kenya" />
        <meta name="Keywords" content="Furniture, beds, desk, baby cots, doors, floors, wooden stairs, block board" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster|Yanone+Kaffeesatz:200,300,400" rel="stylesheet">
        <link rel="icon" type="image/svg" href=".\assets\Images\beaver-logo.svg"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css" />
       <!-- <link rel="stylesheet" href="assets/css/content.css" />-->

        <!--nav menu drop down list--> <script src =assets/js/displayMenu.js></script>
        <!--Data manipulation--> <script src =assets/js/data.js></script>

    </head>

    <body>
    <!-- Global site tag (gtag.js) - Google Analytics -->

