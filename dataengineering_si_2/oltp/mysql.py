kode = input("Kode Barang ")
nama = input("Nama Barang ")
jumlah = input("Jumlah Barang ")
harga = input("Harga Barang ")

import mysql.connector

db_toko = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="toko"
)

kursor = db_toko.cursor()

sql = "INSERT INTO barang (kode, nama, jumlah, harga) VALUES (%s, %s, %s, %s)"
val = (kode, nama ,jumlah, harga)
kursor.execute(sql, val)

db_toko.commit()

print(" {:5} {:15} {:<12} {:<12}".format("Kode","Nama","Jumlah","Harga"))

kursor.execute("SELECT * FROM barang")

hasil = kursor.fetchall()

for barang in hasil :
  print(" {:5} {:15} {:<12} {:<12}".format(barang[1],barang[2],barang[3],barang[4]))