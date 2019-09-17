isi = "YA"
total = 0 
while isi == "YA" :
  kode = input("Kode Barang : ")
  nama = input("Nama Barang : ")

  harga = int(input("Harga Beli : ")) 

  total = total + harga
  print("----------------------------------")
  isi = input("Isi data lagi? (YA/TIDAK) ")
  print("----------------------------------")

print("Total Harga : " , total)
