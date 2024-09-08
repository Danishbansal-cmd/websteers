<?php
//These 3 lines are used for the debugging and development purposes
//are used to display the error values
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Enable MySQLi to throw exceptions
// Without this mysqli or its creation will not throw errors properly
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $host = "sql112.infinityfree.com";
    $username = "if0_37256691";
    $password = "KRw5i0GNKsJmIDs";
    $database = "if0_37256691_websteers";

    // for localhost purposes only
    // $connection = new mysqli('localhost','root','','websteers');

    // for Real DB Connection
    $connection = new mysqli($host, $username, $password, $database);
    
    if (!($connection instanceof mysqli)) {
        // Throw an exception with the error message
        throw new Exception('MySQLi object creation failed.');
    } elseif ($connection->connect_error){
        // Throw an exception with the error message
        throw new Exception('Database connection failed: ' . $connection->connect_error);
    }

    // Set character set to UTF-8 (optional but recommended)
    $connection->set_charset('utf8');
}
catch (mysqli_sql_exception $e) {
    // Store the error message to be another php page
    $db_error = $e->getMessage();
}
catch (Exception $e) {
    // Store the error message to be another php page
    $db_error = $e->getMessage();
} 


//creating reusable functions to use it in
//other files also
function display_error_message($errorMessage) {
    echo '
    <section class="error">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="error-text">
                    <h1>error occurred.</h1>
                        <p>'. htmlspecialchars($errorMessage) .'</p>
                        <p>Please try again later or contact support if the issue persists.</p>
                    </div>
                    <div class="error-next">
                        <p>What would you do next?</p>
                        <a href="./contact-us-websteers.php">
                            <button class="button-custom first">Try Again</button>
                        </a>
                        <a href="./index.php">
                            <button class="button-custom text-white">Go Back Home</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="error-image"></div>
                </div>
            </div>
        </div>
    </section>';
}
function display_thanks_message(){
    echo '
        <section class="thank-you">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="thank-you-text">
                            <p>Thank You!</p>
                            <p>Data Submitted successfully</p>
                            <p>We Will Contact You Shortly😊</p>
                        </div>
                        <div class="thank-you-next">
                            <p>What would you do next?</p>
                            <a href="./index.php">
                                <button class="button-custom first">Go Back Home</button>
                            </a>
                            <a href="./services-websteers.php">
                                <button class="button-custom text-white">Explore More</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="thank-you-image"></div>
                    </div>
                </div>
            </div>
        </section>
    ';
}
?>
