<?php
    include('widgets/header.php');
?>

<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$emailAddress = $_POST['emailaddress'];
$phoneNumber = $_POST['phonenumber'];
$note = $_POST['note'];

//DB Connection
$connection = new mysqli('localhost','root','','websteers');
if($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
} else {
    $statement = $connection->prepare("insert into contact_submissions(firstName, lastName, emailAddress, phoneNumber, note) values(?,?,?,?,?)");
    $statement->bind_param("sssis", $firstName, $lastName, $emailAddress, $phoneNumber, $note);
    $statement->execute();
?>

<main>
    <section class="thank-you">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="thank-you-text">
                        <p>Thank You!</p>
                        <p>Data Submitted successfully</p>
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
                <div class="col-sm-7">
                    <div class="thank-you-image"></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    echo "Data submitted successfully";
    $statement->close();
    $connection->close();
}
?>

<?php
    include('widgets/footer.php');
?>