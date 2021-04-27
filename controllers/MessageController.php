<?php


namespace app\controllers;


use app\models\Message;
use yii\data\Pagination;
use yii\web\Controller;


class MessageController extends Controller
{

    public function actionIndex()
    {
        $query=$message=Message::find();
        $countQuery = unserialize(serialize($query));
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        $messages = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $model=new Message();
        return $this->render('index', [
            'model' => $model,
            'messages' => $messages,
            'pages' => $pages,
        ]);
    }

    public function actionStore()
    {

        Message::store();
        $this->redirect('index');

    }

}