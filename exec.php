<?php
  echo "You win";
  shell_exec('/home/evil-user/cat_feeder/feed_cats.py >> /tmp/feed_error.log 2>&1');
?>
