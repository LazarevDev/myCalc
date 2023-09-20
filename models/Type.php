<?php


namespace app\models;
 
use yii\db\ActiveRecord;
 
/**
 * ContactForm is the model behind the contact form.
 */
class Type extends ActiveRecord 
{
    public static function tableName()
    {
        return 'type';
    }

    public function rules()
    {
        return [
            [['name'], 'string'],
            [['price'], 'integer'],
        ];
    }
    
    public function attributeLabels(): array
    {
        return [
            'name' => 'Название',
            'price' => 'Цена за 1 тонну',
        ];
    }

    
    static function getListForSelect(){
        $model = self::find()->all();

        foreach($model as $value){
            $array[$value->name] = $value->name;
        }

        return $array;
    }


}
