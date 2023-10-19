<?php

namespace app\models;

use yii\base\Model;

class GetData extends Model{
    public $type;
    public $month;
    public $tonnage;

    public function getPrices(){
        $prices = require __DIR__ . '/../config/prices.php';
        return $prices;
    }
}
