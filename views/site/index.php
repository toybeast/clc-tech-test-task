<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MessageForm */
/* @var $form yii\widgets\ActiveForm */


$this->title = 'My Yii Application';
?>
<div class="site-index">

    <?php $form = ActiveForm::begin([
        'action' => 'create',
    ]);
?>


    <div class="jumbotron">
        <h1>Введите сообщение</h1>
        <?= $form->field($model, 'message')->textInput(['maxlength' => true]) ?>
        <input type="text" id="username" class="form-control" name="message" value="Jon" maxlength="15">
        <p class="lead">You have successfully created your Yii-powered application.</p>
        <div class="form-group">
            <?= Html::submitButton('Сохранить', ['class' => '']) ?>
        </div>
        <?php ActiveForm::end(); ?>
        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>


    </div>
</div>
