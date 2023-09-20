<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\ContactForm;
use yii\web\YiiAsset;

use app\models\Calc;
use app\models\Month;
use app\models\Type;
use app\models\Tonnage;


class MainController extends Controller
{

    public function actionIndex(){
        $model = new Calc();
        $post = Yii::$app->request->post();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            // Действия при успешной валидации формы
            if (Yii::$app->request->isPjax) {

                $month = Month::find()->where(['id' => $model->month])->one();
                $type = Type::find()->where(['name' => $model->type])->one();
                $tonnage = Tonnage::find()->where(['count' => $model->tonnage])->one();
    
                if($month->percent <= 0){
                    $calculation = $type->price * $tonnage->count;
                }else{
                    $calculation = ($type->price * $tonnage->count) + (($type->price * $tonnage->count * $month->percent) / 100);
                }

    
             
                // Pjax::reload(['container' => '#my-pjax-container']);
                return $this->render('index', compact('model', 'calculation'));
            }
        }

        

        return $this->render('index', compact('model'));
    }
    

}
