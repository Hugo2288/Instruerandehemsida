<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$text = "Namn: $name\nE-post: $email\nMeddelande: $message\n\n\n";

$existingText = file_exists('meddelande.txt') ? file_get_contents('meddelande.txt') : '';

$newText = $existingText . $text;

file_put_contents('meddelande.txt', $newText);
header('Location: index.html');
exit;
?>
