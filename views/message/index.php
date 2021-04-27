<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Message */
/* @var $form yii\widgets\ActiveForm */


$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php $form = ActiveForm::begin(['action' => 'store']);
?>

    <div class="jumbotron">
        <h3>Введите сообщение</h3>
        <?= $form->field($model, 'text')->textInput() ?>
        <div class="form-group">

            <?= Html::submitButton('Отправить сообщение', ['class' => 'btn btn-lg btn-success']) ?>
            <? ActiveForm::end(); ?>

        </div>

        <h3>Отправленные сообщения:</h3>

        <?php foreach ($messages as $mes) {?>
            <pre> <?php
           echo $mes->id . ": " . $mes->text;?>
        </pre>
        <?}?>


        </div>




  <?php  echo \yii\widgets\LinkPager::widget([
    'pagination' => $pages,
    ]); ?>

    </div>
</div>
