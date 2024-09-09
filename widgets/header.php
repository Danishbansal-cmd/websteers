<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="images/logo/favicon.png">
    <meta name="description" content="Website creator">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Web Steers
    </title>
    <!-- for bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- for bootstrap js version-5.3.3 -->
    <script src="js/bootstrap.js"></script>

    <!-- jquery cdn version-3.7.1 -->
    <script src="js/jquery.js"></script>

    <!-- for root.css -->
    <link href="css/root.css" rel="stylesheet">

    <!-- for header.css -->
    <link href="css/header.css" rel="stylesheet">
    
    <!-- for index.css -->
    <link href="css/index.css" rel="stylesheet">

    <!-- for about_us.css -->
    <link href="css/about_us.css" rel="stylesheet">
    
    <!-- for Privacy_policy and Terms_and_condition css -->
    <link href="css/policy_and_condition.css" rel="stylesheet">
    
    <!-- for Services Page css -->
    <link href="css/services.css" rel="stylesheet">
    
    <!-- for footer.css -->
    <link href="css/footer.css" rel="stylesheet">

    <!-- Style for the Contact Form -->
    <link rel="stylesheet" href="css/contact_form.css">
        
    <!-- Script for Handling Form css-->
    <link href="css/handle_form.css" rel="stylesheet"></script>

    <!-- Script for Contact Form -->
    <script src="js/contact_form_script.js"></script>

    <!-- for font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- for font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>
    <script>
    $(document).ready(function() {
        $(".hamburger")
            .off()
            .click(function() {
                $(this).toggleClass("is-active");
                $("body").toggleClass("is-active");
                $(".navbar-main").toggleClass("is-active");
                $(".responsive-menu-background").toggleClass("is-active");
                $(".header-main").toggleClass("is-active");
                $(".logo-main-top").toggleClass("is-active");
            });
    });
    </script>

    <header class="header-master">
        <div class="container">
            <div class="header align-items-center header-main">
                <div class="logo-main-top">
                    <div class="logo-area-link-box"><a href="./index.php"><div class="logo-area"></div></a></div>
                </div>
                <nav class="navbar-main">
                    <div>
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./about-us-websteers.php">About Us</a></li>
                            <li><a href="./services-websteers.php">Services</a></li>
                            <li><a href="./contact-us-websteers.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="responsive-menu-background">
                </div>
                <div class="hamburger">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
    </header>