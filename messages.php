<meta http-equiv="refresh" content="5">
<?php

require_once('chat_inc.php');
$oSimpleChat = new SimpleChat();
echo $oSimpleChat->getMessages();

?>