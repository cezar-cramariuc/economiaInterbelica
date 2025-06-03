<form action="index.php?p=inregistrare.php" method="POST">
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