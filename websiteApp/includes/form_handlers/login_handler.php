<?php

  $error_array = array();

  if (isset($_POST['submit_signIn'])) {
    
    $email = $_POST['email_signIn'];
    $_SESSION['email_signIn'] = $email;

    $password = md5($_POST['password_signIn']);

    if (empty($email) || empty($password)) {
      array_push($error_array, "All fields must be filled up!");
    } else {
      $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
			$stmt = $conn->prepare($sql);
			$stmt->execute(array(
				'email' => $email,
				'password' => $password
      ));
      
      
      $count = $stmt->rowCount();
      if ($count > 0) {

        header("location: http://localhost/websiteApp/includes/login_success.php");
      }
    }

  }