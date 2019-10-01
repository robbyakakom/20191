lagi = 'YA'
listMhs = []
while lagi == 'YA':
  namaMhs = input('Nama Mahasiswa ')
  listMhs.append(namaMhs)
  lagi = input('isi data lagi? (YA/TIDAK) ')

print('============================')
print('{:^30}'.format('Data Mahasiswa'))
no = 1
for namaMhs in listMhs :
  print('{:3}) {:16}'.format(no, namaMhs))
  no = no + 1

print('============================')
cari = input('Cari Mahasiswa ')

if cari in listMhs:
  print(cari , ' ada') 
else :
  print(cari, ' tidak ada')