<?php

// -------------------------------------------------------
// Outdoor Storage — Contact Form Handler
// Place this file in the same directory as index.php
// -------------------------------------------------------

$to = 'office@outdoorstorage.net';

// Collect and sanitize inputs
$fname   = trim(strip_tags($_POST['fname']   ?? ''));
$lname   = trim(strip_tags($_POST['lname']   ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$phone   = trim(strip_tags($_POST['phone']   ?? ''));
$subject = trim(strip_tags($_POST['subject'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));
$location = trim(strip_tags($_POST['location'] ?? ''));

// Basic validation — redirect back with error if required fields are missing
if (empty($fname) || empty($lname) || empty($email) || empty($message) || empty($location)) {
    header('Location: index.php?error=missing#contact');
    exit;
}

// Validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?error=email#contact');
    exit;
}

// Build the email
$name        = $fname . ' ' . $lname;
$email_subject = 'New Contact Form Submission' . ($subject ? ': ' . $subject : '');

$body  = "You have a new message from the Outdoor Storage website.\n\n";
$body .= "Name:    $name\n";
$body .= "Email:   $email\n";
$body .= "Location:   $location\n";
$body .= "Phone:   " . ($phone ?: '(not provided)') . "\n";
$body .= "Topic:   " . ($subject ?: '(not selected)') . "\n";
$body .= "\n--- Message ---\n\n";
$body .= $message . "\n";

$headers  = "From: help@outdoorstorage.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send and redirect
if (mail($to, $email_subject, $body, $headers)) {
    header('Location: index.php?sent=1#contact');
} else {
    header('Location: index.php?error=send#contact');
}
exit;
