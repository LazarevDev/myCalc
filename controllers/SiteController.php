<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\ContactForm;
use yii\web\YiiAsset;
use yii\db\Query;

use app\models\prices;
use app\models\Months;
use app\models\RawTypes;
use app\models\Tonnages;

class SiteController extends Controller
{
    public function actionIndex(){
        $model = new Prices();

        if ($model->load(Yii::$app->request->post()) && $model->validate() && Yii::$app->request->isPjax) {

                $calculation = Prices::find()
                    ->where(['month_id' => $model->month_id])
                    ->andWhere(['raw_type_id' => $model->raw_type_id])
                    ->andWhere(['tonnage_id' => $model->tonnage_id])
                    ->one();
             
                return $this->render('index', compact('model', 'calculation'));
        }

        return $this->render('index', compact('model'));
    }
}
