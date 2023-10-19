<?php

namespace app\controllers;

use app\models\Months;
use app\models\Tonnages;
use app\models\RawTypes;
use app\models\Prices;
use yii\rest\Controller;

class ApiController extends Controller{
    public function actionGetData(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        
        if(\Yii::$app->request->get()){
            if(isset($_GET['type'])){
                if($_GET['type'] == 'tonnage'){
                    $tonnages = Tonnages::find()->select('value')->all();
                    foreach($tonnages as $key){
                        $result[] = $key->value;
                    }
                }

                if($_GET['type'] == 'month'){
                    $months = Months::find()->select('name')->all();
                    foreach($months as $key){
                        $result[] = $key->name;
                    }
                }

                if($_GET['type'] == 'type'){
                    $rawTypes = RawTypes::find()->select('name')->all();
                    foreach($rawTypes as $key){
                        $result[] = $key->name;
                    }
                }

                return $result;
            }elseif(!isset($_GET['type'])){
                throw new \yii\web\BadRequestHttpException("Bad Request");
            }
        }
    }

    public function actionCalculatePrice(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $request = \Yii::$app->request;

        if($request->isPost && $request->getRawBody()) {
            $data = json_decode($request->getRawBody(), true);
            if((isset($data['type']) && isset($data['month']) && isset($data['tonnage']))){
                $result['price'] = Prices::find()

                    ->leftJoin('months', '`prices`.`month_id` = `months`.`id`')
                    ->where(['months.name' => $data['month']])

                    ->leftJoin('tonnages', '`prices`.`tonnage_id` = `tonnages`.`id`')
                    ->andWhere(['tonnages.value' => $data['tonnage']])

                    ->leftJoin('raw_types', '`prices`.`raw_type_id` = `raw_types`.`id`')
                    ->andWhere(['raw_types.name' => $data['type']])

                    ->all();
                        
                return $result;
            }
        }
        throw new \yii\web\BadRequestHttpException("Bad Request");
    }
}
