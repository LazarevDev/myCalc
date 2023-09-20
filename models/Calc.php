<?php


namespace app\models;
 
use yii\db\ActiveRecord;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Calc extends ActiveRecord 
{
    public static function tableName()
    {
        return 'calc';
    }

    public function rules()
    {
        return [
            [['tonnage', 'type', 'month'], 'string'],
        ];
    }

    
    public function attributeLabels(): array
    {
        return [
            'type' => 'Тип',
            'month' => 'Месяц',
            'tonnage' => 'Тоннаж',
        ];
    }

}
