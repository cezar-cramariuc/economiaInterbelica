<?php
$con = @mysqli_connect('localhost', 'root', '', 'economiainterbelica');
$nume = mysqli_real_escape_string($con, $_POST['usernume']);
$prenume = mysqli_real_escape_string($con, $_POST['userprenume']);
$parola = mysqli_real_escape_string($con, $_POST['userparola']);
$email = mysqli_real_escape_string($con, $_POST['useremail']);
$inser = "INSERT INTO utilizatori(nume, prenume, parola, email, data_inregistrare) VALUES('$nume', '$prenume', '$email', $parola', NOW)";
$cer = mysqli_query($con, $inser);
if ($cer) {
    echo "efectuat";
} else {
    echo mysqli_error($con);
}
