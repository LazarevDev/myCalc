<?

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'count')->textInput(['type' => 'integer']) ?>

    <div class="good-btns form-group text-right">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
        <?= \yii\helpers\Html::a( 'Вернуться назад', Yii::$app->request->referrer , ['class' => 'back']);?>
    </div>

    <?php ActiveForm::end(); ?>



</section>