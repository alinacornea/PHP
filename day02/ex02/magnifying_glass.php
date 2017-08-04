#!/usr/bin/PHP
<?PHP

$file = fopen($argv[1], "r");
while (!feof($file))
{
	$line = fgets($file);
	$line = preg_replace_callback("/(<a)(.*?)(>)(.*)(<\/a>)/si", function ($matches){
		$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function ($matches){
			return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);}, $matches[0]);
	$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
		return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);}, $matches[0]);
			return ($matches[0]);
	}, $line);
	echo $line;
}
fclose($file);
?>
