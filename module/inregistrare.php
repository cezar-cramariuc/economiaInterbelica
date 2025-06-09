<?php
$con = @mysqli_connect('localhost', 'root', '', 'economiainterbelica');
$nume = mysqli_real_escape_string($con, $_POST['nume']);
$prenume = mysqli_real_escape_string($con, $_POST['prenume']);
$parola = mysqli_real_escape_string($con, $_POST['parola']);
$email = mysqli_real_escape_string($con, $_POST['email']);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inser = "INSERT INTO utilizatori(nume, prenume, parola, email, data_inregistrare) VALUES('$nume', '$prenume', $parola', '$email', NOW)";
    $cer = mysqli_query($con, $inser);
    if ($cer) {
        echo "efectuat";
    } else {
        echo mysqli_error($con);
    }
}
