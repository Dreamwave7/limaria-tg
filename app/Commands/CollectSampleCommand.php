<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

class CollectSampleCommand extends Command
{
    protected string $name = "collect";
    protected string $description = "Залишити заявку на забір матеріалу";

    public function handle()
    {
        date_default_timezone_set("Europe/Kiev");
        $maximumDate = date("H:i",strtotime("16:00"));
        $currentDate = date("H:i");

        $today = date("d-m-Y");
        $tomorrow = date("d-m-Y",strtotime("+1 day"));


        $keyboardTwoButtons = Keyboard::make()->inline()->row([
            Keyboard::inlineButton(["text" => "Сьогодні", "callback_data" => json_encode(["command" =>"collect","date"=>$today])]),
            Keyboard::inlineButton(["text" => "Завтра", "callback_data" => json_encode(["command" =>"collect","date"=>$tomorrow])])
            ]);

        $keyboardOneButton = Keyboard::make()->inline()->row([
            Keyboard::inlineButton(["text" => "Завтра", "callback_data" => json_encode(["command" =>"collect","date"=>$tomorrow])])
        ]);

        $replyMarkup = ($currentDate > $maximumDate) ? $keyboardOneButton : $keyboardTwoButtons;

        $this->replyWithMessage([
            "text" => "Натисність кнопку,щоб вибрати дату забору матеріалу.
Заявки на сьогодні приймаються до ".$maximumDate,
            "reply_markup" =>$replyMarkup
        ]);
    }


}
