$(document).ready(function () {
    let formButtonClicked = false;
    $('#contact_index_page_form, #contact_page_form').submit(function (event) {
        let everythingAlright = true;
        formButtonClicked = true;
        event.preventDefault();
        let firstName = $('input[name=firstname]').val();
        if (firstName == "") {
            everythingAlright = false;
            $('#fullName.collapse').collapse('show');
            $('#name-row.form-main-content-inner-row').css({
                "background-color": "#ff00001c"
            });
        }
        let lastName = $('input[name=lastname]').val();
        if (lastName == "") {
            everythingAlright = false;
            $('#fullName.collapse').collapse('show');
            $('#name-row.form-main-content-inner-row').css({
                "background-color": "#ff00001c"
            });
        }
        let email = $('input[name=emailaddress]').val();
        if (email == "") {
            everythingAlright = false;
            $('#emailAddress.collapse').collapse('show');
            $('#email-inner-row>div').css({
                "background-color": "#ff00001c"
            });
        } else {
            let validRegexForEmail = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
            if (!(validRegexForEmail.test(email))) {
                everythingAlright = false;
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
            everythingAlright = false;
            $('#phoneNumber.collapse').collapse('show');
            $('#phone-inner-row>div').css({
                "background-color": "#ff00001c"
            });
        } else {
            // because Number('string') returns NaN (which is of type 'number')
            if (String(Number(phoneNumber)) == 'NaN') {
                everythingAlright = false;
                $('#phoneNumber.collapse').collapse('show');
                $('#phone-inner-row>div').css({
                    "background-color": "#ff00001c"
                });
                $('#phoneNumber p').html("String is not Allowed")
            } else if (phoneNumber.length > 10 || phoneNumber.length < 10) {
                everythingAlright = false;
                $('#phoneNumber.collapse').collapse('show');
                $('#phone-inner-row>div').css({
                    "background-color": "#ff00001c"
                });
                $('#phoneNumber p').html("Must have 10 Digits Only")
            }
        }

        if (everythingAlright == true) {
            event.currentTarget.submit();
        }
    });


    $('input[name=firstname], input[name=lastname], input[name=emailaddress], input[name=phonenumber]').blur(
        function () {
            let currentElementValue = $(this).val();
            let currentElement = $(this).attr("name");
            //
            //will work only when the submit button was clicked previously
            //
            if (formButtonClicked == true) {
                //
                //for FirstName and LastName
                //
                if (currentElement == "firstname" && currentElementValue == "") {
                    $('#fullName.collapse').collapse('show');
                    $('#name-row.form-main-content-inner-row').css({
                        "background-color": "#ff00001c"
                    });
                    $('#fullName p').html("Both (First and Last) are required.")
                } else if (currentElement == "lastname" && currentElementValue == "") {
                    $('#fullName.collapse').collapse('show');
                    $('#name-row.form-main-content-inner-row').css({
                        "background-color": "#ff00001c"
                    });
                    $('#fullName p').html("Both (First and Last) are required.")
                }
                if ($('input[name=firstname]').val() != "" && $('input[name=lastname]').val() != "") {
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
                if (currentElementValue == "") {
                    $('#emailAddress.collapse').collapse('show');
                    $('#email-inner-row>div').css({
                        "background-color": "#ff00001c"
                    });
                    $('#emailAddress p').html("Email is required.")
                } else if (currentElementValue != "") {
                    if (!(validRegexForEmail.test(currentElementValue))) {
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
                if (currentElementValue == "") {
                    $('#phoneNumber.collapse').collapse('show');
                    $('#phone-inner-row>div').css({
                        "background-color": "#ff00001c"
                    });
                    $('#phoneNumber p').html("Phone Number is required.");
                } else {
                    // because Number('string') returns NaN (which is of type 'number')
                    if (String(Number(currentElementValue)) == 'NaN') {
                        $('#phoneNumber.collapse').collapse('show');
                        $('#phone-inner-row>div').css({
                            "background-color": "#ff00001c"
                        });
                        $('#phoneNumber p').html("String is not Allowed")
                    } else if (currentElementValue.length > 10 || currentElementValue.length < 10) {
                        $('#phoneNumber.collapse').collapse('show');
                        $('#phone-inner-row>div').css({
                            "background-color": "#ff00001c"
                        });
                        $('#phoneNumber p').html("Must have 10 Digits Only")
                    } else if (currentElementValue != "") {
                        $('#phoneNumber.collapse').collapse('hide');
                        $('#phone-inner-row>div').css({
                            "background-color": "#f4f4f4"
                        });
                    }
                }
            }
        });
});