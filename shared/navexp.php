
<style>
    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>



<div id="header-wrapper" class =".dropdown">

    <header id="header" class="5grid">
        <!--<div id = "contact"><a href="contact.php">Contact Us</a></div>
        <div>

            <!-- Logo
            <div><img src="assets/Images/beaver-logo.svg" width = "80px" height = "80 px" alt="BI logo" /> </div>
            <h1><a href="index.php">Beaver Industries</a></h1>
        </div> -->
        <div id="nav">
            <!-- Nav onmouseover="showmenu('')" onmouseout="setTimeout(hidemenu, 3000)"-->
            <nav class="dropbtn">

                <!-- <a href="index.php"><span>Homepage</span></a>
                <a id = "navKitchen" name ="#navKitchen"   href=#>Kitchen</a>-->

                <a id = "navLivingroom" name = "#navLivingroom"  href=#>Livingroom</a>
                <a id = "navDining" name = '#navDining' href=#>Dining</a>

                <a id = "navBedroom" name ="#navBedroom"  href=#>Bedroom</a>
                <a id = "navBaby" name ='#navBaby'   href=#>Baby</a>
                <a id = "navKids" name = '#navKids'  href=#>Kids</a>
                <a id = "navOutdoor" name ="#navOutdoor"   href=#>Outdoor</a>
                <a id = "navHome" name = "#navHome"   href=#>Home</a>

                <!--onmouseover="this.style.display = 'block'"
                onmouseout="this.style.display = 'none'"-->



            </nav>

        </div>

    </header>
    <div  id = "hoverbox" class="dropdown-content">

    </div>
