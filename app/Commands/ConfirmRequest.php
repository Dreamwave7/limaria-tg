<?php

namespace App\Commands;

use App\Models\Request;
use Telegram\Bot\Commands\Command;

class ConfirmRequest extends Command
{
    protected string $name = "confirm_request";
    protected string $description = "Підтвердити кожен забір матеріалу,як виконаний";

    public function handle()
    {
        $today =date("d-m-Y");
        $requests = Request::where("collect_date",$today)->where("status","ready")->get();

        foreach ($requests as $request)
        {
            $request->status = "done";
            $request->save();
        }

        $this->replyWithMessage(["text" => "command working"]);

    }

}
