kode = input("Kode Barang ")
nama = input("Nama Barang ")
jumlah = input("Jumlah Barang ")
harga = input("Harga Barang ")

import pymongo

klien = pymongo.MongoClient( "mongodb://localhost:27017/")

dbtoko = klien["toko"]

koleksi = dbtoko["barang"]

barang = { "kode": kode, "namaBarang": nama, "jumlah": jumlah, "harga": harga }

x = koleksi.insert_one(barang)

print(" {:5} {:15} {:<12} {:<12}".format("Kode","Nama","Jumlah","Harga"))
for barang in koleksi.find({}):
  print(" {:5} {:15} {:<12} {:<12}".format(barang['kode'],barang['namaBarang'],barang['jumlah'],barang['harga']))