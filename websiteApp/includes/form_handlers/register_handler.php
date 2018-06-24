<?php

  $error_array = array();

  if (isset($_POST['submit_register'])) {
    
    // set variables
    $name = strip_tags($_POST['name_register']);
    $_SESSION['name_register'] = $name;

    $email = strip_tags($_POST['email_register']);
    $_SESSION['email_register'] = $email;

    $pwd   = md5($_POST['password_register']);

    if (empty($name) || empty($email) || empty($password)) {
      array_push($error_array, "All fields must be filled up!");
    }

    if (strlen($name)>25 || strlen($name)<5) {
      array_push($error_array, "Meno musi obsahovat 5 az 25 znakov!");
    } 
    
    // if no errors
    if (empty($error_array)) {
      $sql = "SELECT username FROM users WHERE username = :username";
      $check_user = $conn->prepare($sql);
      $check_user->bindParam(':username', $name);
      $check_user->execute();
      $i = 0;

      // check if username already exists
      if($check_user->rowCount() != 0){
        array_push($error_array, "taketo meno uz existuje");
      } else {
        $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $pwd);
        $stmt->execute();
      }

      $_SESSION['name_register']= "";
      $_SESSION['email_register'] = "";
    }
  }
