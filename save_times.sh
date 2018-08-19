#!/bin/bash

#echo "hi" | tee test.txt
echo "* 1 * * * /usr/bin/python /home/pi/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1" | crontab -u pi -
