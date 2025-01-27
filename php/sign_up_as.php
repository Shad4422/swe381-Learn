<?php
require_once 'helpers.php';

if (isLoggedIn()) {
  if (isUserParent()) {
    redirect('parent_home_page.php');
  } else {
    redirect('tutor_home_page.php');
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="../css/stylesheet.css">
  <title>Sign up</title>
</head>

<body>

  <header id="navbar" class="page-header">
    <nav class="navbar-container">
      <!-- logo -->
      <a href="index.php" id="l"> <img class="logo" src="../images/Logo.PNG"> </a>

      <!-- الزر الي يظهر عند التصغير  -->
      <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!--العناصر الي بتوجد في الهيدر + في الزر عند التصغير  -->
      <div id="navbar-menu" aria-labelledby="navbar-toggle">
        <ul class="nav__links">
          <li class="navbar-item"><a href="index.html" class="nav__link">Home</a> </li>
          <li class="navbar-item"><a href="mailto:LearnInfo.sa@gmail.com" class="nav__link">Contact us</a></li>
          <li class="navbar-item"> <a class="Sign" href="sign_in.php"><button>Login</button></a></li>
        </ul>

      </div>
    </nav>
  </header>

  <div class="sign-shad">
    <h1 id="sho-h2">Let's get you started! </h1><br><br>
    <div class="left-side-sh-t"> <br>

      <img src="../images/tuts.png" alt="Picture" class="pic-sign"><br>
      <div class="tuter-sign">
        <h2>I am a tutor!</h2>

        <a href="sign_up_tutor.php"><button class="button-move" type="button">Sign Up</button></a>
      </div>
    </div>

    <div class="rigth-side-sh-p"><br>

      <img src="../images/prns.png" alt="Picture" class="pic-sign"><br>
      <div class="parent-sign">
        <h2>I am a parent!</h2>
        <a href="sign_up_parent.php"><button class="button-move" type="button">Sign Up</button></a>
      </div>
    </div>

  </div>

  <footer class="navbar" id="page_footer">
    <p>&copy; 2023 Learn online tutoring platform <br>
      <a href="mailto:LearnInfo.sa@gmail.com" style=" color: #8c7569 ;">Contact Us
        <img src="../images/email_icon.png" alt="Contact Us"></a>
    </p>


  </footer>

  <script src="../js/index.js"></script>

</body>

</html>