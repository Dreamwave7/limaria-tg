<?php

namespace App\Commands;

use App\Models\Clinic;
use App\Models\Employee;
use App\Models\Request;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Laravel\Facades\Telegram;

class BlankCommand extends Command
{
    protected string $name = "blank";
    protected string $description = "Отримати заявки для дослідження матеріалу";


    public function handle()
    {
        $priceList = public_path("limaria_dribni_2025.pdf");
        $rulesSamples = public_path("Відбір зразків.docx");
        $agreementSamples = public_path("договір ПФ.7.1.06.docx");

        $this->replyWithChatAction(["action" => "upload_document" ]);

        $this->replyWithDocument([
            "document" => InputFile::create($rulesSamples),
            "caption" => "Умови відбору зразків"
        ]);

        $this->replyWithDocument([
            "document" => InputFile::create($agreementSamples),
            "caption" => "Шаблон договору"
        ]);
        $this->replyWithChatAction(["action" => "upload_document" ]);

        $this->replyWithDocument([
            "document" => InputFile::create($priceList),
            "caption" => "Прайс для дрібних тварин"
        ]);

    }

}
