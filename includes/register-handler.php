<?php

function sanitizeFormPassword($inputText) {
  $inputText = strip_tags($inputText); //To avoid data injection, manipulation.
  return $inputText;
}

function sanitizeFormUsername($inputText) {
  $inputText = strip_tags($inputText); //To avoid data injection, manipulation.
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText); //To avoid data injection, manipulation.
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText)); //Makes first capital uppercase
  return $inputText;
}

function validateUsername($un) {

}

function validateFirstName($fn) {

}

function validateLastName($ln) {

}

function validateEmails($em, $em2) {

}

function validatePasswords($pw, $pw2) {

}

if(isset($_POST['registerButton'])) {
  //echo "register button was pressed";
  $username = sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  $password = sanitizeFormPassword($_POST['password']);
  $password2 = sanitizeFormPassword($_POST['password2']);

  validateUsername($username);
  validateFirstName($firstName);
  validateLastName($lastName);
  validateEmails($email, $email2);
  validatePasswords($password, $password2);
}

?>
