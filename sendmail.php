<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'vendor/autoload.php';

// Start the session
session_start();

// You can remove the $isLoggedIn check entirely

try {
    $inquiries = [];

    // Loop through all the POST data to collect information for each person
    foreach ($_POST['first_name'] as $index => $firstName) {
        $personIndex = $index;
        $name = $firstName . ' ' . $_POST['last_name'][$index];
        $nationality = $_POST['nationality'][$index];
        $entryType = $_POST['entry_type'][$index];
        $state = $_POST['state'][$index];
        $city = $_POST['city'][$index];
        $countryCode = $_POST['country_code'][$index];
        $contactNo = $_POST['contact_no'][$index];
        $whatsappCountryCode = $_POST['whatsapp_country_code'][$index];
        $whatsappContactNumber = $_POST['whatsapp_contact_number'][$index];
        $dob = $_POST['dob'][$index];
        $email = $_POST['email'][$index];
        $passportNumber = $_POST['passport_number'][$index];
        $passportExpiryDate = $_POST['passport_expiry_date'][$index];
        $arrivalDate = $_POST['arrival_date'][$index];

        // Construct the email content for each person
        $email_content = "<html><body>";
        $email_content .= "<h2>Person $personIndex: New Inquiry from your website</h2>";
        $email_content .= "<p><strong>Name:</strong> $name</p>";
        $email_content .= "<p><strong>Nationality:</strong> $nationality</p>";
        $email_content .= "<p><strong>Entry Type:</strong> $entryType</p>";
        $email_content .= "<p><strong>State:</strong> $state</p>";
        $email_content .= "<p><strong>City:</strong> $city</p>";
        $email_content .= "<p><strong>Country Code:</strong> $countryCode</p>";
        $email_content .= "<p><strong>Contact No:</strong> $contactNo</p>";
        $email_content .= "<p><strong>WhatsApp Country Code:</strong> $whatsappCountryCode</p>";
        $email_content .= "<p><strong>WhatsApp Contact Number:</strong> $whatsappContactNumber</p>";
        $email_content .= "<p><strong>Date of Birth:</strong> $dob</p>";
        $email_content .= "<p><strong>Email Address:</strong> $email</p>";
        $email_content .= "<p><strong>Passport Number:</strong> $passportNumber</p>";
        $email_content .= "<p><strong>Passport Expiry Date:</strong> $passportExpiryDate</p>";
        $email_content .= "<p><strong>Arrival Date:</strong> $arrivalDate</p>";
        $email_content .= "</body></html>";

        $inquiries[] = [
            'email_content' => $email_content,
        ];
    }

    if (!empty($inquiries)) {
        // Server settings
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hamzashahzad020@gmail.com'; // SMTP username
        $mail->Password   = 'cwka nlrg ssak wtow'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587; // TCP port to connect to

        // Sender and recipient
        $mail->setFrom('hamzashahzad020@gmail.com', 'Your Name'); // Sender's email and name
        $mail->addAddress('hamzashahzad020@gmail.com', 'Your Name'); // Recipient's email and name

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Inquiry';
        $mail->Body    = implode('<br><br>', array_column($inquiries, 'email_content')); // Join all email contents

        // Send email
        $mail->send();

        // Redirect after sending the email
        header("Location: index.php");
        exit; // Always call exit after a header redirect
    } else {
        throw new Exception('No inquiry data to process.');
    }

} catch (Exception $e) {
    // Log the error details
    file_put_contents('/path/to/error.log', 'Mailer Error: ' . $mail->ErrorInfo . "\n", FILE_APPEND);
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
