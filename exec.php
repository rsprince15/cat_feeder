<?php

  ###############################################################
  #
  # Title: exec.php
  #
  # Function: Runs python script to feed the cats once.
  #
  ###############################################################
  echo 'Feeding Your Masters Now';
  shell_exec('/home/$USER/projects/cat_feeder/one_time_feed.py >> /tmp/feed_error.log 2>&1');
?>
