import time
import serial
import MySQLdb
ser = serial.Serial(
port='/dev/ttyUSB1',
baudrate = 9600,
parity=serial.PARITY_NONE,
stopbits=serial.STOPBITS_ONE,
bytesize=serial.EIGHTBITS,
timeout=1
)
counter=0
while True:
    st=ser.readline()
    if st!='':
        print st
        temp,mois,humid=float(st.split(",")[0].split("=")[1]),float(st.split(",")[1].split("=")[1]),float(st.split(",")[2].split("=")[1])
        print temp,mois,humid
        conn = MySQLdb.connect(host= "169.254.153.84",
                user="vijay",
                passwd="123",
                db="smartagro")      
        x = conn.cursor()
        x.execute("""UPDATE `sensordata` SET `temperature`=%s,`moisture`=%s,`humidity`=%s WHERE `id`=1""",(temp,mois,humid))
        conn.commit()
    
