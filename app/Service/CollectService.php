<?php

namespace App\Service;

use App\Models\Employee;
use App\Models\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class CollectService
{
    public function checkUser($webhook)
    {
        $telegram_id = $webhook["callback_query"]["message"]["chat"]["id"];
        $person = Employee::where("telegram_id", $telegram_id)->first();

        if (!$person)
        {
            Telegram::sendMessage([
                "chat_id" => $telegram_id,
                "text" => "Hello you are not our client"
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
