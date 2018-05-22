import serial 
import time
import datetime
import MySQLdb
ser = serial.Serial(
    port='COM3',\
    baudrate=9600,\
    parity=serial.PARITY_NONE,\
    stopbits=serial.STOPBITS_ONE,\
    bytesize=serial.EIGHTBITS,\
        timeout=0)
print("connected to: " + ser.portstr)
conn = MySQLdb.connect(host= "localhost",
                  user="root",
                  passwd="",
                  db="rfid")      
x = conn.cursor()

seq = []
count = 1
f=open("dataFile.txt","a");
while True:
    for c in ser.read():
        seq.append((c)) 
        joined_seq = ''.join(str(v) for v in seq) #Make a string from array

        if c == '\n':
            print("Vehicle " + str(count) + ': ' + joined_seq)
            f.write(time.strftime('%Y-%m-%d'))
            f.write("\t")
            f.write(time.strftime("%X"))
            f.write("\t")
            f.write(joined_seq)
            id=joined_seq[:10]
            sql="SELECT s2.amount from vehicles s1 join charges s2 on (s1.vehicle=s2.vehicle) where s1.rfidcode=%s" %(id)
            sql1="select balance from wallet where rfid=%s" % (id)
            sql2="select username,registration from vehicles where rfidcode=%s" % (id)
            sql3="SELECT `id` from data where `RowNo`=(select max(`RowNo`) from data)"
            try: 
                x.execute(sql3)
                if x.rowcount>0:
                    row0=x.fetchone()
                    check=row0[0]
                    if(check!=id):
                        x.execute(sql)
                        row=x.fetchone()
                        cost=row[0]
                        x.execute(sql1)
                        row1=x.fetchone()
                        bal=row1[0]
                        x.execute(sql2)
                        row2=x.fetchone()
                        name=row2[0]
                        registration=row2[1]
                        
                        print(name)
                        if bal>=cost:
                            k="paid"
                            x.execute("""UPDATE `wallet` SET `balance`=`balance`-%s WHERE rfid=%s""",(cost,id))
                            fb=bal-cost
                            x.execute("""INSERT INTO `toll`(`rfid`,`regno`, `uname`, `initialbal`, `tollamount`, `finalbal`, `date`, `time`, `status`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)""",(id,registration,name,bal,cost,fb,time.strftime('%Y-%m-%d'),time.strftime("%X"),k))
                        else:
                            k="not paid"
                            x.execute("""INSERT INTO `tollcorruption`(`rfid`, `uname`, `amount`) VALUES (%s,%s,%s)""",(id,name,cost))
                            x.execute("""INSERT INTO `toll`(`rfid`,`regno`, `uname`, `initialbal`, `tollamount`, `finalbal`, `date`, `time`, `status`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)""",(id,registration,name,bal,cost,bal,time.strftime('%Y-%m-%d'),time.strftime("%X"),k))
                        x.execute("""INSERT INTO `data`(`date`, `time`, `id`,`cost`) VALUES (%s,%s,%s,%s)""",(time.strftime('%Y-%m-%d'),time.strftime("%X"),id,row[0]))
                        conn.commit()
            except:
                conn.rollback()
            seq = []
            count += 1
            break
conn.close()
ser.close()
