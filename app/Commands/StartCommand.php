<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommand extends Command
{
    protected string $name = "start";
    protected string $description = "Почати користуватись ботом";

    public function handle()
    {
        $webhook = Telegram::getWebhookUpdate();
        $userId = $webhook->getMessage()->getFrom()->getId();


        $adminKeyboard = Keyboard::make()
            ->row([
                Keyboard::button(["text" => "Переглянути інформацію"])])
            ->row([
                Keyboard::button(["text" => "Заявка на забір матеріалу"])])
            ->row([
                Keyboard::button(["text" => "Переглянути заявки на дослідження"])])
            ->row([
                Keyboard::button(["text" => "Переглянути заявки на забір матеріалу"])])
            ->row([
                Keyboard::button(["text" => "Підтвердити отримання всіх зразків"])
            ])
            ->setResizeKeyboard(true);

        $ButtonsMenuKeyboard = Keyboard::make()
            ->row([
                Keyboard::button(["text" => "Переглянути інформацію"])])
            ->row([
                Keyboard::button(["text" => "Заявка на забір матеріалу"])])
            ->row([
                Keyboard::button(["text" => "Переглянути заявки на дослідження"])])
            ->setResizeKeyboard(true);



        if (in_array($userId,["439709581","7712071126"]))
        {
            $this->replyWithMessage([
                "text" =>"Вітаю в боті лабораторії Лімарія.
Ви авторизувались, як адміністратор.
Для ознайомлення скористайтесь меню⬇️",
                "reply_markup" => $adminKeyboard
            ]);
        }
        else
        {
            $this->replyWithMessage([
                "text" =>"Вітаю в боті лабораторії Лімарія.
Для ознайомлення скористайтесь меню⬇️",
                "reply_markup" => $ButtonsMenuKeyboard
            ]);
        }



//        $this->triggerCommand("help");

    }
}
