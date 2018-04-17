


var NavigatorDrop = function ($hoverbox) {


    var nav = $("nav");
    var navpos = nav.position();
    var nav2 = $("#navDining");
    var anchor  = nav2.position();


    this.hideHover = function () {

        $hoverbox.css("display","none").fadeout(1000);

    };

    this.showHoverBox = function(value) {
        var selector = $(value);
        var pos = selector.position();

        //$hoverbox.show();
        $hoverbox.css("left", navpos.left + pos.left + anchor.left-20).fadeIn(500);

    };


};

$(function ()

{   var opt;
    var navdrop = new NavigatorDrop($('#hoverbox'));

    $("nav").hover(function() { //navdrop.setTrackN();
        }, function()
    {


        /*************************************/
        $("#hoverbox").hover(function () {//navdrop.resetTrackN();
        navdrop.setTrackH();


            }, function () {
                //navdrop.resetTrackH();
                navdrop.hideHover();
        });
       /* ************************************/



        $("#contact").mouseenter(function(){//navdrop.resetTrackN();
        navdrop.hideHover();});


         $("#banner").mouseenter(function(){//navdrop.resetTrackN();
        navdrop.hideHover();});

            $("#content-wrapper").mouseenter(function(){//navdrop.resetTrackN();
                navdrop.hideHover();});

    });

    $("#navLivingroom").mouseover(function(){

        opt = $(this).attr('name');


        $("#hoverbox").html(

            "<a href =index.php>" + "Seating" + "</a><br>"+
            "<a href =index.php>" + "Coffee tables" + "</a><br>"+
            "<a href =index.php>" + "Book shelves" + "</a><br>"+
            "<a href =index.php>" + "Tv stands" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navDining").mouseover(function(){

        opt = $(this).attr('name');


        $("#hoverbox").html(

            "<a href =index.php>" + "Dining sets" + "</a><br>"+
            "<a href =index.php>" + "Dining tables" + "</a><br>"+
            "<a href =index.php>" + "Dining chairs" + "</a><br>"+
            "<a href =index.php>" + "Credenza" + "</a><br>"+
            "<a href =index.php>" + "Stools" + "</a><br>"+
            "<a href =index.php>" + "Benches" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navBedroom").mouseover(function(){

    opt = $(this).attr('name');

        $("#hoverbox").html(

            "<a href =index.php>" + "Beds" + "</a><br>"+
            "<a href =index.php>" + "Chaise" + "</a><br>"+
            "<a href =index.php>" + "Vanity" + "</a><br>"+
            "<a href =index.php>" + "Drawers" + "</a><br>"+
            "<a href =index.php>" + "Dressers" + "</a><br>"+
            "<a href =index.php>" + "Armoires" + "</a><br>"+
            "<a href =index.php>" + "Wardrobes" + "</a>");


       navdrop.showHoverBox(opt);
    });

    $("#navBaby").mouseover(function(){

        opt = $(this).attr('name');

        $("#hoverbox").html(

            "<a href =index.php>" + "Cribs" + "</a><br>"+
            "<a href =index.php>" + "Crib sets" + "</a><br>"+
            "<a href =index.php>" + "Rockers" + "</a><br>"+
            "<a href =index.php>" + "Transition beds" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navKids").mouseover(function(){

        opt = $(this).attr('name');

        $("#hoverbox").html(

            "<a href =index.php>" + "Beds" + "</a><br>"+
            "<a href =index.php>" + "Book shelves" + "</a><br>"+
            "<a href =index.php>" + "Shoe racks" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navOutdoor").mouseover(function(){

        opt = $(this).attr('name');

        $("#hoverbox").html(

            "<a href =index.php>" + "Day beds" + "</a><br>"+
            "<a href =index.php>" + "Deck sofas" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navHome").mouseover(function(){
        opt = $(this).attr('name');

        $("#hoverbox").html(

            "<a href =index.php>" + "Wood doors" + "</a><br>"+
            "<a href =index.php>" + "Door locks" + "</a><br>"+
            "<a href =index.php>" + "Coat racks" + "</a><br>"+
            "<a href =index.php>" + "Shoe racks" + "</a><br>"+
            "<a href =index.php>" + "Mirrors" + "</a>");

        navdrop.showHoverBox(opt);
    });

    /*$("#navKitchen").mouseover(function(){
            console.log("php");
            var opt = $(this).attr('name');


            $("#listing").html(

                "<a href =index.php>" + "books" + "</a><br>"+
                "<a href =index.php>" + "drawers" + "</a><br>"+
                "<a href =index.php>" + "cots" + "</a><br>"+
                "<a href =index.php>" + "carpets" + "</a><br>"+
                "<a href =index.php>" + "rockers" + "</a><br>"+
                "<a href =index.php>" + "sofas" + "</a>");

            navdrop.showHoverBox(opt);
        });*/
    /*$("#navOffice").mouseover(function(){
        console.log("php");
        var opt = $(this).attr('name');


        $("#listing").html(

            "<a href =index.php>" + "books" + "</a><br>"+
            "<a href =index.php>" + "drawers" + "</a><br>"+
            "<a href =index.php>" + "cots" + "</a><br>"+
            "<a href =index.php>" + "carpets" + "</a><br>"+
            "<a href =index.php>" + "rockers" + "</a><br>"+
            "<a href =index.php>" + "sofas" + "</a>");

        navdrop.showHoverBox(opt);
    });
    */
});



