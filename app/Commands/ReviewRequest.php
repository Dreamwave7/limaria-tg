<?php

namespace App\Commands;


use App\Models\Request;
use Telegram\Bot\Commands\Command;

class ReviewRequest extends Command
{
    protected string $name = "all_requests";
    protected string $description = "Виведення заявок на забір матеріалу Сьгодні/Завтра";

    public function handle()
    {
        date_default_timezone_set("Europe/Kiev");
        $today =date("d-m-Y");

        $requests = Request::where("collect_date",$today)->where("status","ready")->get();

        if ($requests->isEmpty())
        {
            $this->replyWithMessage(["text" => "😢 На даний момент немає нових заявок."]);
        }
        else
        {
            foreach ($requests as $request)
            {
                $this->replyWithMessage([
                    "text" =>
"🟢 Заявка 🟢
🏥 Клініка: {$request->employee->clinic->name}
📍 Адреса: {$request->employee->clinic->address}
📅 Дата: {$request->collect_date}
👨‍⚕️ Лікар: {$request->employee->name}
🗒Заявка створена: {$request->created_at}"
                ]);

        }

        }






//        $this->replyWithMessage([
//            "text" =>
//"🟢 Заявка 🟢
//🏥 Клініка: {$requests->employee->clinic->name}
//📍 Адреса: {$requests->employee->clinic->address}
//📅 Дата: {$requests->collect_date}
//👨‍⚕️ Лікар: {$requests->employee->name}
//🗒Заявка створена: {$requests->created_at}"
//        ]);
    }

}
