<?php
$your_name = htmlspecialchars($_POST['your_name'], ENT_QUOTES);
echo $your_name.'さん、ご登録ありがとうございます'.'<br />';
