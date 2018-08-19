<?php
   echo 'Feeding Your Masters Now';
   shell_exec('/home/pi/cat_feeder/one_time_feed.py >> /tmp/feed_error.log 2>&1');
?>
