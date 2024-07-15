<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['n'];
    $email = $_POST['e'];
    $country = $_POST['p'];
    $phone = $_POST['pp'];
    $transfer_method = $_POST['c'];
	$prefered = $_POST['cc']
    $scammer_company = $_POST['i'];
    $amount_lost = $_POST['a'];
    $currency = $_POST['r'];
    $scam_type = $_POST['l'];
    $message = $_POST['m'];
    
    // Email information
    $to = "jenniferpenny62@aol.com";
    $subject = "New Investment Scam Report";
    $body = "Name: $name\n"
            . "Email: $email\n"
            . "Country: $country\n"
            . "Phone Number: $phone\n"
            . "Transfer Method: $transfer_method\n"
            . "Scammer Company: $scammer_company\n"
            . "Amount Lost: $amount_lost $currency\n"
			. "Prefered contract: $prefered\n"
            . "Scam Type: $scam_type\n"
            . "Message:\n$message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your report has been submitted successfully. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
