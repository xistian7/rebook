<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "editorial".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripci贸n
 */
class Editorial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'editorial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripci贸n'], 'required'],
            [['nombre'], 'string', 'max' => 255],
            [['descripci贸n'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripci贸n' => 'Descripci愠n',
        ];
    }
}
