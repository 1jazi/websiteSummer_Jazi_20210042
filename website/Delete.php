<?php
require 'connect.php';

if (isset($_POST['delete'])) {
    $sql = "DELETE FROM appointment WHERE email=:email";
    $email = $_POST['email'];
    $statement = $connectDataBase->prepare($sql);
    $statement->bindParam(":email", $email, PDO::PARAM_STR);
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
    <title>Delete</title>
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
            min-width: 700px;
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
            margin-top: 50px;
            margin: 0 0 40px 0;
        }

        section .container .contactform .formbox .inputbox {
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
    </style>
</head>

<body>
    <section>
        <div class="container" method="post">
            <div class="contactform" method="post">
                <h2>Delete <span>Appointment</span></h2>
                <form class="formbox" method="post">
                    <div class="inputbox w50">
                        <input type="text" name="email" required />
                        <span>Email</span>
                    </div>
                    <div class="inputbox 100w">
                        <input name="delete" type="submit" value="Delete" />
                    </div>
                </form>
            </div>

    </section>
</body>

</html>