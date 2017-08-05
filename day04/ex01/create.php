<?PHP

if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK")
{
		$hash = hash('whirlpool', $_POST['passwd']);
		if (!file_exists("../private"))
		{
      mkdir("../private", 0777, true);
      $unserialize = array(array('login'=>$_POST['login'], 'passwd'=>$hash));
    }
    else
    {
      $check = file_get_contents("../private/passwd");
      $unserialize = unserialize($check);
      foreach($unserialize as $value)
      {
        if ($value['login'] == $_POST['login'])
          {
            echo "ERROR\n";
          return ;
        }
      }
      $unserialize[] = array('login'=>$_POST['login'], 'passwd'=>$hash);
    }
    $convert = serialize($unserialize);
    file_put_contents("../private/passwd", $convert);
    echo "OK\n";
}
else {
  echo "ERROR\n";
}
?>
