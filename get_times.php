<?php

  ###############################################################
  #
  # Title: get_times.php
  #
  # Function: Gets times from previously schedule saved crontabs
  #
  ###############################################################
  
  // This gets the times set in crontab
  // TODO: remove the use of sudo
  $output = shell_exec('sudo crontab -u evil-user -l');
  $output = preg_split("/[\s]+/", $output);
  
  $startHours   = $output[1];
  $startMinutes = $output[0];

  $endHours     = $output[11];
  $endMinutes   = $output[10];

  try {
    echo "$startHours:$startMinutes:";
    echo "$endHours:$endMinutes";
  } catch (Exception $e) {
	echo 'Caught exception: ', $e->getMessage(), "\n";
  }	

?>
