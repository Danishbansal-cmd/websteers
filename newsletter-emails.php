<?php
// Include the database connection file
include('db_connection.php');

// // Set the content type to JSON for the response
header('Content-Type: application/json');

// Initialize an array to store the response data
$response = [
    'status' => 'Error',
    'message' => 'An unknown error occurred.'
];


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Read the raw input from the request
$json = file_get_contents('php://input');

// Decode the JSON input into a PHP associative array
$data = json_decode($json, true);

if (isset($db_error)) {
    $response['message'] = $db_error;
} else {
    try {
        if (json_last_error() === JSON_ERROR_NONE) {
            // Initialize an array to store the response data

            // Check if the newsletter_email field is set and not empty
            if (isset($data['newsletter_email']) && !empty($data['newsletter_email'])) {
                // Get the email from the POST request
                $emailAddress = filter_var($data['newsletter_email'], FILTER_SANITIZE_EMAIL);

                // Validate the email format
                if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {

                    $statement = $connection->prepare("insert into newsletter_submissions(emailAddress) values(?)");
                    $statement->bind_param("s", $emailAddress);
                    //If it gest success
                    $response['status'] = 'success';
                    $response['message'] = 'Email submitted successfully.';

                    // Execute the query and check if it was successful
                    if ($statement->execute()) {
                        // Check if the error is related to a missing table
                        if (strpos($connection->error, 'doesn\'t exist') !== false) {
                            // Throw a specific exception if the table is missing
                            throw new Exception('The table does not exist in the database. Please check the database schema.');
                        } else {
                            $response['status'] = 'success';
                            $response['message'] = 'Email submitted successfully.';
                        }

                    } else {
                        // Throw an exception with the error message
                        throw new Exception('Unexpected Error Occured');
                    }

                    // Close the statement
                    $statement->close();
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