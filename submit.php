<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['Name'];
    $middleName = $_POST['middle_name'];
    $lastName = $_POST['last_name'];
    $dob = $_POST['date'];
    $gender = $_POST['gender'] ?? '';
    $nationality = $_POST['Nationality'];
    $email = $_POST['email'];
    $code = $_POST['Countrycode'];
    $phone = $_POST['number'];
    $address = $_POST['address'];

    // File upload
    $filename = basename($_FILES['file']['name']);
    $filename = preg_replace("/[^A-Za-z0-9\.\-_]/", "", $filename);
    $tempname = $_FILES['file']['tmp_name'];
    $uploadDir = "uploads/";
    $uploadPath = $uploadDir . $filename;

    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!move_uploaded_file($tempname, $uploadPath)) {
        die("File upload failed!");
    }

    // Save to data.txt
    $data = "$firstName,$middleName,$lastName,$dob,$gender,$nationality,$email,$code$phone,$address,$filename\n";

    if (file_put_contents("data.txt", $data, FILE_APPEND | LOCK_EX) === false) {
        die("Failed to write to file.");
    }

    // Redirect to success page
    header("Location: success.php");
    exit;
} else {
    echo "Invalid Request";
}
?>
