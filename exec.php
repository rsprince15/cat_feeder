<?php
  echo "You win";
  shell_exec('/home/pi/cat_feeder/feed_cats.py >> /tmp/feed_error.log 2>&1');
?>
