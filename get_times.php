<?php

// This gets the times set in crontab
// TODO: remove the use of sudo
$output = shell_exec('sudo crontab -u pi -l');
$output = preg_split("/[\s]+/", $output);

//$count = 0;
//foreach ($output as $item) {
//	echo "$count: $item\n";
//   $count++;
//}

try {
   echo "$output[1]:$output[0]:";
   echo "$output[11]:$output[10]";
} catch (Exception $e) {
	echo 'Caught exception: ', $e->getMessage(), "\n";
}	

?>
