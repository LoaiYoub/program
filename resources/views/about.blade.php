<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


{{-- <h1><?php //echo $task;?></h1> --}}

@csrf
<?php
if(@$_POST['name'])
echo 'HI' . $_POST['name'];
else{
    echo '
<form action="" method="post">
@csrf
<input type="text" name="name">
<input type="submit" value="Submit">
</form>';
}


?>
</body>
</html>
