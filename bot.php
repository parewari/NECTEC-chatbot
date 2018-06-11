<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('php/line-bot.php');

$channelSecret = '40f2053df45b479807d8f2bba1b0dbe2';
$access_token  = 'VjNScyiNVZFTg96I4c62mnCZdY6bqyllIaUZ4L3NHg5uObrERh7O5m/tO3bbgEPeF2D//vC4kHTLQuQGbgpZSqU3C+WUJ86nQNptlraZZtek2tdLYoqREXuN8xy3swo9RVO3EL0VrmnhSQfuOl89AQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	// $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
    $bot->replyMessageNew($bot->replyToken, "Hello World!");

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}