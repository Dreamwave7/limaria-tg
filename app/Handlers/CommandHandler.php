<?php

namespace App\Handlers;


use Telegram\Bot\Laravel\Facades\Telegram;

class CommandHandler
{
    public function handleCommand($webhook)
    {
        $UserCommand = $webhook["message"]["text"];
        $commands =
            [
                "Старт" => "start",
                "/start" => "start",
                "Переглянути інформацію" => "info",
                "Заявка на забір матеріалу" => "collect",
                "Переглянути заявки на дослідження" => "blank"
            ];

        if (array_key_exists($UserCommand,$commands))
            {
                Telegram::triggerCommand($commands[$UserCommand],$webhook);
                return true;
            }
        else
        {
            Telegram::sendMessage([
                "chat_id" => $webhook["message"]["chat"]["id"],
                "text" => "Не роспізнав команду, спробуйте ще раз"
            ]);
        }

    }


}
