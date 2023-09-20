<?

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<section>
    <div class="container">
        <h2>Редактирование: <?=$model->month?></h2>

        <div class="form">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'percent')->textInput(['type' => 'text']) ?>

            <div class="good-btns form-group text-right">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
                <?= \yii\helpers\Html::a( 'Вернуться назад', Yii::$app->request->referrer , ['class' => 'back']);?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>