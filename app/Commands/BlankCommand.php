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

        $this->replyWithMessage([
            "text"=>"В розробці..."
        ]);

    }

}
