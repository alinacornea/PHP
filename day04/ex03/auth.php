<?php
function auth($login, $passwd)
{
  $pass =  hash('whirlpool', $passwd);
  $check = unserialize(file_get_contents("../private/passwd"));
  foreach($check as $value)
  {
    if ($value['login'] === $login && $value['passwd'] === $pass)
      return TRUE;
  }
  return FALSE;
}
?>
