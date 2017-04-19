<?php //helper.php

function cleanStringLow($string)
{
  // allow only letters
  $string = preg_replace("/[^a-zA-Z\s-]/", "", $string);

  // make lowercase
  $string = strtolower($string);

  //Clean up multiple dashes or whitespaces
  $string = preg_replace("/[\s-]+/", " ", $string);

  // replace spaces with dash
  $string = preg_replace("/[\s]/", "-", $string);

  // return
  return $string;
}

function cleanStringCap($string)
{
  // allow only letters
  $string = preg_replace("/[^a-zA-Z\s-]/", "", $string);

  //Clean up multiple dashes or whitespaces
  $string = preg_replace("/[\s-]+/", " ", $string);

  // replace spaces with dash
  $string = preg_replace("/[\s]/", "-", $string);

  // return
  return $string;
}

function lower($string)
{
  // convert string to lower case
  $string = strtolower($string);

  // return
  return ($string);
}

function cleanPhoneNo($no)
{
  // allow only numbers
  $no = preg_replace("/[^0-9]/", '', $no);

  //return
  return $no;
}

// basic php validate email function
function validEmail($email)
{
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
  {
    return true;
  }
  else
  {
    return false;
  }
}

// swag code
/*function isValidEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}*/

// pro php validation
function validEmailPro($email){
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections to make life easier
    $email_array = explode("@", $email);
    $local_array = explode(".", $email_array[0]);
    for ($i = 0; $i < sizeof($local_array); $i++) {
        if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
            return false;
        }
    }
    if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $email_array[1]);
        if (sizeof($domain_array) < 2) {
            return false; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++) {
            if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
                return false;
            }
        }
    }
    return true;
}

function cleanUrl($url)
{
  // allow only letters, dash, dots, slash and spaces
  $url = preg_replace("/[^a-zA-Z-\/\.]/", "", $url);

  // make lowercase
  $url = strtolower($url);

  // return
  return $url;

}

?>
