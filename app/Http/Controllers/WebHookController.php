<?php

namespace App\Http\Controllers;


use App\Handlers\CallbackHandler;
use App\Handlers\CommandHandler;
use Telegram\Bot\Api;

use Telegram\Bot\Laravel\Facades\Telegram;


class WebHookController extends Controller
{
    public function webhook()
    {
        $webhook = Telegram::getWebhookUpdate();

        if (isset($webhook["callback_query"])) {
            $InlineButtonHandler = new CallbackHandler();
            $InlineButtonHandler->handler($webhook);
        }
        else
        {
            $MenuButtonHandler = new CommandHandler();
            $MenuButtonHandler->handleCommand($webhook);
        }
    }

    public function setWebhook()
    {
        $telegram = new Api("7750934355:AAGE81JqMS-BVFZ7d9MZfld6DijpGYqP6Ug");
        $url = "https://94fd-94-45-153-1.ngrok-free.app/telegram-webhook";
        $response = $telegram->setWebhook(["url" => $url,"pending_update_count" => 0,"allowed_updates" =>["message", "callback_query"]]);
        return $response;

    }

}
