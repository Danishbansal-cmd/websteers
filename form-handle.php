<?php
include('widgets/header.php');
?>

<?php
// Include the database connection file
include('db_connection.php');

?>
<main class="form-handle">
    <?php
    if (isset($db_error)) {
        // Handle the error from the database connection
        display_error_message($db_error);
    } else {
        try {
            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $emailAddress = $_POST['emailaddress'];
            $phoneNumber = $_POST['phonenumber'];
            $note = $_POST['any_note'];

            // to handle empty note
            if ($note == "") {
                $note = "NA";
            }

            $statement = $connection->prepare("INSERT INTO contact_submissions(firstName, lastName, emailAddress, phoneNumber, note) VALUES(?,?,?,?,?)");

            // Check if the statement was prepared successfully
            if (!$statement) {
                // Check if the error is related to a missing table
                if (strpos($connection->error, 'doesn\'t exist') !== false) {
                    // Throw a specific exception if the table is missing
                    throw new Exception('The table does not exist in the database. Please check the database schema.');
                }
            }
            // Bind the email parameter to the SQL query
            elseif (!$statement->bind_param("sssis", $firstName, $lastName, $emailAddress, $phoneNumber, $note)) {
                //Error occured during the binding of parameters
                throw new Exception("Parameter binding failed: " . $statement->error);
            }
            // Execute the query and check if it was successful 
            elseif ($statement->execute()) {
                display_thanks_message();
            } else {
                //throw the error for any unexpected error
                throw new Exception("An Unexpected Error Occured. Please try again: " . $statement->error);
            }

            //Closing the statement
            $statement->close();

            // Close the database connection if it was successful
            if (isset($connection)) {
                $connection->close();
            }
        } catch (Exception $e) {
            //To show errors that occured
            display_error_message('Error: ' . $e->getMessage());
        }
    }
    ?>
    <section class="background-shape-overlay">
    </section>
</main>

<?php
include('widgets/footer.php');
?>