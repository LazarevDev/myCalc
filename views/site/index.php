<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
$this->title = 'My Yii Application';

use app\models\Calc;
$model = new Calc();
?>

Главная страница

<?php $form = ActiveForm::begin(['method' => 'post']); ?>


<button type="submit">Отправить</button>

<?php ActiveForm::end(); ?>


<?= $form->field($model, 'month', ['options' => ['class' => 'formLabel']])->dropDownList([
    '1' => 'Январь',
    '2' => 'Февраль',
    '3' => 'Март',
    '4' => 'Апрель',
    '5' => 'Май',
    '6' => 'Июнь',
    '7' => 'Июль',
    '8' => 'Август',
    '9' => 'Сентябрь',
    '10' => 'Октябрь',
    '11' => 'Ноябрь',
    '12' => 'Декабрь',
], ['prompt' => 'Выберите месяц...', 'id' => 'input']); ?>


<script type="text/javascript">
 document.getElementById("input").addEventListener("change", function() {
  const selectedValue = this.value;
  console.log(selectedValue);
  document.getElementById("selected-value-block").innerText = selectedValue;
});
</script>


<div id="selected-value-block">
    <p>das</p>
</div>