

$(document).ready(function () {

    $("#logIn").on("click", function () {
        var email = $("#email").val();
        var pass = $("#pass").val();
        if (email == "" || pass == "") {
            $(".errorMessage").html("All Fields are Required!").slideDown();
            $(".successMessage").slideUp();
        } else {

            $.ajax({
                url: "logIn.php",
                type: "POST",
                data: { email_id: email, pass_id: pass },
                success: function (data) {
                    if (data == 1) {
                        $("#logInForm").trigger("reset");
                        window.location.href = "welcome.php";
                    } else {
                        $(".errorMessage").html("Failed! Check Your Email and Password Again").slideDown();
                        $(".successMessage").slideUp();
                    }
                }
            });
        }

    });



});