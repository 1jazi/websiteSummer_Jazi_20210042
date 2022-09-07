<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="viewS.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="x-icon" href="100644037-18f92400-333b-11eb-8bda-7b07a2d6f42f-494987053.png">
</head>

<body>


    <div class="main">
        <header>
            <nav>
                <ul>
                    <li>
                        <a href="learn.html"><i class="fa-solid fa-graduation-cap"></i> Start learning</a>
                    </li>
                    <li>
                        <a href="contactus.php"><i class="fa-solid fa-phone"></i> Contact</a>
                    </li>

                    <li>
                        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></i>logout</a>
                    </li>
                </ul>
            </nav>
            <a class="c" href="index.html"><button>Home</button></a>
        </header>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php

    require 'connect.php';
    $sql = "SELECT first_name,last_name,time FROM appointment";
    $statement = $connectDataBase->prepare($sql);
    $statement->execute();
    echo "<table '>";
    echo "<tr>";
    echo "<th> First name </th>";
    echo "<th> Last name </th>";
    echo "<th> Time of appointment </th>";
    echo "<th> Delete </th>";
    echo "<th> Update </th>";
    echo "</tr>";
    $data = $statement->fetchAll();
    foreach ($data as $row) {
        echo "<tr>" .
            "<td>" . $row['first_name'] . " </td>" .
            " <td> " . $row['last_name'] . " </td>"
            . "<td>" . $row['time'] . "</td>" .
            "<td>" . ' <a href="Delete.php" target=self>
            <i class="fa-solid fa-trash"></i></a>' . "</td>" .
            "<td>" . '<a href="update.php" target=self>
            <i class="fa-solid fa-pen-to-square"></i></a>' . "</td>" .
            "</tr>";
    }

    echo "</table>";
    $connectDataBase = null;
    ?>
    </br>
    </br>

</body>

</html>