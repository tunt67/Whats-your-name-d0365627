<?php
if (isset($_POST['submit'])) {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
}
echo "wat is jouw voornaam en achternaam?";
?>

<form method="post">
    voornaam: <input type="text" name="voornaam" onfocus="this.value=''" value="voornaam"><br>
    achternaam: <input type="text" name="achternaam" onfocus="this.value=''" value="achternaam">
    <input type="submit" name="submit" class="btn btn-success mt-2" value="klik hier">
</form>
<?php
// ik weet dat er een foutmelding komt omdat de twee post vriabelen niet worden gedefinieert in deze PHP tag
echo "goededag $voornaam $achternaam";
?>