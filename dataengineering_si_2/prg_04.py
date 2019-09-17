#program kelulusan
nilai = int(input("Nilai : "))
huruf = ""
if nilai >= 80 :
  huruf = "A"
elif nilai >= 60 :
  huruf = "B"  
elif nilai >= 40 :
  huruf = "C"
elif nilai >= 20 :
  huruf = "D"
else :
  huruf = "E"

print ("Nilai Huruf ", huruf)