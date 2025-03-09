<?php

namespace App\Handlers;

use App\Service\CollectService;
use Telegram\Bot\Laravel\Facades\Telegram;

class CallbackHandler
{
    public function handler($webhook)
    {
        $chatId = $webhook["callback_query"]["message"]["chat"]["id"];
        $callbackData =json_decode($webhook["callback_query"]["data"], true);
        $messageId = $webhook["callback_query"]["message"]["message_id"];

        $CollectService = new CollectService();

        $commands = [
            "collect" => [$CollectService,"checkUser"]
        ];

        $result = $commands["collect"]($webhook);
//

//        Telegram::deleteMessage([
//            "chat_id" =>$chatId,
//            "message_id" => $messageId
//        ]);

    }

}
