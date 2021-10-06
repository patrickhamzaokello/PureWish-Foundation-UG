<?php
include("config.php");

$errors = [];
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $myvolname = mysqli_real_escape_string($db, $_POST['volusername']);
    $myvolemail = mysqli_real_escape_string($db, $_POST['voluseremail']);
    $myvolmessage = mysqli_real_escape_string($db, $_POST['volusermessage']);


   
    if (empty($_POST['voluseremail'])) {
        $errors['voluseremail'] = 'Email is required.';
    }

    if (empty($_POST['volusermessage'])) {
        $errors['volusermessage'] = 'Message  is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $volsql = "INSERT INTO `volunteers`(`name`, `email`, `message`) VALUES ('$myvolname', '$myvolemail', '$myvolmessage')";

        if ($db->query($volsql) === TRUE) {
            $data['success'] = true;
            $data['message'] = 'Message Sent, We shall Reachout to you soon!';
        } else {
            $data['success'] = false;
            $data['errors'] = $errors;
        }
    }
}

echo json_encode($data);
