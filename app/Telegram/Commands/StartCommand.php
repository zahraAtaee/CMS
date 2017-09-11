<?php namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram\Bot\Laravel\Facades\Telegram;

class StartCommand extends Command
{
    protected $name='start';
    protected $description='شروع کار با ربات هستی ...';
    /**
     * {@inheritdoc}
     */
    public function handle($arguments)
    {

        $keyboard =
            [
                ['آخرین مقالات سایت'],
                ['آخرین ویدئو های سایت'],
                ['وبسایت بدی دارید'],

            ];

        $reply_markup=Telegram::replyKeyboardMarkup([
            'keyboard'=>$keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true
        ]);

        Telegram::sendMessage([
            'chat_id' => request('message.chat.id'),
            'text' => 'به نظر سنجی من خوش آمدید:)',
            'reply_markup' => $reply_markup
        ]);














        /*$text='به ربات من خوش اومدید...:)';
       $this->replyWithMessage(compact('text'));

      Telegram::sendMessage([
           'chat_id'=>\request('message.chat.id'),
           'text'=>'به ربات من خوش اومدید...:)'
       ]);*/
    }
}
