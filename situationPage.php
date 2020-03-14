<?php
session_start();
if (!isset($_SESSION['situation']) || ($_SESSION['situation'] == -1 && !isset($_POST['age']))) {
    session_destroy();
    header('Location: /CKTU/index.php');
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

if (!isset($_SESSION['id'])) {
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $education = $_POST['education'];
    $freq = $_POST['freq'];
    $time = $_POST['time'];
    $money = $_POST['money'];
    $income = $_POST['income'];
    $familiar = $_POST['familiar'];


    if ($stmt = $conn->prepare("INSERT INTO personalInfo(age,gender,education,freq,time,money,income,familiar) VALUES (?,?,?,?,?,?,?,?)")) {
        $stmt->bind_param("iiiiiiii", $age, $gender, $education, $freq, $time, $money, $income, $familiar); //i - integer；d - double；s - string；b - BLOB

        if ($stmt->execute()) {
            $stmt->close();
            $id =  $conn->insert_id;
            $_SESSION['id'] = $id;
        } else {
            session_destroy();
            header('Location: /CKTU/index.php');
            exit();
        }
    } else {
        session_destroy();
        header('Location: /CKTU/index.php');
        exit();
    }
}
if ($_SESSION["situation"] == -1) {
    $situation = rand(0, 7);
    if ($stmt = $conn->prepare("INSERT INTO form(id,situation,start) VALUES (?,?,?)")) {
        $now = new DateTime('NOW', new DateTimeZone('Asia/Taipei'));
        $now = $now->format('Y-m-d H:i:s');

        $stmt->bind_param("iis", $id, $situation, $now); //i - integer；d - double；s - string；b - BLOB

        if ($stmt->execute()) {
            $stmt->close();
            $_SESSION['situation'] = $situation;
        } else {
            /*echo $stmt->error;*/
            session_destroy();
            header('Location: /CKTU/index.php');
            exit();
        }
    } else {
        session_destroy();
        header('Location: /CKTU/index.php');
        exit();
    }
}


switch ($_SESSION['situation']) {
    case 0:
        require_once("./situations/000.php");
        break;
    case 1:
        require_once("./situations/001.php");
        break;
    case 2:
        require_once("./situations/010.php");
        break;
    case 3:
        require_once("./situations/011.php");
        break;
    case 4:
        require_once("./situations/100.php");
        break;
    case 5:
        require_once("./situations/101.php");
        break;
    case 6:
        require_once("./situations/110.php");
        break;
    case 7:
        require_once("./situations/111.php");
        break;
}
