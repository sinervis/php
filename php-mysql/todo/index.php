<?php
error_reporting(E_ALL);
// stampo la parte iniziale dell'html
include("header.html");

// mi collego al db
$db = mysqli_connect('localhost', 'les', 'les', 'todo');

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if ($_REQUEST['operazione'] == 'aggiungi') {
  echo 'aggiungo ' . $_REQUEST['title'];
  mysqli_query($db, "INSERT INTO todo (title) VALUES ('" . $_REQUEST['title'] . "')");
} else if ($_REQUEST['operazione'] == 'elimina') {
  mysqli_query($db, "DELETE FROM todo WHERE id=" . $_REQUEST['id']);
}

$lista = mysqli_query($db, 'SELECT * from todo');
echo '<ul>';
while($row = mysqli_fetch_assoc($lista)) {
  echo "<li>{$row['title']} <a href='?operazione=elimina&id={$row['id']}'>X</a></li>";
}
echo '</ul>';

?>