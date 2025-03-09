<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

class StartCommand extends Command
{
    protected string $name = "start";
    protected string $description = "Почати користуватись ботом";

    public function handle()
    {
        $keyboard = Keyboard::make()->inline()->row([
            Keyboard::inlineButton(["text" => "Кнопка 1", "callback_data" => "button1"]),]);

        $ButtonsMenuKeyboard = Keyboard::make()
            ->row([
                Keyboard::button(["text" => "Переглянути інформацію"])])
            ->row([
                Keyboard::button(["text" => "Заявка на забір матеріалу"])])
            ->row([
                Keyboard::button(["text" => "Переглянути заявки на дослідження"])])
            ->setResizeKeyboard(true);


        $this->replyWithMessage([
            "text" =>"Вітаю в боті лабораторії Лімарія.
Для ознайомлення скористайтесь меню⬇️",
            "reply_markup" => $ButtonsMenuKeyboard
        ]);

//        $this->triggerCommand("help");

    }
}
