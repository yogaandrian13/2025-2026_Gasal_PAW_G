<?php
require 'validate.inc';

$errors = [];

if (validateName($_POST, 'surname', $errors)) {
    echo 'Data OK!';
} else {
    echo 'Data invalid!<br>';
    
    foreach ($errors as $field => $message) {
        echo$message;
    }
}
?>

