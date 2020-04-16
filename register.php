<?php

  $errors = [];

  // Step 1: Validate the email and password are present and not empty
  //  a) Provide a human readable error message if they are


  // Step 2: Validate the email is in the correct format
  //  b) Provide a logical error message if it isn't


  // Step 3: Start the session if it isn't already started


  // Step 4: Check if there are any errors
  if () {
    // a) Assign the form values to a new session variable
    $_SESSION['form_values'] = null;
    
    // Store the errors
    $_SESSION['errors'] = $errors;
    
    // b) Redirect back to the form
    
  }

  // Step 5: Hash the password and store it
  $_POST['password'] = null;


  // Step 6: USING THE PROVIDED _connect.php script!
  // Include the connection script
  // and assign the returned connection to a variable

  
  // Step 7:
  //  a) Prepare the sql statement
  

  // b) Bind the email and password parameters to there values
  

  // c) Execute the statement
  

  // Check if there are errors in the SQL (You don't need to do anything. This has been provided)
  if ($stmt->errorCode() === "23000") {
    $_SESSION['errors'][] = "You have already registered. Please login.";
    $_SESSION['form_values'] = $_POST;
  } else if ($stmt->errorCode() !== "00000") {
    // Add the error message to the errors session array
    $_SESSION['errors'][] = "There was an error during registration.";
    $_SESSION['form_values'] = $_POST;
  } else {
    // Add the success message to the successes session array
    $_SESSION['successes'][] = "You have been registered successfully.";
  }
  
  header('Location: ./');
  exit;