<?php


namespace app\models;



use app\controllers\TelegramController;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Telegram;
use yii\db\ActiveRecord;

class Message extends ActiveRecord
{

    public static function tableName()
    {
        return 'message';
    }

    public function rules()
    {
        return [[['text'], 'required'],
            [['text'], 'string', 'max' => 255]];
    }

    public static function store()
    {
        $message=new Message();
        $post=\Yii::$app->request->post();
        $post=$post['Message']['text'];
        $message->text=$post;
        $message->save();
        $data = [];
        $data['chat_id'] = '136959136';
        $data['text'] = $post;
        TelegramController::handle($data);
    }


}