<?php


namespace app\models;
 
use yii\db\ActiveRecord;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Tonnage extends ActiveRecord 
{
    public static function tableName()
    {
        return 'tonnage';
    }

    public function rules()
    {
        return [
            [['count'], 'integer'],
        ];
    }

    
    public function attributeLabels(): array
    {
        return [
            'count' => 'Кол-во тонн',
        ];
    }

    static function getListForSelect(){
        $model = self::find()->all();

        foreach($model as $value){
            $array[$value->count] = $value->count;
        }

        return $array;
    }

}
