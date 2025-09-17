<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
$pattern = '/^(?=.[a-zA-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (!preg_match($pattern, $password)) {
        echo "Password must have at least 8 characters, contain a letter, number, and special character.";
    } else {
        echo "Password is valid.";
    }
}
?>