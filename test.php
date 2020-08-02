<?php
$fp = fopen("data.txt", "w") or die("oops");
fwrite($fp, "1");
echo "done";

?>