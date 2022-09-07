<?php
session_start();
if (!isset($_SESSION['privilleged'])) {
  echo "<script>alert('you must log in first')</script>";
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="bookcss.css" />
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
            <a href="view.php"><i class="fa-solid fa-calendar-check"></i></i> My appointments</a>
          </li>
          <li>
            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></i>logout</a>
          </li>
        </ul>
      </nav>
      <a class="c" href="index.html"><button>Home</button></a>
    </header>
  </div>
  <main>
    <div class="paragraph">
      <p>
        Easily book your exam appointment with us at a time that suits you
        <span>And take you to a higher level</span>
      </p>
    </div>
  </main>
  <div class="container">
    <a href="bookForm.php">
      <div><i class="fa-brands fa-java"></i> Java Basics</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-java"></i> Java Intermediate</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-js"></i> JavaScript Basics</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-js"></i> JavaScript Intermediate</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-html5"></i> HTML+CSS Basics</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-html5"></i> HTML+CSS Intermediate</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-python"></i> Python Basics</div>
    </a>
    <a href="bookForm.php">
      <div><i class="fa-brands fa-python"></i> Python Intermediate</div>
    </a>

  </div>

  <div class="containerCards">
    <div class="card">
      <div class="box">
        <div class="content">
          <h2>1</h2>
          <h3>Step 1</h3>
          <p>Choose the exam which you want to book appointment</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="box">
        <div class="content">
          <h2>2</h2>
          <h3>Step 2</h3>
          <p>Fill the form and choose the time of appointment</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="box">
        <div class="content">
          <h2>3</h2>
          <h3>Step 3</h3>
          <p>
            Return to the page in the time that you choosed and start your
            exam
          </p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer_c">
      <h3>Jazi Website</h3>

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
      <div class="bottom">
        <p>
          copyright &copy;2020 jazi Website. designed by <span>Jazi</span>
        </p>
      </div>
    </div>
  </footer>
</body>

</html>