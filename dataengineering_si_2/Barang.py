class Barang :
  def __init__ (self, kode, namaBrg, harga, qty) :
    self.kode = kode 
    self.namaBrg = namaBrg
    self.harga = harga
    self.qty = qty
    self.total = qty * harga

  def tampilBarang(self) :
    print('Kode ' , self.kode)
    print('Nama Barang ' , self.namaBrg)
    print('Harga ' , self.harga)
    print('Jumlah Beli ' , self.qty)
    print('Total Beli ' , self.total)