<?php include("Acara-7.php"); ?>
<?php
    $rio = new person();
    $fillah = new person;

    $rio->set_name("Rio Javier");
    $fillah->set_name("Fillah Septian");

    echo "Nama lengkap Rio : ".$rio->get_name();
    echo "<br>";
    echo "Nama lengkap Fillah : ".$fillah->get_name();
?>