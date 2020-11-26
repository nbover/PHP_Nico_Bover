<?php

  function fullNameSplit($fullName)
  {
    return explode (" ",$fullName);
  }

  function encryptPass($pwd)
  {
    return password_hash($pwd, PASSWORD_DEFAULT);
  }

  function emailValidation($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  function pwdValidation($pwd,$pwdConfirm)
  {
      if (strcmp($pwd,$pwdConfirm) !==1)
      return true;
      return false;
  }


?>
