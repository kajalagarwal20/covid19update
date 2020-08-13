<?php
$data = file_get_contents('coronadata.json');
$outputArray = json_decode($data, TRUE);

print "<PRE>";
print_r($outputArray);
    print "</PRE>";
?>