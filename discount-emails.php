<?php
// Include the database connection file
include('db_connection.php');

// Include the configuration file
$config = require __DIR__ . '/config.php';

//access the table details
$table = $config['database_details']['table_details']['discount_submissions'];

// // Set the content type to JSON for the response
header('Content-Type: application/json');

// Initialize an array to store the response data
$response = [
    'status' => 'Error',
    'message' => 'An unknown error occurred.'
];

// Read the raw input from the request
$json = file_get_contents('php://input');

// Decode the JSON input into a PHP associative array
$data = json_decode($json, true);

if (isset($db_error)) {
    $response['message'] = $db_error;
} else {
    try {
        if (json_last_error() === JSON_ERROR_NONE) {
            // Check if the newsletter_email field is set and not empty
            if (isset($data['discount_email']) && !empty($data['discount_email'])) {
                // Get the email from the POST request
                $emailAddress = filter_var($data['discount_email'], FILTER_SANITIZE_EMAIL);

                // Validate the email format
                if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
                    // Check if the table exists before executing the statement
                    $checkTableExists = $connection->query("SHOW TABLES LIKE '$table'");
                    if ($checkTableExists === false) {
                        throw new Exception('Error checking for table existence: ' . $connection->error);
                    } else {
                        // If the table exists then it will run the query and prepare it
                        $statement = $connection->prepare("insert into $table (emailAddress) values(?)");
                        if (!$statement) {
                            throw new Exception('Failed to prepare statement: ' . $connection->error);
                        }

                        // Bind the parameter and execute the query
                        $statement->bind_param("s", $emailAddress);
                        // Execute the query and check if it was successful
                        if ($statement->execute()) {
                            $response['status'] = 'success';
                            $response['message'] = 'Email (' . $emailAddress . ') submitted successfully. We will contact you shortly.';
                        } else {
                            // Throw an exception with the error message
                            throw new Exception('Unexpected Error Occured');
                        }
                        // Close the statement
                        $statement->close();
                    }
                } else {
                    // Email format is invalid
                    throw new Exception('Invalid email format.');
                }
            } else {
                // Email field is empty or not set
                throw new Exception('Email is required.');
            }
        } else {
            throw new Exception('Invalid JSON input.');
        }
    } catch (Exception $e) {
        // Store the error message in response
        $response['message'] = $e->getMessage();
    }
}

// Close the database connection if it was successful
if (isset($connection)) {
    $connection->close();
}

// Return the response as a JSON object
echo json_encode($response);
?>