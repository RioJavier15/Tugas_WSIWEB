<?php include("Acara-7.4.php"); ?>
<?php
$rio = new person("Rio Javier");
$fillah = new person("Fillah Septian");
// $rio->set_name("Rio Javier");
// $fillah->set_name("Fillah Septian");

echo "nama lengkap Rio : ".$rio->get_name();
echo "<br>";
echo "nama lengkap Fillah : ".$fillah->name;
?>