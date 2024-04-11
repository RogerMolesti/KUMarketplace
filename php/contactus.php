<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    if (empty($name) || empty($email) || empty($message)) {
        $response = ["success" => false, "message" => "Please fill out all fields."];
    } else {
        
        $to = "carrerdy@kean.edu";
        $subject = "Contact Form Submission from $name";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";

        
        $sent = mail($to, $subject, $message, $headers);

      
        if ($sent) {
            $response = ["success" => true, "message" => "Message sent successfully."];
        } else {
            $response = ["success" => false, "message" => "Message could not be sent. Please try again later."];
        }
    }

 
    header("Content-Type: application/json");
    echo json_encode($response);
}
?>


