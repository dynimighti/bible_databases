// Create a new database for the King James Bible
$servername = "dynimighti.com";
$username = "d50238ed0bdee364";
$password = "197823f1365bb4751c165f93f38e5c850164d08027c8f6c4";
$dbname = "kjv_bible";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create the table for the King James Bible
$sql = "CREATE TABLE kjv_bible (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    book VARCHAR(50) NOT NULL,
    chapter INT(6) NOT NULL,
    verse INT(6) NOT NULL,
    text TEXT NOT NULL,
    note TEXT NOT NULL
    )";

if ($conn->query($sql) === TRUE