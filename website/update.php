<?php
require 'connect.php';

$email = '';
$time = '';

if (isset($_POST['update'])) {
    $sql = "UPDATE appointment SET  time= :time where email = :email";
    $statement = $connectDataBase->prepare($sql);

    $email = $_POST['email'];

    $time = $_POST['time'];

    $statement->bindParam(':email', $email, PDO::PARAM_STR);

    $statement->bindParam(':time', $time, PDO::PARAM_STR);
    $statement->execute();
    $connectDataBase = null;
    header("location:view.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <link rel="stylesheet" href="cssUpdate.css" />
    <title>Document</title>
</head>

<body>
    <section>
        <div class="container" method="post">
            <div class="contactform" method="post">
                <h2>Update <span>Appointment</span></h2>
                <form class="formbox" method="post">



                    <div class="inputbox">
                        <input type="text" name="email" required />
                        <span>Your Email</span>
                    </div>


                    <div class="inputTime">
                        <input type="datetime-local" name="time" required />
                        <span>Select The Date and Time</span>
                    </div>

                    <div class="inputbox 100w">

                        <input name="update" type="submit" value="update" />
                    </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("input[type=datetime-local]", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>
</body>

</html>