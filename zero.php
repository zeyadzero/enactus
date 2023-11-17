<?php
$servername = "localhost";
$username = "root";
$password = "zszs123567890";
$database = "enactus";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $database);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// البيانات المرسلة عبر POST
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['Phone_Number'];
$whatsapp = $_POST['WhatsAPP_Number'];
$university = $_POST['University'];
$major = $_POST['Major'];
$date = $_POST['Date_of_birth'];
$exp = $_POST['Info_exp'];

// تحضير الاستعلام
$sql = "INSERT INTO `new members` (`name`, `email`, `phone`, `whatsapp`, `university`, `major`, `data`, `experience`) 
        VALUES ('$name', '$email', '$phone', '$whatsapp', '$university', '$major', '$date', '$exp')";

// تنفيذ الاستعلام
if ($conn->query($sql) === TRUE) {
    echo "تم التسجيل";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>