


let NavigatorDrop = function ($hoverbox) {


    let nav = $("nav");
    let navpos = nav.position();
    let nav2 = $("#navDining");
    let anchor  = nav2.position();

    this.setVars = function(){
         nav = $("nav");
         navpos = nav.position();
         nav2 = $("#navDining");
         anchor  = nav2.position();
    };

    this.hideHover = function () {

        $hoverbox.css("display","none");
    };

    this.showHoverBox = function(value) {
        let selector = $(value);
        let pos = selector.position();

        //$hoverbox.show();
        console.log(value);
        if(value === "#navHome"){ $hoverbox.css( "right", pos.right).fadeIn(500);}
        else{$hoverbox.css("left", navpos.left + pos.left + anchor.left + 40).fadeIn(500);
            //$hoverbox.css("right", pos.right).fadeIn(500);
            }

    };


};

$(navDropdown);
$(itemDisplay);

function navDropdown() {
    let opt;
    let navdrop = new NavigatorDrop($('#hoverbox'));

    $( window ).resize(function() {
        navdrop.setVars();
    });

    $("nav").hover(function () { //navdrop.setTrackN();
    }, function () {


        /*************************************/
        $("#hoverbox").hover(function () {}, function () {navdrop.hideHover();});
        /* ************************************/

        $("#contact").mouseenter(function () {navdrop.hideHover();});


        $("#banner").mouseenter(function () {navdrop.hideHover();});

        $("#content-wrapper").mouseenter(function () {navdrop.hideHover();});

    });


    $("#navLivingroom").mouseover(function () {

        opt = $(this).attr('name');


        $("#hoverbox").html(
            "<a href =livingroom_seating.php>" + "Seating" + "</a><br>" +
            "<a href =livingroom_coffeetables.php>" + "Coffee tables" + "</a><br>" +
            "<a href =livingroom_bookshelves.php>" + "Book shelves" + "</a><br>" +
            "<a href =livingroom_tvstands.php>" + "Tv stands" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navDining").mouseover(function () {

        opt = $(this).attr('name');


        $("#hoverbox").html(
            "<a href =dining_sets.php>" + "Dining sets" + "</a><br>" +
            "<a href =dining_tables.php>" + "Dining tables" + "</a><br>" +
            "<a href =dining_chairs.php>" + "Dining chairs" + "</a><br>" +
            "<a href =dining_credenza.php>" + "Credenza" + "</a><br>" +
            "<a href =dining_stools.php>" + "Stools" + "</a><br>" +
            "<a href =dining_benches.php>" + "Benches" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navBedroom").mouseover(function () {

        opt = $(this).attr('name');

        $("#hoverbox").html(
            "<a href =bedroom_beds.php>" + "Beds" + "</a><br>" +
            "<a href =bedroom_chaise.php>" + "Chaise" + "</a><br>" +
            "<a href =bedroom_vanity.php>" + "Vanity" + "</a><br>" +
            "<a href =bedroom_storage.php>" + "Storage" + "</a>");


        navdrop.showHoverBox(opt);
    });

    $("#navBaby").mouseover(function () {

        opt = $(this).attr('name');

        $("#hoverbox").html(
            "<a href =baby_cribs.php>" + "Cribs" + "</a><br>" +
            "<a href =baby_cribsets.php>" + "Crib sets" + "</a><br>" +
            "<a href =baby_rockers.php>" + "Rockers" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navKids").mouseover(function () {

        opt = $(this).attr('name');

        $("#hoverbox").html(
            "<a href =kids_beds.php>" + "Beds" + "</a><br>" +
            "<a href =kids_bookshelves.php>" + "Book shelves" + "</a><br>" +
            "<a href =kids_shoeracks.php>" + "Shoe racks" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navOutdoor").mouseover(function () {

        opt = $(this).attr('name');

        $("#hoverbox").html(
            "<a href =outdoor_daybeds.php>" + "Day beds" + "</a><br>" +
            "<a href =outdoor_decksofas.php>" + "Deck sofas" + "</a>");

        navdrop.showHoverBox(opt);
    });

    $("#navHome").mouseover(function () {
        opt = $(this).attr('name');

        $("#hoverbox").html(
            "<a href =home_doors.php>" + "Wood doors" + "</a><br>" +
            "<a href =home_locks.php>" + "Door locks" + "</a><br>" +
            "<a href =home_coatracks.php>" + "Coat racks" + "</a><br>" +
            "<a href =home_shoeracks.php>" + "Shoe racks" + "</a><br>" +
            "<a href =home_mirrors.php>" + "Mirrors" + "</a>");

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
}

