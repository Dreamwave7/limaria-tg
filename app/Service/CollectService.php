<?php

namespace App\Service;

use App\Models\Employee;
use App\Models\Request;
use Telegram\Bot\Keyboard\Keyboard;
use Telegram\Bot\Laravel\Facades\Telegram;

class CollectService
{
    public function checkUser($webhook)
    {
        $telegram_id = $webhook["callback_query"]["message"]["chat"]["id"];
        $person = Employee::where("telegram_id", $telegram_id)->first();

        if (!$person)
        {
            $contactButton = Keyboard::make()->inline()->row([
                Keyboard::inlineButton(["text" => "Зв'язатись з нами","url" => "t.me/limaria_lab"])
            ]);
            Telegram::sendMessage([
                "chat_id" => $telegram_id,
                "text" =>
"
Доброго дня!
На жаль, Вас немає у базі наших замовників. Зверніться, будь ласка, до нашого менеджера за телефоном +380751020039, для реєстрації. Будемо раді співпраці!
",
                "reply_markup" => $contactButton
            ]);
        }
        else //створення запиту в бд
        {
            $this->registerRequest($webhook,$person->id,$telegram_id);
        }

//        Telegram::sendMessage([
//            "chat_id" => $telegram_id,
//            "text" => "Hello welcome"
//        ]);

    }

    public function registerRequest($webhook,$employeeId,$telegram_id)
    {
        $callbackData =json_decode($webhook["callback_query"]["data"], true);

        $newRequest = Request::create([
            "collect_date" =>$callbackData["date"],
            "employee_id" => $employeeId,
            "comment" => "None",
            "status" => "ready"
        ]);
        Telegram::sendMessage
        ([
            "chat_id" => $telegram_id,
            "text" =>
"🟢 Нова заявка створена 🟢
🏥 Клініка: {$newRequest->employee->clinic->name}
📍 Адреса: {$newRequest->employee->clinic->address}
📅 Дата: {$newRequest->collect_date}
👨‍⚕️ Лікар: {$newRequest->employee->name}"
        ]);
    }

}
