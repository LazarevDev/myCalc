<?

// use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

use app\models\Months;
use app\models\Tonnages;
use app\models\RawTypes;


?>
<section class="sectionCalculator">
    <div class="container">
        <?php Pjax::begin() ?>
            <div class="calculatorContainer">
                <div class="calc">
                    <div class="calcText">
                        <h2>Калькулятор доставки</h2>

                        <p>Мы предлагаем современное решение для расчета стоимости наших услуг доставки. Теперь любой клиент с договором или без него, может в течение всего 1 минуты узнать стоимость доставки по любому региону России</p>
                    </div>
                        <?php $form = ActiveForm::begin([
                            'options' => [
                                'class' => 'form-horizontal',
                                'data-pjax' => true,
                            ],
                        ]); ?>
                
                            <?= $form->field($model, 'month_id', ['options' => ['class' => 'formLabel']])
                                ->dropDownList(Months::getListForSelect(), 
                                ['prompt' => 'Выберите месяц...', 'id' => 'monthInput']); ?>

                            <?= $form->field($model, 'raw_type_id', ['options' => ['class' => 'formLabel']])
                                    ->dropDownList(RawTypes::getListForSelect(), 
                                    ['prompt' => 'Выберите тип...', 'id' => 'typeInput']); ?>

                            <?= $form->field($model, 'tonnage_id', ['options' => ['class' => 'formLabel']])
                                    ->dropDownList(Tonnages::getListForSelect(), 
                                    ['prompt' => 'Выберите тип...', 'id' => 'tonnageInput']); ?>

                            <?= Html::submitButton('Рассчитать', ['class' => 'btn btn-info']) ?>

                        <?php ActiveForm::end(); ?>
                </div>
    
                <div class="calcDisplay">
                    <div class="displayText">
                        <h2>Итого</h2>
                        <p>Расчеты доставки</p>
                    </div>

                    <div class="displayContainer">
                        <div class="displayBlock">
                            <p>Выбранный месяц</p>
                            <h3 id="month">-</h3>
                        </div>

                        <div class="displayBlock">
                            <p>Тип сырья</p>
                            <h3 id="type">-</h3>
                        </div>

                        <div class="displayBlock">
                            <p>Тоннаж</p>
                            <h3 id="tonnage">-</h3>
                        </div>
                    </div>

                    <div class="center">
                        <div class="displayHr"></div>
                    </div>

                    <div class="displayFooter">
                        <h3>
                            <?php if(!empty($calculation->price)){ 
                                echo number_format($calculation->price)."₽"; 
                            }?>
                        </h3>
                    </div>
                </div>
            </div>
        <?php Pjax::end() ?>
    </div>
</section>

<script src="js/index.js"></script>
