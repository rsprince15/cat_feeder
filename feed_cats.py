#!/usr/bin/env python
import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BOARD)

GPIO.setup(12, GPIO.OUT)

p = GPIO.PWM(12, 50)

p.start(7.5)

try:
    p.ChangeDutyCycle((60/18.0) + 2.5)  # turn towards 60 degree
    time.sleep(1) # sleep 1 second
    p.ChangeDutyCycle((0/18.0) + 2.5)  # turn towards 0 degree
    time.sleep(1) # sleep 1 second
    p.ChangeDutyCycle((60/18.0) + 2.5) # turn towards 60 degree
    time.sleep(1) # sleep 1 second
    p.ChangeDutyCycle((140/18.0) + 2.5) # turn towards 140 degree
    time.sleep(1) # sleep 1 second
except KeyboardInterrupt:
    p.stop()
    GPIO.cleanup()
