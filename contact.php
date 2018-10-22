<?php
if(!isset($_POST['submit']))
{
    echo "<h1>error; you need to submit the form!</h1>";
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}


if(empty($firstName)||empty($lastName)||empty($email)||empty($message))
{
    echo "<h1>Please fill in all the fields</h1>";
    exit;
}


?>