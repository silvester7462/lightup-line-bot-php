<?php
    $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('jxkcosk32uI9+tI+5o8oBCkDfLy5zXQERKay/GGhoE2rNcq1uxgY+OWnIrCyXwltDibumzAk/0LV/hAdyoxEgxyFC+ErFIbhWWXB0Nlq49mYWniRMulGU8pcRHrQVeIVZnWZS8M0cbeod/zRMl5FgQdB04t89/1O/w1cDnyilFU=');
    $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '2e3b26cfcb472c9662e1f626266ac585']);

    # 取得 reply token
    reply_token = params['events'][0]['replyToken']
        
    $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
    $response = $bot->replyMessage(reply_token, $textMessageBuilder);
    if ($response->isSucceeded()) {
        echo 'Succeeded!';
        return;
    }
    // Failed
    echo $response->getHTTPStatus() . ' ' . $response->getRawBody();

