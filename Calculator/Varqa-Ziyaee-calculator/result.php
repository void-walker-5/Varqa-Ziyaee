<?php

echo '<a  href="index.php"> Back to calculator</a>
<br><br>';


$username = isset($_POST['bruh']) ? $_POST['bruh'] : "nothing entered";
$string = $username;
echo 'Result is ';
$math_string ="print (".$string.");";

try {
    $result = @eval($math_string . "; return true;");
}
catch (Throwable $err)
{
    echo "Unknown because input was either empty or not numbers only";
}