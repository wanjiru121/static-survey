<?php
$name = $_POST['name'];

$to = "rosewanjiru121@gmail.com"
$subject = "Hey please you got to work"
$body = "Hey you need to work. \n\n $name";

mail ($to,$subject,$body);

echo "Message Sent!"
>