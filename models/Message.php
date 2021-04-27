<?php


namespace app\models;



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
        $message->text=$post['Message']['text'];
        $message->save();
    }


}