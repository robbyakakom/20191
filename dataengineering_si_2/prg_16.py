lagi = 'YA'
listBrg = []
dictBrg = {}

while lagi == 'YA' :
  kode = input('Kode Barang ')
  nama = input('Nama Barang ')

  dictBrg = {'kode':kode,'nama':nama}
  listBrg.append(dictBrg)

  lagi = input('input lagi? ')

print("-----------------------------------------------")
print("{:^30}".format("Data Barang"))
print("-----------------------------------------------")
print('{:10} | {:20}'.format('Kode','Nama Barang'))
print("-----------------------------------------------")
for dictBrg in listBrg :
  print("{:10} | {:20}".format(dictBrg['kode'],dictBrg['nama']))
print("-----------------------------------------------")