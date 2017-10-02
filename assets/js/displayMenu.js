function getid(){
    document.getElementById()
}


function showmenu(name){

    /*document.getElementById("listing").innerHTML =
        "<li>" + "Armoires" + "</li>\n"+
        "<li>" + "Beds" + "</li>\n"
    ;*/



    switch (name){
        case "navbdr": document.getElementById("listing").innerHTML =

            "<li>" + "Beds" + "</li>\n"+
            "<li>" + "Armoires" + "<li>\n"+
            "<li>" + "ShoeRacks" + "<li>\n"+
            "<li>" + "Storage" + "<li>\n"+
            "<li>" + "Mirrors" + "<li>\n";
            document.getElementById("hoverbox").style.left = "50%";

        break;
        case "navdin": document.getElementById("listing").innerHTML =
            "<li>" + "Books" + "</li>\n"+
            "<li>" + "Armoires" + "<li>\n"+
            "<li>" + "ShoeRacks" + "<li>\n"+
            "<li>" + "Storage" + "<li>\n"+
            "<li>" + "Mirrors" + "<li>\n";
            document.getElementById("hoverbox").style.left = "55%";
        break;
    }
    document.getElementById("hoverbox").style.display = "block";

}
function hidemenu(){
   document.getElementById("hoverbox").style.display ="none";
   // this.style.display ="none";
}