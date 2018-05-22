#include <Wire.h>
int motor =5;
int fan =3;   
int val,val2,val3;
int tempPin = 0;
int moisPin=2;
int humidPin=1;


void setup()
{
Serial.begin(9600);
pinMode(13, OUTPUT);
pinMode(motor,OUTPUT);
pinMode(fan,OUTPUT);
}
void motorState(int state)
{
  digitalWrite(5,state);
}
void fanState(int state1)
{
  digitalWrite(3,state1);
}
void loop()
{

val = analogRead(tempPin);
val2 = analogRead(moisPin);
val3 = analogRead(humidPin);
float mv = ( val/1024.0)*5000; 

float cel = mv/10;
float farh = (cel*9)/5 + 32;

Serial.print("TEMPRATURE=");
Serial.print(cel);
Serial.print(",");
/*Serial.print("*C");*/

Serial.print("Moisture=");
Serial.print(val2);
Serial.print(",");
Serial.print("Humidity=");
Serial.print(val3);
Serial.println();
if(val2>=600)
 {
motorState(400);
digitalWrite(motor,LOW);
 }
 else
 {
  motorState(1000);
digitalWrite(motor,HIGH);
}
 delay(10000);
}
/* uncomment this to get temperature in farenhite 
Serial.print("TEMPRATURE = ");
Serial.print(farh);
Serial.print("*F");
Serial.println();

+
*/





