<?

// use yii\bootstrap\ActiveForm;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;

use app\models\Month;
use app\models\Tonnage;
use app\models\Type;


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
                            'id' => 'test-form',
                            'options' => [
                                'class' => 'form-horizontal',
                                'data-pjax' => true,
                            ],
                            'fieldConfig' => [
                                'template' => '<div class="col-md-1">{label}</div><div class="col-md-5">{input}</div><div class="col-md-6">{error}</div>',
                            ],
                        ]); ?>

                
                            <?= $form->field($model, 'month', ['options' => ['class' => 'formLabel']])
                                ->dropDownList(Month::getListForSelect(), 
                                ['prompt' => 'Выберите месяц...', 'id' => 'monthInput']); ?>

                            <?= $form->field($model, 'type', ['options' => ['class' => 'formLabel']])
                                    ->dropDownList(Type::getListForSelect(), 
                                    ['prompt' => 'Выберите тип...', 'id' => 'typeInput']); ?>

                            <?= $form->field($model, 'tonnage', ['options' => ['class' => 'formLabel']])
                                    ->dropDownList(Tonnage::getListForSelect(), 
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
                        <h3><?php if(!empty($calculation)){ echo number_format($calculation)."₽"; }?></h3>
                    </div>
                </div>
            </div>
        <?php Pjax::end() ?>

    </div>
</section>


<script type="text/javascript">
    document.getElementById("monthInput").addEventListener("change", function() {
        let selectedValue = this.value;

        const arr = new Map([
            ['1', 'Январь'],
            ['2', 'Февраль'],
            ['3', 'Март'],
            ['4', 'Апрель'],
            ['5', 'Май'],
            ['6', 'Июнь'],
            ['7', 'Июль'],
            ['8', 'Август'],
            ['9', 'Сентябрь'],
            ['10', 'Октябрь'],
            ['11', 'Ноябрь'],
            ['12', 'Декабрь'],
        ]);

        for (let pair of arr.entries()) {
            if(pair[0] == selectedValue){
                selectedValue = pair[1];
            }
        }

        document.getElementById("month").innerText = selectedValue;
    });

    document.getElementById("typeInput").addEventListener("change", function() {
        let selectedValue = this.value;
        document.getElementById("type").innerText = selectedValue;
    });

    document.getElementById("tonnageInput").addEventListener("change", function() {
        let selectedValue = this.value;
        document.getElementById("tonnage").innerText = selectedValue;
    });





</script>