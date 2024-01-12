<!doctype html>
<html>
<head>
    <title>Rapporten</title>
</head>
<body>
<?php require_once "nav.php" ?>

<h1>Probleem rapporten</h1>

<?php
require "Routes.php";

$route_naam=$_POST["route_naam"];
$route_locatie=$_POST["route_locatie"];
$route_lengte=$_POST["route_lengte"];
$route_duur=$_POST["route_duur"];


$account = new Routes($route_naam, $route_locatie, $route_lengte, $route_duur);
$account->Create();
echo "Het volgende object is gemaakt: <br/>";

$routes = $conn->prepare("
    select * from routes where  route_naam = '$route_naam'");
$routes->execute();

$result = $routes->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row) {

    echo "<table>";

    echo "<tr>
    <th>Route ID</th>
    <th>Naam van route</th>
    <th>Locatie van route</th>
    <th>Lengte van route</th>
    <th>Duur van route</th>
  </tr>";

    echo "<tr>";

    echo "<td>" .  $row['id'] . "</td>" ;

    echo "<td>" .  $row['route_naam'] . "</td>" ;

    echo "<td>" . $row['route_locatie'] . "</td>" ;

    echo "<td>" . $row['route_lengte'] . "</td>" ;

    echo "<td>" .  $row['route_duur'] . "</td>" ;

    echo "</tr>";
    echo "</table>";
}
?>
</body>
</html>
