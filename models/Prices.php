<?php


namespace app\models;
 
use yii\db\ActiveRecord;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Prices extends ActiveRecord 
{
    public static function tableName()
    {
        return 'prices';
    }

    public function rules()
    {
        return [
            [['month_id', 'tonnage_id', 'raw_type_id', 'price'], 'integer'],
        ];
    }

    
    public function attributeLabels(): array
    {
        return [
            'month_id' => 'Месяц',
            'tonnage_id' => 'Тоннаж',
            'raw_type_id' => 'Тип',
        ];
    }

}
