<?PHP

$host = "localhost";    //HOST
$user = "root";         //USER
$pass = "";             //PASSWORD
$db = "chat";           //DATABASE NAME

// PDO CONNECTION 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
} catch(PDOException $e) {
    echo "Error while trying to connect in database: ".$e->getMessage();
    die();
}

// OLD CONNECTION USED TO MYSQLI_ESCAPE_STRING
// $conn = mysqli_connect($host, $user, $pass, $db) or die("Error while trying to connect in database!");