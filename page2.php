<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['radio'])) {
        echo '  ' . $_POST['radio'];
    } else {
        echo 'Please select the value.';
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 2</title>
</head>
<body>
</body>
</html>