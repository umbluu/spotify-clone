<?php
  class Account {

    private $errorArray;

    public function __construct() {
			$this->errorArray = array();
		}

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
      $this->validateUsername($un);
      $this->validateFirstName($fn);
      $this->validateLastName($ln);
      $this->validateEmails($em, $em2);
      $this->validatePasswords($pw, $pw2);
    }

    private function validateUsername($un) {

      if(strlen($un) > 25 || strlen($un) < 5) {
        array_push($this->errorArray, "Your username must be between 5 and 25 characters");
        return;
      }

      //TO DO: check if the username exists

    }

    private function validateFirstName($fn) {

      if(strlen($fn) > 25 || strlen($fn) < 2) {
        array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
        return;
      }

    }

    private function validateLastName($ln) {

      if(strlen($ln) > 25 || strlen($ln) < 2) {
        array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
        return;
      }

    }

    private function validateEmails($em, $em2) {
      if($em != $em2) {
        array_push($this->errorArray, "Your e-mail addresses are not matching");
        return;
      }

      if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, "E-mail is invalid");
        return;
      }

      // TO DO: Check that username hasn't already been used

    }

    private function validatePasswords($pw, $pw2) {

      if($pw != $pw2) {
        array_push($this->errorArray, "Your passwords are not matching");
        return;
      }

      if(preg_match('/[^A-Za-z0-9]/', $pw)) {
        array_push($this->errorArray, "Your password can only contain numbers and letter");
        return;
      }

      if(strlen($pw) > 30 || strlen($pw) < 5) {
        array_push($this->errorArray, "Your password must be between 5 and 30 characters");
        return;
      }

    }

  }
 ?>
