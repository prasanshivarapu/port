<?php
// Assuming you have a database connection

$host = 'localhost';
$dbname = 'port';
$username = 'admin';
$password = '1234';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the raw POST data as JSON
        $json_data = file_get_contents("php://input");

        // Decode JSON data
        $data = json_decode($json_data);

        // Validate that the required fields are not empty
        if (!empty($data->name1) && !empty($data->email) && !empty($data->subject) && !empty($data->message)) {
            // Handle the form data (sanitize inputs)
            $name = $data->name1;
            $email = $data->email;
            $subject = $data->subject;
            $message = $data->message;

            // Assuming you have a table named 'portfo' with columns 'name', 'email', 'subject', and 'message'
            $sql = "INSERT INTO portfo (name, email, subject, message) VALUES (:name, :email, :subject, :message)";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':subject', $subject);
            $stmt->bindParam(':message', $message);

            $stmt->execute();

            // Send a success message
            $response = array("status" => "success", "message" => "Data inserted successfully");
            $to = "prasan.shibarapu@gmail.com";
            $subject = "HTML email";
            
            $message = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>This email contains HTML Tags!</p>
            <table>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            </tr>
            <tr>
            <td>$name</td>
            <td>$email</td>
            <td>$subject</td>
            <td>$message</td>
            </tr>
            </table>
            </body>
            </html>
            ";
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // More headers
            $headers .= 'From: <prasan.shivarapu@gmail.com>' . "\r\n";
            $headers .= 'Cc: 158r1a03j5@gmail.com' . "\r\n";
            
            mail($to,$subject,$message,$headers);

        } else {
            // Send a failure message
            $response = array("status" => "error", "message" => "One or more required fields are empty");
        }

        // Output JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Send a failure message for invalid request method
        $response = array("status" => "error", "message" => "Invalid request method");
        header('Content-Type: application/json');
        echo json_encode($response);
    }
} catch (PDOException $e) {
    // Send a failure message for database error
    $response = array("status" => "error", "message" => "Database error: " . $e->getMessage());
    header('Content-Type: application/json');
    echo json_encode($response);
}

$conn = null;
?>
