class induk() :
  def __init__(self):
    self.atribut = "ini atribut"

class anak(induk) :
  pass 

objAnak = anak()
print(objAnak.atribut) 