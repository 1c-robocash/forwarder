<?php
$jsonObject = json_decode(implode('', file("php://input")));
file_get_contents("https://api.telegram.org/bot945026695:AAFOvAonziwIHzus1ue2II7nmRGUkutBTSY/sendMessage?chat_id=-1001559215472&text=".(string)($jsonObject->from).":".(string)($jsonObject->content));
echo "{\"error_code\": 0}";
?>