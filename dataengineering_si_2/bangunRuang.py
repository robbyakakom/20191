# program luas persegi
luas = lambda p , l : p * l

class balok :
  def __init__ (self, p , l, t):
    self.p = p
    self.l = l
    self.t = t

  def luas(self):
    luas = self.p * self.l
    return luas

  def volume(self):
    v = self.p * self.l * self.t
    return v