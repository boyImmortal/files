<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="file.php" method="post">
	<input type="text" name="files" placeholder="Enter the name of file">
	<br>
	<input type="submit" name="plus" value="+" style="width: 100px; height: 20px;">
	<br>
	<input type="submit" name="minus" value="-" style="width: 100px; height: 20px;">
	<br>
	<input type="submit" name="mult" value="*" style="width: 100px; height: 20px;">
	<br>
	<input type="submit" name="divide" value="/" style="width: 100px; height: 20px;">
</form>
<?php		
if(isset($_POST['files'])){
$a=$_POST['files'];
header('Refresh: ');	
	if ($a=="") {
		echo "Please enter the name of file";
	}
	else{
if (isset($_POST['plus'])){
	
$File=fopen("$a.txt", "w") or die("Error");	
$text='1 4
	6 45
    -74 22
	-5 12';
	fwrite($File,$text) or die("can't write");
	
$file2=file("$a.txt");
foreach ($file2 as $value) {
		if(!($value==0)){
		list($f,$b)=explode(' ',$value);
		$e=(int)$f;
		$d=(int)$b;
		$q=$e+$d;
		echo $q; echo'<p>';
if ($q<0) {
	$mn=fopen("manfiy.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}
elseif ($q>0) {
	$mn=fopen("musbat.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}}}}
if (isset($_POST['minus'])) {
$File=fopen("$a.txt", "w") or die("Error");	
$text='1 4
	6 45
    -74 22
	-5 12';
	fwrite($File,$text) or die("can't write");
$file2=file("$a.txt");

	foreach ($file2 as $value) {
		if(!($value==0)){
		list($f,$b)=explode(' ',$value);
		$e=(int)$f;
		$d=(int)$b;
		$q=($e-$d);
		echo $q ; echo'<p>';
if ($q<0) {
	$mn=fopen("manfiy.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");
}
elseif ($q>0) {
	$mn=fopen("musbat.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}}}}

if (isset($_POST['mult'])) {

header('Refresh: ');
$File=fopen("$a.txt", "w") or die("Error");	
$text='1 4
	6 45
    -74 22
	-5 12';
	fwrite($File,$text) or die("can't write");
$file2=file("$a.txt");

	foreach ($file2 as $value){
		if(!($value==0)){
		list($f,$b)=explode(' ',$value);
		$e=(int)$f;
		$d=(int)$b;
		$q=$e*$d;
		echo $q ; echo'<p>';
if ($q<0){
	$mn=fopen("manfiy.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}
elseif ($q>0) {
	$mn=fopen("musbat.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}}}}

if (isset($_POST['divide'])){
$File=fopen("$a.txt", "w") or die("Error");	
$text='1 4
	6 45
    -74 22
	-5 12';
	fwrite($File,$text) or die("can't write");
$file2=file("$a.txt");

	foreach ($file2 as $value){
		if(!($value==0)){
		list($f,$b)=explode(' ',$value);
		$e=(int)$f;
		$d=(int)$b;
		$q=$e/$d;
		echo  $q; echo'<p>';
if ($q<0) {
	$mn=fopen("manfiy.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}
elseif ($q>0) {
	$mn=fopen("musbat.txt", "a") or die("error");
	$textMn="$q ";
	fwrite($mn,"\n". $textMn) or die("error");}}}
	}}}
?>
</body>
</html>

