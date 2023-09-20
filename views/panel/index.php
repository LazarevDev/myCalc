<?php 
use yii\grid\GridView;
use yii\helpers\Html;

?>


<section>
    <div class="container">
        <div class="panel">
            <div class="panelList">
                <a href="index.php?r=panel/type-create" class="btn">Добавить тип</a>

                <h2>Тип сырья</h2>

                <?= GridView::widget([
                    'dataProvider' => $dataProviderType,
                    'columns' => [
                        'name',
                        'price',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{type-update} {type-delete}',
                            'buttons' => [
                                'type-update' => function ($url, $model) {
                                    return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M498 142l-46 46c-5 5-13 5-17 0L324 77c-5-5-5-12 0-17l46-46c19-19 49-19 68 0l60 60c19 19 19 49 0 68zm-214-42L22 362 0 484c-3 16 12 30 28 28l122-22 262-262c5-5 5-13 0-17L301 100c-4-5-12-5-17 0zM124 340c-5-6-5-14 0-20l154-154c6-5 14-5 20 0s5 14 0 20L144 340c-6 5-14 5-20 0zm-36 84h48v36l-64 12-32-31 12-65h36v48z"></path></svg>', $url);
                                },

                                'type-delete' => function ($url, $model) {
                                    return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:.875em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M32 464a48 48 0 0048 48h288a48 48 0 0048-48V128H32zm272-256a16 16 0 0132 0v224a16 16 0 01-32 0zm-96 0a16 16 0 0132 0v224a16 16 0 01-32 0zm-96 0a16 16 0 0132 0v224a16 16 0 01-32 0zM432 32H312l-9-19a24 24 0 00-22-13H167a24 24 0 00-22 13l-9 19H16A16 16 0 000 48v32a16 16 0 0016 16h416a16 16 0 0016-16V48a16 16 0 00-16-16z"></path></svg>', $url);
                                },
                            ]
                    
                        ],
                    ],
                ]); ?>
            </div>

            <div class="panelList">
                <a href="index.php?r=panel/tonnage-create" class="btn">Добавить тоннаж</a>

                <h2>Тоннаж</h2>

                <?= GridView::widget([
                    'dataProvider' => $dataProviderTonnage,
                    'columns' => [
                        'count',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{tonnage-update} {tonnage-delete}',
                            'buttons' => [
                                'tonnage-update' => function ($url, $model) {
                                    return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M498 142l-46 46c-5 5-13 5-17 0L324 77c-5-5-5-12 0-17l46-46c19-19 49-19 68 0l60 60c19 19 19 49 0 68zm-214-42L22 362 0 484c-3 16 12 30 28 28l122-22 262-262c5-5 5-13 0-17L301 100c-4-5-12-5-17 0zM124 340c-5-6-5-14 0-20l154-154c6-5 14-5 20 0s5 14 0 20L144 340c-6 5-14 5-20 0zm-36 84h48v36l-64 12-32-31 12-65h36v48z"></path></svg>', $url);
                                },

                                'tonnage-delete' => function ($url, $model) {
                                    return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:.875em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M32 464a48 48 0 0048 48h288a48 48 0 0048-48V128H32zm272-256a16 16 0 0132 0v224a16 16 0 01-32 0zm-96 0a16 16 0 0132 0v224a16 16 0 01-32 0zm-96 0a16 16 0 0132 0v224a16 16 0 01-32 0zM432 32H312l-9-19a24 24 0 00-22-13H167a24 24 0 00-22 13l-9 19H16A16 16 0 000 48v32a16 16 0 0016 16h416a16 16 0 0016-16V48a16 16 0 00-16-16z"></path></svg>', $url);
                                },
                            ]
                    
                        ],
                    ],
                ]); ?>
            </div>

            <div class="panelList">

                <h2>Месяца</h2>

                <?= GridView::widget([
                    'dataProvider' => $dataProviderMonth,
                    'columns' => [
                        'month',
                        'percent',
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => '{month-update}',
                            'buttons' => [
                                'month-update' => function ($url, $model) {
                                    return Html::a('<svg aria-hidden="true" style="display:inline-block;font-size:inherit;height:1em;overflow:visible;vertical-align:-.125em;width:1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M498 142l-46 46c-5 5-13 5-17 0L324 77c-5-5-5-12 0-17l46-46c19-19 49-19 68 0l60 60c19 19 19 49 0 68zm-214-42L22 362 0 484c-3 16 12 30 28 28l122-22 262-262c5-5 5-13 0-17L301 100c-4-5-12-5-17 0zM124 340c-5-6-5-14 0-20l154-154c6-5 14-5 20 0s5 14 0 20L144 340c-6 5-14 5-20 0zm-36 84h48v36l-64 12-32-31 12-65h36v48z"></path></svg>', $url);
                                },
                            ]
                    
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</section>