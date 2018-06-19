


$(password);
$(swapImage);
function swapImage(){

    $(".setimg").click(function () {

        let elem = $(this).attr('src');


        $("#largeimg").attr('src',elem);


    });

}
function password(){
    let passInput = document.getElementById("psw");
    let passverify = $("#psw2");
    let letter = document.getElementById("letter");
    let capital = document.getElementById("capital");
    let number = document.getElementById("number");
    let length = document.getElementById("length");


// When the user clicks on the password field, show the message box
passInput.onfocus = function() {
    $("#message").css ("display", "block");
};

// When the user clicks outside of the password field, hide the message box
passInput.onblur = function() {
    $('#message').css ('display', 'none');

};

// When the user starts to type something inside the password field
    passInput.onkeyup = function() {
        // Validate lowercase letters
        let lowerCaseLetters = /[a-z]/g;
        if(passInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        let upperCaseLetters = /[A-Z]/g;
        if(passInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        let numbers = /[0-9]/g;
        if(passInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(passInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    };

    passverify.keyup(function() {

        let pass = $("#psw").val();
        let pass2 = passverify.val();
        let n = pass.localeCompare(pass2);

       // console.log(pass);
        //console.log(pass2);
        if(!n){
            $("#match").text('Passwords Match')
        }else
        {
            $("#match").text('Passwords don\'t Match')
        }

    });

    passverify.blur(function() {
        $("#match").css ('display', 'none');

    });

    passverify.focus(function() {
        $("#match").css ('display', 'block');

    });
}