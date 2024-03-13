$(document).ready(function () {
    $("#saveBtn").on("click",function(){
        var fname = $("#fname").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        if (fname == "" || email == "" || pass == "") {
            $(".errorMessage").html("All Fields are Required!").slideDown();
            $(".successMessage").slideUp();
        } else {
            
            $.ajax({
                url: "signUp.php",
                type: "POST",
                data: { first_name: fname, email_id: email, pass_id: pass },
                success: function (data) {
                    if (data == 1) {
                        $(".successMessage").html("Data Saved Successfully").slideDown();
                        $(".errorMessage").slideUp();
                        $("#SignUpForm").trigger("reset");
                        window.location.href="logInForm.php";
                    } else {
                        $(".errorMessage").html(data).slideDown();
                        $(".successMessage").slideUp();
                    }
                }
            });
        }

    }); 
});