<?php
$Servername = "localhost";
$Username = "Ayodya";
$Password = "mkAqpJ.B*NWPAw.r";
$Database = "kaleliya";

$conn = mysqli_connect($Servername, $Username, $Password, $Database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
}

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $lesson = $_POST['lesson'];
    $pdf = $_FILES['upload_pdf']['name'];
    $pdf_tem_loc = $_FILES['upload_pdf']['tmp_name'];
    $pdf_store = "pdf/" . $pdf;
    move_uploaded_file($pdf_tem_loc, $pdf_store);
    $intro = $_POST['intro'];
    $submited_day = $_POST['submited_day'];
    $submited_by = $_POST['submited_by'];

    $sql = "INSERT INTO `grade_1`(`Subject`, `Lesson`, `Met`, `Intro`,`Subday`, `Subby`) VALUES ('$subject', '$lesson','$pdf' ,'$intro', '$submited_day', '$submited_by');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("location:../Grade/grade.add.work.php");
        $success_message = "Data inserted successfully";
        echo '<script type="text/javascript">alert("' . $success_message . '");</script>';
    } else {
        echo "Data not inserted. Error: " . mysqli_error($conn);
    }
}