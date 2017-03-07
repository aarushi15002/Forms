<?php
function test_input($data)
{
    trim($data);
    stripslashes($data);
    htmlspecialchars($data);
    return $data;
}
$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$feedback = test_input($_POST["feedback"]);
$to = "kgninstitute15@gmail.com";
$subject = "KGN_Institute - Feedback";
$message = "Name : $name | E-mail : $email | Feedback : $feedback";
//$header = $_GET['from'];
$header = "From: KGN-Institute.com\n";
mail($to,$subject,$message,$header);
echo "<br>Thank You.";
?>

<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"></br></br>Go Back to website.</a>
