<?php

namespace App\Commands;

use Illuminate\Notifications\Action;
use Laravel\Prompts\Key;
use Telegram\Bot\Actions;
use Telegram\Bot\Commands\Command;
use Telegram\Bot\Keyboard\Keyboard;

class InfoCommand extends Command
{
    protected string $name ="info";
    protected string $description = "Отримати iнформацію про лабораторію Лімарія";

    public function handle()
    {
        $labDescription = "
Лабораторія Лімарія – це сучасний німецько-український науково-діагностичний центр, який спеціалізується на проведенні високоякісних мікробіологічних досліджень.
Ми прагнемо забезпечити наших клієнтів точними та надійними результатами, використовуючи найновіші технології та обладнання.
Перелік наших мікробіологічних досліджень:
- Медична діагностика
- Ветеринарна діагностика
- Дослідження харчових продуктів.
Наша команда складається з досвідчених фахівців, які постійно вдосконалюють свої знання та навички. Ми дбаємо про кожного клієнта, надаючи індивідуальний підхід та високий рівень обслуговування.

Наша адреса : вулиця Вітряного, 64, Лютіж, Київська область.
Графік роботи: ПН-СБ, з 09:00-18:00
Електронна пошта: info@limaria.com.ua
Телефон: +380751020039
Сайт: limaria.com.ua";

        $contactButton = Keyboard::make()->inline()->row([
            Keyboard::inlineButton(["text" =>"Зв'язатись з нами", "url" =>"t.me/limaria_lab"]),
            Keyboard::inlineButton(["text" => "Google Maps", "url" => "https://maps.app.goo.gl/sKPMjuqpHjzQS3UB6"])
            ]);

        $this->replyWithMessage([
            "text"=>$labDescription,
            "reply_markup" => $contactButton
        ]);
    }

}
