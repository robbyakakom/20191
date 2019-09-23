<form action="">
Tanggal : 
<select name="hari" id="hari">
  <?php for($hari = 1; $hari <=31; $hari++) { ?>
    <option value="<?php echo $hari ?>"><?php echo $hari ?></option>
  <?php } ?>
</select>
-
<select name="bln" id="bln">
  <?php for($bln = 1; $bln <=12; $bln++) { ?>
    <option value="<?php echo $bln ?>"><?php echo $bln ?></option>
  <?php } ?>
</select>
-
<select name="thn" id="thn">
  <?php for($thn = 2019; $thn >=2005; $thn--) { ?>
    <option value="<?php echo $thn ?>"><?php echo $thn ?></option>
  <?php } ?>
</select>
</form>