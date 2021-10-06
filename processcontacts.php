<?php
include("config.php");

$errors = [];
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $mycontactname = mysqli_real_escape_string($db, $_POST['contactname']);
    $mycontactemail = mysqli_real_escape_string($db, $_POST['contactemail']);
    $mycontactsubject = mysqli_real_escape_string($db, $_POST['contactsubject']);
    $mycontactmessage = mysqli_real_escape_string($db, $_POST['contactmessage']);


   
    if (empty($_POST['contactemail'])) {
        $errors['contactemail'] = 'Email is required.';
    }

    if (empty($_POST['contactsubject'])) {
        $errors['contactsubject'] = 'Message Subject  is required.';
    }

    if (empty($_POST['contactmessage'])) {
        $errors['contactmessage'] = 'Message  is required.';
    }

    if (!empty($errors)) {
        $data['success'] = false;
        $data['errors'] = $errors;
    } else {
        $contactsql = "INSERT INTO contacts (`name`, `email`, `subject`, `message`) VALUES ('$mycontactname', '$mycontactemail', '$mycontactsubject', '$mycontactmessage')";

        if ($db->query($contactsql) === TRUE) {
            $data['success'] = true;
            $data['message'] = 'Message Sent, We shall Reachout to you soon!';
        } else {
            $data['success'] = false;
            $data['message'] = $errors;
        }
    }
}

echo json_encode($data);
