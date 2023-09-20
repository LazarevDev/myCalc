<?

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<section>
    <div class="container">
        <h2>Добавление</h2>
    </div>


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['type' => 'text']) ?>
    <?= $form->field($model, 'price')->textInput(['type' => 'text']) ?>

    <div class="good-btns form-group text-right">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</section>