<?php
  $startTime = $_POST['startTime'];
  $endTime = $_POST['endTime'];
  echo "hello $startTime $endTime";

  $test = shell_exec('sudo sh save_times.sh');
 # $test = shell_exec('sudo echo "* 1 * * * some_command" | crontab -u pi -');
  $test = shell_exec('sudo crontab -u pi -l');

 echo $test; 
  #t00 00 * * * /usr/bin/python /home/pi/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1" 
  
  #$my_file = 'file.txt';
  #$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
  #$data = 'This is the data';
  #fwrite($handle, $data);
  #fclose($handle);
?>
