$(document).ready(function() {
    let formButtonClicked = false;
    $('.btn-danger').click(function() {
        formButtonClicked = true;
        // event.preventDefault();
        let firstName = $('input[name=firstname]').val();
        if (firstName == "") {
            $('#fullName.collapse').collapse('show');
            $('#name-row.form-main-content-inner-row').css({
                "background-color": "#ff00001c"
            });
        }
        let lastName = $('input[name=lastname]').val();
        if (lastName == "") {
            $('#fullName.collapse').collapse('show');
            $('#name-row.form-main-content-inner-row').css({
                "background-color": "#ff00001c"
            });
        }
        let email = $('input[name=emailaddress]').val();
        if (email == "") {
            $('#emailAddress.collapse').collapse('show');
            $('#email-inner-row>div').css({
                "background-color": "#ff00001c"
            });
        } else {
            let validRegexForEmail = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
            if (!(validRegexForEmail.test(email))) {
                $('#emailAddress.collapse').collapse('show');
                $('#email-inner-row>div').css({
                    "background-color": "#ff00001c"
                });
                $('#emailAddress p').html("Email must be formatted as name@address.xyz.")
            } else {
                $('#emailAddress.collapse').collapse('hide');
                $('#email-inner-row>div').css({
                    "background-color": "#f4f4f4"
                });
            }
        }
        let phoneNumber = $('input[name=phonenumber]').val();
        if (phoneNumber == "") {
            $('#phoneNumber.collapse').collapse('show');
            $('#phone-inner-row>div').css({
                "background-color": "#ff00001c"
            });
        }
    });


    $('input[name=firstname], input[name=lastname], input[name=emailaddress], input[name=phonenumber]').blur(
        function() {
            let currentSelected = $(this).val();
            let currentElement = $(this).attr("name");
            //
            //will work only when the submit button was clicked previously
            //
            if (formButtonClicked == true) {
                //
                //for FirstName and LastName
                //
                if (currentElement == "firstname" && currentSelected == "") {
                    console.log("work1")
                    $('#fullName.collapse').collapse('show');
                    $('#name-row.form-main-content-inner-row').css({
                        "background-color": "#ff00001c"
                    });
                    $('#fullName p').html("Both (First and Last) are required.")
                } else if (currentElement == "lastname" && currentSelected == "") {
                    console.log("work1")
                    $('#fullName.collapse').collapse('show');
                    $('#name-row.form-main-content-inner-row').css({
                        "background-color": "#ff00001c"
                    });
                    $('#fullName p').html("Both (First and Last) are required.")
                }
                if ($('input[name=firstname]').val() != "" && $('input[name=lastname]').val() != "") {
                    console.log("work2")
                    $('#fullName.collapse').collapse('hide');
                    $('#name-row.form-main-content-inner-row').css({
                        "background-color": "#f4f4f4"
                    });
                }
            }

            //To make them work even, the Submit button was not
            //clicked previously
            //for Email Address
            //
            if (currentElement == "emailaddress") {
                let validRegexForEmail = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
                if (currentSelected == "") {
                    $('#emailAddress.collapse').collapse('show');
                    $('#email-inner-row>div').css({
                        "background-color": "#ff00001c"
                    });
                    $('#emailAddress p').html("Email is required.")
                } else if (currentSelected != "") {
                    if (!(validRegexForEmail.test(currentSelected))) {
                        $('#emailAddress.collapse').collapse('show');
                        $('#email-inner-row>div').css({
                            "background-color": "#ff00001c"
                        });
                        $('#emailAddress p').html("Email must be formatted as name@address.xyz.")
                    } else {
                        $('#emailAddress.collapse').collapse('hide');
                        $('#email-inner-row>div').css({
                            "background-color": "#f4f4f4"
                        });
                    }
                }
            }
            //
            //for Phone Number
            //
            if (currentElement == "phonenumber") {
                if (currentSelected == "") {
                    $('#phoneNumber.collapse').collapse('show');
                    $('#phone-inner-row>div').css({
                        "background-color": "#ff00001c"
                    });
                    $('#phoneNumber p').html("Phone Number is required.");
                } else if (currentSelected != "") {
                    $('#phoneNumber.collapse').collapse('hide');
                    $('#phone-inner-row>div').css({
                        "background-color": "#f4f4f4"
                    });
                }
            }
        });
});