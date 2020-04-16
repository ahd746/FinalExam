<?php

  // Step 1: Start the session IF it hasn't already been started
  
  
  // Step 2: USING THE PROVIDED _connect.php script!
  // Include the connection script
  // and assign the returned connection to a variable
  
  
  // Step 3: Using bound parameters, write your SQL statement
  // selecting the user by their email
  // HINT: You're using PDO so make sure your code reflects that!
  
  
  // Step 4: Validate and sanitize the email
  

  // Step 5:
  //  a) Prepare the sql statement
  

  // b) Bind the email parameter to the value
  

  // c) Execute the statement
  

  // Step 6: Fetch the user (HINT: you're only fetching ONE user)
  

  // Step 7: Verify you have a user and the password is correct
  if () {
    $_SESSION['errors'][] = "You could not be authenticated. Check your email address or please register for an account.";

    // a) Assign the form values to a new session variable
    $_SESSION['form_values'] = null;

    // b) Redirect back to the form
    
  }

  // Step 8: Unset the user password
  

  // Step 9: Assign the user to a session variable
  $_SESSION['user'] = null;

  // Redirect back to the form
  $_SESSION['successes'][] = "You have successfully logged in.";
  header('Location: ./hobbies');
  exit;