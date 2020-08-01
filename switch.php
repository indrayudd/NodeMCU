<?
if(isset($_GET['state'])){

$fp = fopen("data.txt", "w") or die("oops");
fwrite($fp, $_GET['state']);
echo $_GET['state'];

}


?>