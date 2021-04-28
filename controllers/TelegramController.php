<?php
namespace app\controllers;
use Longman\TelegramBot\Exception\TelegramException;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use yii\web\Controller;


class TelegramController extends Controller

{

    protected $telegram;
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
        $bot_api_key='1726121459:AAHWksRVd4r3Rlt-d-T_Q8TQkiKMIS6BzIY';
        $bot_username='clctechtesttask2_bot';

        try {

            $this->telegram = new Telegram($bot_api_key, $bot_username);
            $this->telegram->handle();
            $result = Request::sendMessage($data);

        } catch (TelegramException $e) {}
    }



    public static function handle($data)
    {
        $obj = new TelegramController($data);
        $result = Request::sendMessage($data);

    }
}




