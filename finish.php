<?php
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['situation'])) {
    exit();
}
require_once("./DB.php");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query('SET CHARACTER SET utf8');
$conn->query("SET collation_connection = 'utf8mb4_unicode_ci'");
$id = $_SESSION['id'];
if ($_POST['question'] === "0") {
    $startQ1 = $_POST['startQ1'];
    $startQ2 = $_POST['startQ2'];
    $startQ3 = $_POST['startQ3'];
    $startQ4 = $_POST['startQ4'];
    if ($stmt = $conn->prepare("UPDATE form SET Q1_1 = ?,Q1_2=?,Q1_3=?,Q1_4=? WHERE id=?")) {

        $stmt->bind_param("iiiii", $startQ1, $startQ2, $startQ3, $startQ4, $id); //i - integer；d - double；s - string；b - BLOB

        if ($stmt->execute()) {
            $stmt->close();
        } else {

            exit();
        }
    } else {
        exit();
    }
} else if ($_POST['question'] === "1") {
    $now = new DateTime('NOW', new DateTimeZone('Asia/Taipei'));
    $now = $now->format('Y-m-d H:i:s');
    $Q1 = $_POST['Q1'];
    $Q2 = $_POST['Q2'];
    $Q3 = $_POST['Q3'];
    $Q4 = $_POST['Q4'];
    $Q5 = $_POST['Q5'];
    $Q6 = $_POST['Q6'];
    $Q7 = $_POST['Q7'];
    $Q8 = $_POST['Q8'];
    $Q9 = $_POST['Q9'];
    $Q10 = $_POST['Q10'];
    $Q11 = $_POST['Q11'];
    $Q12 = $_POST['Q12'];
    $Q13 = $_POST['Q13'];
    $Q14 = $_POST['Q14'];
    $Q15 = $_POST['Q15'];
    $Q16 = $_POST['Q16'];
    $Q17 = $_POST['Q17'];
    $Q18 = $_POST['Q18'];
    $Q19 = $_POST['Q19'];
    $Q20 = $_POST['Q20'];
    if ($stmt = $conn->prepare("UPDATE form SET end=?, Q2_1 = ?,Q2_2=?,Q2_3=?,Q2_4=?,Q2_5=?,Q2_6=?,Q2_7=?,Q2_8=?,Q2_9=?,Q2_10=?, Q2_11 = ?,Q2_12=?,Q2_13=?,Q2_14=?,Q2_15=?,Q2_16=?,Q2_17=?,Q2_18=?,Q2_19=?,Q2_20=? WHERE id=?")) {

        $stmt->bind_param("siiiiiiiiiiiiiiiiiiiii", $now, $Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $Q7, $Q8, $Q9, $Q10, $Q11, $Q12, $Q13, $Q14, $Q15, $Q16, $Q17, $Q18, $Q19, $Q20, $id); //i - integer；d - double；s - string；b - BLOB

        if ($stmt->execute()) {
            $stmt->close();
            session_destroy();
        } else {
            echo $stmt->error;
            exit();
        }
    } else {
        echo "ERROR";
        exit();
    }
}
