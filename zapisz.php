<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];

$conn = mysqli_connect("localhost","root","","wedkowanie");

$sql = "INSERT INTO Karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) 
            VALUES ('$imie', '$nazwisko', '$adres', NULL, NULL)";

if ($conn->query($sql) === TRUE) {
    echo "Rekord został pomyślnie dodany.";
} else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
}
?>