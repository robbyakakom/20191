import xml.etree.ElementTree as ET
tree = ET.parse('mahasiswa.xml')
root = tree.getroot()

for data in root :
  print(" {:10} : {:10}".format(data.tag, data.text))