#!/usr/bin/env python

###############################################################
#
# Title: one_time_feed.py
#
# Function: This script is ran when user presses the "Feed The 
#           Masters" button.
#
###############################################################
import RPi.GPIO as GPIO
import time

# Set GPIO modes
GPIO.setmode(GPIO.BOARD)
GPIO.setup(12, GPIO.OUT)

# Set GPIO PWM start point
food_container = GPIO.PWM(12, 50)
food_container.start(7.5)

###############################################################
# Try to turn container to feed cats
###############################################################
try:
    food_container.ChangeDutyCycle((60/18.0) + 2.5)  # turn towards 60 degree
    time.sleep(1) # sleep 1 second
    food_container.ChangeDutyCycle((0/18.0) + 2.5)  # turn towards 0 degree
    time.sleep(1) # sleep 1 second
    food_container.ChangeDutyCycle((60/18.0) + 2.5) # turn towards 60 degree
except KeyboardInterrupt:
    food_container.stop()

GPIO.cleanup()
