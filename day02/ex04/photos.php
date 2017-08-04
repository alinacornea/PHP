#!/usr/bin/php
<?php
$url = $argv[1];

$image = file_get_contents($url);
preg_match_all('/<img [^>]*src=["|\']([^"|\']+)/i',$image, $result);

function get_loc($str)
{
  $str = explode('/', $str);
  $r = array_pop($str);
  return $r;
}

foreach($result as $val)
{
  foreach($val as $url)
  {
    echo $url."\n";
    $data = file_get_contents($url);
    if ($data === false)
      echo "";
    else {
      $loc = get_loc($url);
      file_put_contents($loc, $data);
      $file = fopen($loc, 'w+');
      fputs($file, $data);
      fclose($file);
    }
  }
}
?>
