<?php
require 'connect.php';
session_start();

if (isset($_POST['login'])) {
  $sql = "SELECT username,password from client where username=:username and password=:password";
  $statment = $connectDataBase->prepare($sql);
  $username = $_POST['username'];
  $password = $_POST['password'];
  $statment->bindParam(":username", $username, PDO::PARAM_STR);
  $statment->bindParam(":password", $password, PDO::PARAM_STR);
  $statment->execute();
  $count = $statment->rowCount();
  if ($count == 1) {
    $_SESSION['privilleged'] = $username;
    header("location:index.html");
  } else {
    echo "<script>alert('invallid password or username')</script>";
  }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <title>Login</title>
  <link rel="stylesheet" href="styleLogin.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="x-icon" href="100644037-18f92400-333b-11eb-8bda-7b07a2d6f42f-494987053.png">
</head>
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
    left: 53.9%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 475px;
    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    background: white;
    /*border-radius: 3px;
  border: solid;
  border-image-slice: 1;
  border-width: 7px;
  /*border-image-source: linear-gradient(60deg,
      rgb(0, 0, 0),
      #ffffff);*/
    background-color: #ccc8ce;
  }

  .main:hover {
    transition: 0.5;

    box-shadow: 0 15px 30px 0 rgb(0, 0, 0);
  }

  .main h1 {
    text-align: center;
    font-family: 'Courier New', Courier, monospace;
    padding: 0 0 15px 0;
    color: black;
    font-weight: 600;
    padding: 10px;
  }

  span {
    color: rgb(233, 84, 32);
    font-weight: 1000px;

  }

  .main form {
    padding: 0 40px;
    padding-top: 1px;
    box-sizing: border-box;

  }

  form .text {
    position: relative;
    border-bottom: 2px solid #a6a6a6;
    ;
    margin: 30px 0;

  }

  .text input {
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 15px;
    border: none;
    background: none;
    outline: none;
  }

  .text label {
    position: absolute;
    top: 50%;
    left: 5px;
    color: rgb(69, 66, 66);
    transform: translateY(-50%);
    font-size: 15px;
    pointer-events: none;
    transition: .5s;
  }

  .text span::before {
    content: '';
    position: absolute;
    top: 40px;
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
    padding-top: 95px;
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

  .sign {
    margin: 30px 0;
    text-align: center;
    padding-top: 70px;
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

  .back {
    background-image: url('kelly-sikkema-N3o-leQyFsI-unsplash.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    width: 2000px;
    height: 1000vh;

  }

  @media (max-width: 480px) {
    .back {

      background: rgb(175, 134, 57);

      width: 200px;
      height: 100vh;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;


    }

    .forgot {
      position: absolute;
      font-size: 10;
      padding-top: 95px;

      margin: -5 0 50px 20px;
      color: #615c5c;

    }

    .main {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 250px;
      height: 475px;
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

  @media (max-width: 810px) {
    .back {

      background: rgb(175, 134, 57);

      width: 390px;
      height: 100vh;
    }


    body {
      margin: 0;
      padding: 0;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;


    }

    .forgot {
      position: absolute;
      font-size: 10;
      padding-top: 95px;

      margin: -5 0 50px 20px;
      color: #615c5c;

    }

    .main {
      position: absolute;
      top: 50%;
      left: 50%;
      padding-top: 100px;
      transform: translate(-50%, -50%);
      width: 500px;
      height: 475px;
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

<body>
  <div class="main" method="post">
    <h1>Log<span>in</span></h1>
    <form method="post">
      <div class="text">
        <input name="username" type="text" required />
        <samp></samp>
        <label>User Name</label>
      </div>
      <div class="text">
        <input name="password" type="password" required />
        <span></span>
        <label>password</label>
      </div>
      <div class="forgot">Forgot Password?</div>
      <input type="submit" value="Login" name="login" />
      <div class="sign">Not a member ? <a href="signin.php">signup</a></div>
    </form>
  </div>

  <!--<div class="mainlogo">
      <img src="image/website.png" class="logo" />
    </div>-->

  <div class="connect"></div>

  <div class="back"></div>
</body>

</html>