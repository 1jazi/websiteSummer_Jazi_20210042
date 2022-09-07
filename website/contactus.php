<?php

require 'connect.php';

if (isset($_POST['submitForm'])) {

  $sql = "INSERT INTO contactus(first_name,last_name,phone,email,message) VALUES (:first_name,:last_name,:phone,:email,:message)";
  $statment = $connectDataBase->prepare($sql);
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $statment->bindParam(":first_name", $first_name, PDO::PARAM_STR);
  $statment->bindParam(":last_name", $last_name, PDO::PARAM_STR);
  $statment->bindParam(":phone", $phone, PDO::PARAM_STR);
  $statment->bindParam(":email", $email, PDO::PARAM_STR);
  $statment->bindParam(":message", $message, PDO::PARAM_STR);
  $statment->execute();
  $connectDataBase = null;
  echo "<script>alert('Message sent succsefully')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>contact</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="contactusStyle.css" />
</head>

<body>
  <section>
    <div class="container">
      <div class="info">
        <div>
          <h2>Contact info</h2>
          <ul class="infoList">
            <li>
              <span>
            <li><i class="fa-solid fa-location-pin"></i></li></span>
            <span>Amman, Jordan</span>
            <span>
              <li><i class="fa-solid fa-envelope"></i></li>
            </span>
            <span>idkjazi02@gmail.com</span>
            <span>
              <li><i class="fa-solid fa-phone"></i></li>
            </span>
            <span>+962798209016</span>
            </li>
          </ul>
          <ul class="social">
            <li>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <form class="contactform" method="post">
        <h2>Send a message</h2>
        <div class="formbox">
          <div class="inputbox w50">
            <input type="text" name="firstname" required />
            <span>First name</span>
          </div>

          <div class="inputbox w50">
            <input type="text" name="lastname" required />
            <span>Last name</span>
          </div>
          <div class="inputbox w50">
            <input type="text" name="email" required />
            <span>Email</span>
          </div>
          <div class="inputbox w50">
            <input type="text" name="phone" required />
            <span>Phone number</span>
          </div>
          <div class="inputbox 100w">
            <textarea name="message" required></textarea>
            <span>Write your message</span>
          </div>

          <div class="inputbox 100w">
            <input name="submitForm" type="submit" value="Send" />
          </div>
        </div>
    </div>
    </div>
  </section>
</body>

</html>