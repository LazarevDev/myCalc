<?php


namespace app\models;
 
use yii\db\ActiveRecord;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Month extends ActiveRecord 
{
    public static function tableName()
    {
        return 'month';
    }

    public function rules()
    {
        return [
            [['month'], 'string'],
            [['percent'], 'integer'],
        ];
    }
    
    public function attributeLabels(): array
    {
        return [
            'month' => 'Месяц',
            'percent' => 'Процент',
        ];
    }


    static function getListForSelect(){

        $model = self::find()->all();

        foreach($model as $value){
            $array[$value->id] = $value->month;
        }

        return $array;

    }

}
