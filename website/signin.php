<?php

require 'connect.php';

if (isset($_POST['submitForm'])) {

  $sql = "INSERT INTO client(first_name, last_name,password,username,email) VALUES (:first_name, :last_name,:password,:username,:email)";
  $statment = $connectDataBase->prepare($sql);
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $passowrd = $_POST['password'];
  #$confirmPassowrd = $_POST['confirmPassword'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $statment->bindParam(":first_name", $first_name, PDO::PARAM_STR);
  $statment->bindParam(":last_name", $last_name, PDO::PARAM_STR);
  $statment->bindParam(":password", $passowrd, PDO::PARAM_STR);
  # $statment->bindParam(":confirmPassword", $confirmPassowrd, PDO::PARAM_STR);
  $statment->bindParam(":email", $email, PDO::PARAM_STR);
  $statment->bindParam(":username", $username, PDO::PARAM_STR);
  #if ($password == $confirmPassword) {
  $statment->execute();
  $connectDataBase = null;
  # echo "true";
  # }
  echo "<script>alert('Regester complete log in now')</script>";
  # header("Location:");
}


?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <title>Signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" type="x-icon" href="100644037-18f92400-333b-11eb-8bda-7b07a2d6f42f-494987053.png">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
      height: 100vh;
      overflow: hidden;
    }

    .main {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      height: 680px;
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      background: white;
      border-radius: 3px;
      border: solid;
      border-image-slice: 1;
      border-width: 7px;
      border-image-source: linear-gradient(60deg,
          rgb(255, 255, 255),
          #000000);
    }

    .main:hover {
      transition: 0.5;
      border-radius: 6px;
      box-shadow: 0 15px 30px 0 rgb(0, 0, 0);
    }

    .main h1 {
      text-align: center;
      padding: 0 0 15px 0;
      color: black;
      font-weight: 800;
    }

    .main form {
      padding: 0 40px;
      box-sizing: border-box;
    }

    form .text {
      position: relative;
      border-bottom: 2px solid #a6a6a6;

      margin: 30px 0;

    }

    span {
      color: rgb(233, 84, 32);
      font-weight: 1000px;
    }

    .text input {
      width: 100%;
      padding: 0 5px;
      height: 50px;

      font-size: 15px;
      border: none;
      background: none;
      outline: none;
    }

    .text label {
      position: absolute;
      top: 10%;
      left: 5px;
      color: #a6a6a6;
      transform: translateY(-50%);
      font-size: 15px;
      pointer-events: none;
      transition: .5s;
    }

    .text span::before {
      content: '';
      position: absolute;
      top: 50px;
      left: 0;
      width: 100%;
      height: 2px;
      background: #a6a6a6;

    }

    .text input:focus~label,
    .text input:valid~label {
      top: -5px;
      color: black;

    }

    .text input:focus~span::before,
    .text input:valid~span::before {
      width: 100%;
    }

    .forgot {
      position: absolute;
      font-size: 10;
      padding-top: 75px;
      padding-left: 90px;
      margin: -5 0 50px 20px;
      color: #615c5c;

    }

    .forgot:hover {
      text-decoration: underline;
    }

    input[type="submit"] {
      position: relative;
      width: 100%;
      height: 50px;
      border: 1px solid rgb(233, 84, 32);
      background: rgb(233, 84, 32);
      margin-top: 30px;
      border-radius: 2px;
      font-size: 17px;
      padding-top: -50px;
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      color: white;
      font-weight: 700;
      cursor: pointer;
      outline: none;

    }

    input[type="submit"]:hover {

      box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      border: 1px solid #000000;
      background: #000000;
      color: white;
      transition: 0.5s;

    }

    .sign {
      margin: 30px 0;
      text-align: center;
      padding-top: 13px;
      font-size: 15px;
      color: #666666;
    }

    .sign a {
      color: green;

    }

    .sign :hover {
      text-decoration: underline;
    }

    .mainlogo {
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      padding: 20px 2%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .mainlogo .logo {
      width: 250px;
    }

    /* .back {
      background-image: url('image/kelly-sikkema-N3o-leQyFsI-unsplash.jpg');
      background-size: contain;
      background-repeat: no-repeat;
      width: 2000px;
      height: 1000vh;

    }*/

    @media (max-width: 480px) {
      .back {

        background: rgb(175, 134, 57);

        width: 270px;
        height: 100vh;
      }

      body {
        margin: 0;
        padding: 0;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;


      }

      .main {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 280px;
        height: 650px;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        background: white;
        border-radius: 3px;
        border: solid;
        border-image-slice: 1;
        border-width: 7px;
        border-image-source: linear-gradient(60deg,
            rgb(0, 0, 0),
            #ffffff);
        background-color: #ccc8ce;
      }

      input[type="submit"] {
        position: relative;
        width: 100%;
        height: 50px;
        margin-top: 10px;
        border: 1px solid rgb(233, 84, 32);
        background: rgb(233, 84, 32);
        border-radius: 2px;
        font-size: 17px;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;

      }

      input[type="submit"]:hover {

        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        border: 1px solid #000000;
        background: #000000;
        color: white;
        transition: 0.5s;

      }

      .forgot {
        position: absolute;
        font-size: 10;
        padding-top: 95px;
        padding-left: 50px;
        margin: -5 0 50px 20px;
        color: #615c5c;

      }

      .forgot:hover {
        text-decoration: underline;
      }

    }
  </style>
</head>

<body>
  <center>
    <div class="main" method="POST">
      <h1>Sign<span> up</span></h1>
      <form method="POST" name="signin">
        <div class="text">
          <input type="text" name="firstname" required />
          <samp></samp>
          <label>First Name</label>
        </div>
        <div class="text">
          <input type="text" name="lastname" required />
          <span></span>
          <label>Last name</label>
        </div>
        <div class="text">
          <input type="email" name="email" required />
          <span></span>
          <label>E-mail</label>
        </div>
        <div class="text">
          <input type="text" name="username" required />
          <span></span>
          <label>UserName</label>
        </div>
        <div class="text">
          <input type="password" name="password" required />
          <span></span>
          <label>Password</label>
        </div>


        <input name="submitForm" type="submit" value="Signin" />
        <div class="sign">
          Already a member ? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
    <center>

      <div class="connect"></div>

      <div class="back"></div>
</body>

</html>