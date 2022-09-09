<?php

class RegistrarContr extends registrar
{
   private $uid;
   private $pwd;
   private $pwdrepeat;
   private $email;

   public function __construct($uid, $pwd, $pwdrepeat, $email)
   {
      $this->uid = $uid;
      $this->pwd = $pwd;
      $this->pwdrepeat = $pwdrepeat;
      $this->email = $email;
   }

   public function registrarUsuario()
   {
      if ($this->emptyInput() == false) {
         // emptyInput
         header("location: ../index.php?error=emptyinput");
         exit();
      }

      if ($this->invalidUid() == false) {
         // invalid username
         header("location: ../index.php?error=username");
         exit();
      }

      if ($this->invalidEmail() == false) {
         // invalid email
         header("location: ../index.php?error=email");
         exit();
      }

      if ($this->pwdMatch() == false) {
         // passwords don't match
         header("location: ../index.php?error=passwordmatch");
         exit();
      }

      if ($this->uidIsTakenCheck() == false) {
         //  username or email is takent
         header("location: ../index.php?error=useroremailtaken");
         exit();
      }
      $this->setUser($this->uid, $this->pwd, $this->email);
   }

   private function emptyInput()
   {
      $result;

      if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
         $result = false;
      } else {
         $result = true;
      }
      return $result;
   }

   private function invalidUid()
   {
      $result;

      if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
         $result = false;
      } else {
         $result = true;
      }
      return $result;
   }

   private function invalidEmail()
   {
      $result;

      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         $result = false;
      } else {
         $result = true;
      }
      return $result;
   }

   private function pwdMatch()
   {
      $result;

      if (
         $this->pwd !== $this->pwdrepeat
      ) {
         $result = false;
      } else {
         $result = true;
      } return $result;
   }

   private function uidIsTakenCheck()
   {
      $result;

      if (!$this->checkUser($this->uid, $this->email)) {
         $result = false;
      } else {
         $result = true;
      }
      return $result;
   }
}