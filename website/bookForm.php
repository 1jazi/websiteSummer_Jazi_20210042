<?php

require 'connect.php';

if (isset($_POST['submitForm'])) {

  $sql = "INSERT INTO appointment(first_name,last_name,phone,email,time) VALUES (:first_name,:last_name,:phone,:email,:time)";
  $statment = $connectDataBase->prepare($sql);
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $phone = ($_POST['phone']);
  $time = $_POST['time'];
  $email = $_POST['email'];

  $statment->bindParam(":first_name", $first_name, PDO::PARAM_STR);
  $statment->bindParam(":last_name", $last_name, PDO::PARAM_STR);
  $statment->bindParam(":email", $email, PDO::PARAM_STR);
  $statment->bindParam(":phone", $phone, PDO::PARAM_STR);
  $statment->bindParam(":time", $time, PDO::PARAM_STR);
  #if ($password == $confirmPassword) {
  $statment->execute();
  $connectDataBase = null;

  # }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>book Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="BookFormStyle.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Courier New', Courier, monospace;
    }



    section {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: white;
    }

    section .container {
      position: relative;
      min-width: 1500px;
      min-height: 550px;
      display: flex;
      z-index: 1000;
    }

    section .container .contactform {
      position: absolute;
      padding: 120px;

      background: white;
      width: calc(90% - 100px);
      margin-left: 130px;
      padding-left: 150px;
      height: 100%;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3)
    }

    section .container .contactform h2 {
      position: absolute;
      padding-top: -200px;
      margin-top: -95px;
      margin-left: -130px;
      color: rgb(33, 30, 30);
      font-size: 25px;
      font-weight: 600;
    }

    section .container .contactform h2 span {

      color: rgb(120, 96, 96);
      font-weight: 700;
    }

    section .container .contactform .formbox {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      padding-top: 30px;
    }

    section .container .contactform .formbox .inputbox {
      position: relative;
      margin: 0 0 40px 0;
    }

    section .container .contactform .formbox .inputbox.w50 {
      width: 47%;
    }

    section .container .contactform .formbox .inputbox.w100 {
      width: 100%;
    }

    section .container .contactform .formbox .inputbox input {
      width: 100%;
      padding: 5px 0;
      font-size: 20px;
      resize: none;
      font-weight: 500;
      color: rgb(42, 37, 37);
      border: none;
      outline: none;
      border-bottom: 1px solid rgb(227, 211, 211);
    }

    section .container .contactform .formbox .inputbox span {
      position: absolute;
      left: 0;
      padding: 7px 0;
      font-size: 20px;
      transition: 0.5s;
      font-weight: 500;
      color: rgb(42, 37, 37);
      pointer-events: none;
    }

    section .container .contactform .formbox .inputTime input {
      width: 100%;
      padding-top: 50px;
      font-size: 20px;
      resize: none;
      font-weight: 500;
      color: rgb(42, 37, 37);
      border: none;
      outline: none;
      border-bottom: 1px solid rgb(227, 211, 211);
    }

    section .container .contactform .formbox .inputTime span {
      position: absolute;
      left: 0;
      margin-top: 10px;

      font-size: 20px;
      transition: 0.5s;
      font-weight: 700;
      color: rgb(42, 37, 37);
      pointer-events: none;
    }

    section .container .contactform .formbox .inputbox input:focus~span,
    section .container .contactform .formbox .inputbox input:valid~span

    /*section .container .contactform .formbox .inputbox  input[type="datetime-local"]:required:valid ~ span,
section .container .contactform .formbox .inputbox  input[type="datetime-local"]:required:focus ~ span*/
      {
      transform: translateY(-20px);
      font-size: 10px;
      font-weight: 350;
      letter-spacing: 1.2px;
    }

    section .container .contactform .formbox .inputbox input[type="submit"] {
      position: relative;
      margin-right: 200px;
      margin-top: 100px;
      transition: 0.5s;
      background-color: rgb(102, 181, 42);
      border: none;
      border-radius: 2px;
      cursor: pointer;
    }

    section .container .contactform .formbox .inputbox input[type="submit"]:hover {


      background-color: rgb(0, 0, 0);
      color: rgb(255, 255, 255);

    }

    /************************************** */
    @media (max-width: 480px) {
      body {
        padding: 0;
      }

      section {

        width: 390px;
        height: 100vh;

      }


      section .container .contactform .formbox .inputbox {

        position: relative;

        margin-left: 9px;
      }


      section .container .contactform {
        position: absolute;
        padding: 20px;

        background: white;
        width: calc(90% - 100px);
        margin-left: 130px;
        padding-left: 150px;
        height: 100%;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3)
      }


      section .container {
        position: relative;
        min-width: 500px;

        margin-left: -100px;
        min-height: 550px;

      }


      section .container .contactform .formbox .inputbox span {

        left: 0;
        padding: 7px 0;
        font-size: 10px;
        transition: 0.5s;
        font-weight: 500;
        color: rgb(42, 37, 37);
        pointer-events: none;
      }

      section .container .contactform .formbox .inputbox input {

        width: 100%;
        padding: 10px 0;
        font-size: 10px;
        resize: none;

        font-weight: 500;
        color: rgb(42, 37, 37);
        border: none;
        outline: none;
        border-bottom: 1px solid rgb(227, 211, 211);
      }




      section .container .contactform h2 {
        color: rgb(33, 30, 30);
        font-size: 12px;
        padding: 0;
        margin-left: -140px;
        font-weight: 500;
      }

      section .container .contactform .formbox {

        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: -100px;
      }

      section .container .contactform .formbox .inputTime input {
        width: 100%;
        padding-top: 50px;
        font-size: 20px;
        resize: none;
        font-weight: 500;
        color: rgb(42, 37, 37);
        border: none;
        outline: none;
        border-bottom: 1px solid rgb(227, 211, 211);
      }

      section .container .contactform .formbox .inputTime span {
        position: absolute;
        left: 0;
        margin-top: 10px;

        font-size: 10px;
        transition: 0.5s;
        font-weight: 700;
        color: rgb(42, 37, 37);
        pointer-events: none;
      }

      section .container .contactform .formbox .inputbox input[type="submit"] {
        position: relative;
        margin-right: 80px;
        margin-top: 30px;
        transition: 0.5s;
        background-color: rgb(102, 181, 42);
        border: none;
        border-radius: 2px;
        cursor: pointer;
      }


    }

    @media (max-width: 810px) {
      body {
        padding: 0;
      }

      section {

        width: 390px;
        height: 100vh;

      }


      section .container .contactform .formbox .inputbox {

        position: relative;

        margin-left: 9px;
      }

      section .container {
        padding-left: 200px;
      }

      section .container .contactform {
        position: absolute;
        padding: 120px;

        background: white;
        width: calc(90% - 100px);
        margin-left: 130px;
        padding-left: 150px;
        height: 100%;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.3)
      }


      section .container {
        position: relative;
        min-width: 800px;
        margin-left: -100px;
        min-height: 550px;

      }


      section .container .contactform .formbox .inputbox span {

        left: 0;
        padding: 7px 0;
        font-size: 10px;
        transition: 0.5s;
        font-weight: 500;
        color: rgb(42, 37, 37);
        pointer-events: none;
      }

      section .container .contactform .formbox .inputbox input {

        width: 100%;
        padding: 10px 0;
        font-size: 10px;
        resize: none;

        font-weight: 500;
        color: rgb(42, 37, 37);
        border: none;
        outline: none;
        border-bottom: 1px solid rgb(227, 211, 211);
      }




      section .container .contactform h2 {
        color: rgb(33, 30, 30);
        font-size: 12px;
        padding: 0;
        margin-left: -140px;
        font-weight: 500;
      }

      section .container .contactform .formbox {

        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-left: -100px;
      }

      section .container .contactform .formbox .inputTime input {
        width: 100%;
        padding-top: 50px;
        font-size: 20px;
        resize: none;
        font-weight: 500;
        color: rgb(42, 37, 37);
        border: none;
        outline: none;
        border-bottom: 1px solid rgb(227, 211, 211);
      }

      section .container .contactform .formbox .inputTime span {
        position: absolute;
        left: 0;
        margin-top: 10px;

        font-size: 10px;
        transition: 0.5s;
        font-weight: 700;
        color: rgb(42, 37, 37);
        pointer-events: none;
      }

      section .container .contactform .formbox .inputbox input[type="submit"] {
        position: relative;
        margin-right: 80px;
        margin-top: 30px;
        transition: 0.5s;
        background-color: rgb(102, 181, 42);
        border: none;
        border-radius: 2px;
        cursor: pointer;
      }
    }
  </style>
</head>

<body>
  <section>
    <div class="container" method="post">
      <div class="contactform" method="post">
        <h2>Exam <span>Appointment</span></h2>
        <form class="formbox" method="post">
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

          <div class="inputTime">
            <input type="datetime-local" name="time" required />
            <span>Select The Date and Time</span>
          </div>

          <div class="inputbox 100w">
            <input name="submitForm" type="submit" />
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
  <div class="back"></div>
</body>

</html>