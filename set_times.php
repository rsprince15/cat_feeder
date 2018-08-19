<?php

  ###############################################################
  #
  # Title: set_times.php
  #
  # Function: Gets hours, minutes and time of day from the user
  #           and updates crontab with new schedule.
  #
  ###############################################################
  $startHours   = $_POST['startHours'];
  $startMinutes = $_POST['startMinutes'];
  $startTime    = $_POST['startTime'];
  
  $endHours   = $_POST['endHours'];
  $endMinutes = $_POST['endMinutes'];
  $endTime    = $_POST['endTime'];

  // Convert to 24-hour clock
  if ('PM' == $startTime && 12 != $startHours) {
    $startHours += 12;
  } 

  if ('PM' == $endTime && 12 != $endHours) {
    $endHours += 12;
  }

  exec('echo -e $startMinutes $startHours "* * * * /usr/bin/python /home/evil-user/projects/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1\n"$endMinutes $endHours "* * * * /usr/bin/python /home/evil-user/projects/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1" | crontab -u $USER -');
  $output = shell_exec('sudo crontab -u $USER -l');

  echo $output; 
?>