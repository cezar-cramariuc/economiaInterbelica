<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $con = new mysqli('localhost', 'root', '', 'economiainterbelica');
    if ($con) {
        echo "conectat";
    } else {
        echo mysqli_error($con);
    }
    $nume = mysqli_real_escape_string($con, $_POST['nume']);
    $prenume = mysqli_real_escape_string($con, $_POST['prenume']);
    $parola = mysqli_real_escape_string($con, $_POST['parola']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    echo "<p>" . $nume . "</p";
    echo "<p>" . $email . "</p";
    $now = 'NOW()';
    // $now = date('Y-m-d H:i:s');

    $inser = "INSERT INTO utilizatori (nume, prenume, parola, email) VALUES ('$nume', '$prenume', '$parola', '$email')";
    mysqli_query($con, $inser);

    // if ($con->query($inser) === true) {
    //     echo "efectuat";
    // } else {
    //     echo "esuat";
    // }
    $con->close();
}
?>


<form action="index.php?p=inregistrare" method="POST">
    <fieldset>
        <legend>Înregistrare</legend>
        <label for="nume">Nume</label>
        <input type="text" id="nume" name="nume" accept-charset="utf-8" required>

        <label for="prenume">Prenume</label>
        <input type="text" id="prenume" name="prenume" accept-charset="utf-8" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" accept-charset="utf-8" required>

        <label for="parola">Parola</label>
        <input type="password" name="parola" id="parola" accept-charset="utf-8" required>

        <label for="valideaza"></label>
        <input type="submit" value="validează" id="valideaza">
    </fieldset>
</form>