<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use app\models\ContactForm;
use yii\data\ActiveDataProvider;

use app\models\Month;
use app\models\Tonnage;
use app\models\Type;


class PanelController extends Controller
{
    public function actionIndex(){

        $dataProviderTonnage = new ActiveDataProvider([
            'query' => Tonnage::find(),
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort'=> ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        $dataProviderType = new ActiveDataProvider([
            'query' => Type::find(),
            'pagination' => [
                'pageSize' => 6,
            ],
            'sort'=> ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        $dataProviderMonth = new ActiveDataProvider([
            'query' => Month::find(),
            'sort'=> ['defaultOrder' => ['id' => SORT_DESC]]
        ]);

        return $this->render('index', compact('dataProviderTonnage', 'dataProviderType', 'dataProviderMonth'));
    }

    // Тоннаж: добавление

    public function actionTonnageCreate(){
        $model = new Tonnage();

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('tonnage/create', [
            'model' => $model,
        ]);
    }

    // Тоннаж: редактирование

    public function actionTonnageUpdate($id){
        $model = Tonnage::findOne($id);

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('tonnage/update', [
            'model' => $model,
        ]);
    }


    // Тип сырья: добавление

    public function actionTypeCreate(){
        $model = new Type();

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('type/create', [
            'model' => $model,
        ]);
    }

      // Тип сырья: редактировать

    public function actionTypeUpdate($id){
        $model = Type::findOne($id);

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('type/update', [
            'model' => $model,
        ]);
    }

    // Месяца: редактировать

    public function actionMonthUpdate($id){
        $model = Month::findOne($id);

        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('month/update', [
            'model' => $model,
        ]);
    }


    

}
