<?php include("<Acara-7.4.php"); ?>
<?php
    $rio = new person("Rio Javier Reyhan");
    $fillah = new person("Fillah Septian");
    // $rio->set_name("Rio Javier");
    // $fillah->set_name("Fillah Septian");

    // directly accessing properties in a class is a no-no.
    echo "Nama lengkap Rio : ".$rio->get_name();
    echo "<br>";
    echo "Nama lengkap Fillah : ".$fillah->name;
?>