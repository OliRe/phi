<?php
try {
    $conn = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
print('<br>');
$sql = 'SELECT kunde_id AS Kundennummer, vorname AS Vorname, nachname AS Nachname FROM kunde';
$data = $conn->query($sql)->fetchAll();  //Query ausführen und Ergebnis abrufen und speichern

foreach ($data as $element) {
    print('<div><p>');
    print('Kunden ID: '.$element['kunde_id'].'<br>');
    print('Vorname: '.$element['vorname'].'<br>');
    print('Nachname: '.$element['nachname'].'<br>');
    print('</p></div>');
}

foreach ($data as $element) {
    print('<div><p>');
    $keys = array_keys($element);
    foreach ($keys as $key) {
        print($key . ': ' . $element[$key].'<br>');
    };
    print('</p></div>');
}

$conn = null;

