<?php
require_once 'db_connection.php';
require_once 'tutor.php';
require_once 'user.php';
require_once 'image.php';
require_once 'helpers.php';

if (isLoggedIn()) {
  if (isUserParent()) {
    redirect('parent_home_page.php');
  } else {
    redirect('tutor_home_page.php');
  }
}

if (isset($_POST['submit'])) {
  $image = null;
  if (checkImage($_FILES['image'])) {
    $image = uploadImage($_FILES['image']);
  }
  $user_id = createUser(
    $_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['password'],
    'parent',
    $image,
    $_POST['city'],
    $db
  );
  redirect('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>
  <div id="parent-signup">

    <header id="navbar" class="page-header">
      <nav class="navbar-container">
        <!-- logo -->
        <a href="index.html" id="l"><img class="logo" src="../images/Logo.PNG" alt="logo"> </a>

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

    <form method="post" action="sign_up_parent.php" enctype="multipart/form-data">
      <div class="modal" id="modal_sign_up">
        <div class="modal-left">
          <h1>Sign up</h1>
          <p class="p">Please fill up your information to sign up as parent</p>


          <img src="../images/person_icon.png" alt="a default picture of a user" class="SignUP__img"><br>
          <label class="input-label">Upload a photo: (optional)
            <div class="file-input">
              <input type="file" accept="image/*" name="image" id="file-input" class="choose_button">
              <label class="choose_button__label" for="file-input">
                <img path src="../images/photo.png" alt="parent icon">
                <span>choose profile photo</span></label>
            </div>
          </label>




          <div class="input-block">
            <label for="email" class="input-label">First Name:</label>
            <input required type="text" name="first_name" id="firstname" placeholder="First Name">
          </div>
          <div class="input-block">
            <label class="input-label">Last Name:</label>
            <input required type="text" name="last_name" id="lastname" placeholder="Last Name">
          </div>

          <div class="input-block">
            <label for="email" class="input-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Email">
          </div>
          <div class="input-block">
            <label for="password" class="input-label">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
          </div>
          <div class="input-block">
            <label class="input-label">City:</label>
            <select name="city" required type="text" id="loc">
              <option selected>Select Your City</option>
              <option value="Abha">Abha</option>
              <option value="Abu Arish">Abu Arish</option>
              <option value="Al Baha">Al Baha</option>
              <option value="Al Bukayriyah">Al Bukayriyah</option>
              <option value="Al Duwadimi">Al Duwadimi</option>
              <option value="Al Kharj">Al Kharj</option>
              <option value="Al Rass">Al Rass</option>
              <option value="Al Ula">Al Ula</option>
              <option value="Al Khobar">Al Khobar</option>
              <option value="Arar">Arar</option>
              <option value="Bisha">Bisha</option>
              <option value="Buridah">Buraidah</option>
              <option value="Dammam">Dammam</option>
              <option value="Dhahran">Dhahran</option>
              <option value="Hafar Al Batin">Hafar Al Batin</option>
              <option value="Hail">Hail</option>
              <option value="Jazan">Jazan</option>
              <option value="Jeddah">Jeddah</option>
              <option value="Jubail">Jubail</option>
              <option value="Khamis Mushait">Khamis Mushait</option>
              <option value="Mecca">Mecca</option>
              <option value="Medina">Medina</option>
              <option value="Najran">Najran</option>
              <option value="Riyadh">Riyadh</option>
              <option value="Rabigh">Rabigh</option>
              <option value="Riyadh AlKhabra">Riyadh AlKhabra</option>
              <option value="Sakaka">Sakaka</option>
              <option value="Shaqra">Shaqra</option>
              <option value="Tabuk">Tabuk</option>
              <option value="Taif">Taif</option>
              <option value="Unayzah">Unayzah</option>
              <option value="Yanbu">Yanbu</option>
              <option value="Zulfi">Zulfi</option>
            </select>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7247.167019322969!2d46.700286!3d24.741175!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2ssa!4v1672129924120!5m2!1sar!2ssa" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


          <div class="modal-buttons">
            <input class="input-button" type="submit" name="submit" value="Sign Up"><br>
          </div>
          <p class="sign-up">I have an account? <a href="sign_in.php">Login </a></p>

        </div>
      </div>
    </form>





    <footer class="navbar">
      <p> &copy; 2023 Learn online tutoring platform <br>
        <a href="mailto:LearnInfo.sa@gmail.com" style=" color: #8c7569 ;">Contact Us
          <img src="../images/email_icon.png" alt="Contact Us"></a>
      </p>
    </footer>

    <script src="../js/index.js"></script>

</body>

</html>