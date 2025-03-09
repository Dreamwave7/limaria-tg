<?php

namespace App\Commands;

use App\Models\Clinic;
use App\Models\Employee;
use App\Models\Request;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class BlankCommand extends Command
{
    protected string $name = "blank";
    protected string $description = "Отримати заявки для дослідження матеріалу";


    public function handle()
    {
        date_default_timezone_set("Europe/Kiev");

//        Employee::create([
//            "name" => "Дмитро Лисовий",
//            "telegram_name" => "@usernamesTG",
//            "telegram_id" => "439709581",
//            "clinic_id" => 1
//        ]);

//        Clinic::create([
//            "name" => "Genesis",
//            "address" => "Вишгород, Нові Петрівці 54а"
//        ]);


//        Request::create([
//            "collect_date" => $currentDate,
//            "employee_id" => 1,
//            "comment" => "test comment",
//            "status" => "await"
//        ]);


        $this->replyWithMessage([
            "text"=>"sadasd"
        ]);
    }

}
