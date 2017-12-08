<?php
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$k="#";
$p="";
$j=1;
for($i=$n-1;$i>=0;$i--){     
    $c= str_pad($k, $j, "#", STR_PAD_LEFT);     
    $b = str_pad($p,$i, " ",STR_PAD_LEFT); 
    echo $b.$c."\n";
    $j++;
}

?>
