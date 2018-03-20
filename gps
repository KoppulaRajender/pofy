import serial
import pynmea2
import time
from firebase import firebase

ref=firebase.FirebaseApplication('https://bustracking-e133e.firebaseio.com/',None)

def parseGPS(str):
    if str.find('GGA') > 0:
        msg = pynmea2.parse(str)
        print "Timestamp: %s -- Lat: %s %s -- Lon: %s %s -- Altitude: %s %s" % (msg.timestamp,msg.latitude,msg.lat_dir,msg.longitude,msg.lon_dir,msg.altitude,msg.altitude_units)
        ref.put("User","latitude",msg.latitude)
        ref.put("User","longitude",msg.longitude)

serialPort = serial.Serial("/dev/ttyAMA0", 9600, timeout=2.0)

while True:
    try:
        str = serialPort.readline()
        parseGPS(str)
    except serial.serialutil.SerialException:
        str=serialPort.readline()
        parseGPS(str)
    #time.sleep(2)
