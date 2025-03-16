
<?php
function generateRandomCode() {
  $code = "";
  // Generate a random string of characters using a combination of uppercase and lowercase letters and numbers
  for ($i = 0; $i < 12; $i++) {
    $code .= chr(rand(97, 123));
  }
  return $code;
}
?>