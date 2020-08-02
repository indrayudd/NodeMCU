<?
if(isset($_GET['current'])){
    $file = "data.txt";
    $fp = fopen($file, "r") or die ("rip");
    echo fgets($fp);
    fclose($fp);
}



if(isset($_GET['state'])){

$fp = fopen("data.txt", "w") or die("oops");
fwrite($fp, $_GET['state']);
echo $_GET['state'];

}


?>