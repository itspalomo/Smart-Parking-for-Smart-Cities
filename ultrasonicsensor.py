import RPi.GPIO as GPIO
import time
import TCPClient

TRIG = 21
ECHO = 20
GPIO.setmode(GPIO.BCM)

while True:
    file = open("/home/pi/Smart-Parking-for-Smart-Cities/data.txt","w")
    print("distance measurement in progress")
    GPIO.setup(TRIG, GPIO.OUT)
    GPIO.setup(ECHO, GPIO.IN)
    GPIO.output(TRIG,False)
    print("waiting for sensor to settle")
    time.sleep(0.2)
    GPIO.output(TRIG, True)
    time.sleep(0.00001)
    GPIO.output(TRIG, False)
    while GPIO.input(ECHO) ==0:
        pulse_start=time.time()
    while GPIO.input(ECHO)==1:
        pulse_end = time.time()
    pulse_duration = pulse_end-pulse_start
    distance = pulse_duration*17150
    distance = round(distance,2)
    print("distance:",distance, " cm")
    
    file.write(str(distance))
    file.close()
    TCPClient.tcpsend("data.txt")

    
    time.sleep(10)
    
