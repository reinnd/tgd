<?php

include "conn.php";

        $IDtamu = $_POST['IDtamu'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $phone = $_POST['telp'];


try {

        $conn->query ("INSERT INTO tamu (IDtamu, nama, email, phone)
        VALUE ('$IDtamu', '$nama', '$email', '$phone')");
        
        header ("location: table.php");


} catch (exception $e)  {
    echo $e->getMessage();
}

?>