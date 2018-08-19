#!/bin/bash

#TODO: Cleanup

#set startime to 6:15
#set endtime to 17:25

STARTMINUTE=$1
STARTHOUR=$2
ENDMINUTE=$3
ENDHOUR=$4

echo -e $STARTMINUTE $STARTHOUR "* * * /usr/bin/python /home/evil-user/projects/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1\n"$ENDMINUTE $ENDHOUR "* * * /usr/bin/python /home/evil-user/projects/cat_feeder/continuous_feed.py >> /tmp/listener.log 2>&1" | crontab -u $USER -