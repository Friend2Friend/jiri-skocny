<?php

  include './includes/header.php';
  include './includes/form_handlers/login_handler.php';
  include './includes/form_handlers/register_handler.php';

?>
<main>
  <div class="container sign-in-wrapper">
  <div class="sign-in-modal">
    <!-- sign in form -->
    <form action="register.php" method='post' id='prihlasenie'>
      <div class="form-group">
        <label for="">Email *</label>
        <input type="email" placeholder='Email' name='email_signIn'>
      </div>
      <div class="form-group">
        <label for="">Password *</label>
        <input type="password" placeholder='Password' name='password_signIn'>
      </div>
      <?php
          if (in_array("fill it all!", $error_array)) {
            echo "<span class='red-alert'>fill it all!</span>";
          }
        ?>
      <div class="form-group">
        <p>Not registered?
          <a href="#" id='back-to-register'>SignUp</a>
        </p>
      </div>
      <div class="form-group">
        <input type="submit" name='submit_signIn' value='submit' id='submit_signIn' class='submit-buttons'>
      </div>
    </form>
    <!-- register form -->
    <form action="register.php" method='post' id='registracia'>
      <div class="form-group">
        <label for="">Meno *</label>
        <input type="text" placeholder='Meno' name='name_register' value ='<?php
          if (isset($_SESSION['name_register'])) {
            echo $_SESSION['name_register'];
          }
        ?>'>
        <?php
          if (in_array("Meno musi obsahovat 5 az 25 znakov!", $error_array)) {
            echo "<span class='red-alert'>Meno musi obsahovat 5 az 25 znakov!</span>";
          }
        ?>
        <?php
           if (in_array("taketo meno uz existuje", $error_array)) {
            echo "<span class='red-alert'>taketo meno uz existuje</span>";
          }
        ?>
      </div>
      <div class="form-group">
        <label for="">Email *</label>
        <input type="email" placeholder='Email' name='email_register' value ="<?php
          if (isset($_SESSION['email_register'])) {
            echo $_SESSION['email_register'];
          }
        ?>">
      </div>
      <div class="form-group">
        <label for="">Password *</label>
        <input type="password" placeholder='Password' name='password_register'>
      </div>
      <?php
          if (in_array("All fields must be filled up!", $error_array)) {
            echo "<span class='red-alert'>All fields must be filled up!</span>";
          }
        ?>
      <div class="form-group">
        <p>Registered?
          <a href="#" id='back-to-signIn'>SignIn</a>
        </p>
      </div>
      <div class="form-group">
        <input type="submit" name='submit_register' value='submit' id='submit_register' class='submit-buttons'>
      </div>
    </form>
      </div>
  </div>
</main>
<?php

  include './includes/footer.php';

?>