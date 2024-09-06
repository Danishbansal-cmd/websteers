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
    <style>
    .thank-you-image {
        width: 100%;
        height: 500px;
        background-image: url('images/thank-you.png');
        background-size: contain;
        background-repeat: no-repeat;
    }

    .thank-you>.container>.row>.col-sm-5 {
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    .thank-you-text p:first-child {
        font-size: 3rem;
        font-weight: 800;
        margin: 0px;
        margin-bottom: -10px;
    }

    .thank-you-text p,
    .thank-you-next p {
        font-size: 1.1rem;
        font-weight: 500;
    }

    .thank-you-next {
        margin-top: 40px;
    }

    .thank-you-next p {
        margin-bottom: 12px;
    }

    .thank-you-next a {
        text-decoration: none;
    }

    .button-custom.first {
        padding: 6px 12px;
        background-color: white;
        color: black;
        border: 2px solid var(--global_color_main_first);
        box-sizing: border-box;
    }

    .button-custom {
        padding: 8px 12px;
    }

    @media only screen and (max-width: 992px) {
        .thank-you>.container {
            max-width: 100%;
        }
    }

    @media only screen and (max-width: 768px) {
        .thank-you-text p:first-child {
            font-size: 2rem;
        }

        .thank-you-text p,
        .thank-you-next p,
        .button-custom {
            font-size: 0.8rem;
        }
    }

    @media only screen and (max-width: 660px) {

        .thank-you>.container>.row>.col-sm-5,
        .thank-you>.container>.row>.col-sm-7 {
            width: 100%;
        }

        .thank-you>.container>.row>.col-sm-5 {
            margin: 30px 0px 0px 0px;
            flex-direction: row;
        }

        .thank-you-next {
            margin-top: 20px;
        }
    }
    </style>
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