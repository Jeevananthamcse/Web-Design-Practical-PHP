<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo("The capital of $country is $capital".".................");

echo(" \r\n");
}
?>
<html>
<body>
<br>
</body>
</html>
