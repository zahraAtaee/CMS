<?php

namespace App\Http\Controllers;

use App\Article;
use App\Episode;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use BotDialogs\Dialogs;
class TelegramController extends Controller
{
    public function telegram()
    {

        Telegram::setWebhook(['url'=>'https://c39f59eb.ngrok.io/400053881:AAE8A8Z0amhX4qt2os7w4WFye1DfV1tnTxg/webhook']);


      //        return Telegram::getUpdates();
//        return Telegram::getMe();
        /*return Telegram::sendMessage([
            'chat_id'=>'126820436',
            'text'=>'سلام الهی به امید تو...'
        ]);*/


    }

    public function webhook()
    {
        Telegram::commandsHandler(true);
        switch (request('message.text')){

            case 'آخرین مقالات سایت':

                return $this->lastArticle();
                break;

            case 'آخرین ویدئو های سایت':

                return $this->LastEpisodes();
                break;

            case 'راهنمایی برای استفاده از ربات زهرا...:)':

                break;
        };


    }

    private function lastArticle()
    {
        $articles=Article::latest()->take(5)->get();
        if ($articles){

            $text="";

            foreach ($articles as $article)
            {
                $text .=$article->title."\n";
                $text .=url()->to($article->path())."\n";
            }
        }else
        {
                $text="ویدئویی ای برای نمایش وجود ندارد.";
        }
        Telegram::sendMessage([
            'chat_id' => request('message.chat.id'),
            'text' => $text,
        ]);

    }

    private function LastEpisodes()
    {
        $episodes=Episode::latest()->take(5)->get();
        if ($episodes){

            $text="";

            foreach ($episodes as $episode)
            {
                $text .=$episode->title."\n";
                $text .=url()->to($episode->path())."\n";
            }
        }else
        {
            $text="مقاله ای برای نمایش وجود ندارد.";
        }
        Telegram::sendMessage([
            'chat_id' => request('message.chat.id'),
            'text' => $text,
        ]);
    }
}
