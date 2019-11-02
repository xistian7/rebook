<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property int $id
 * @property string $nombre
 * @property string $seudonimo
 * @property string $descripci贸n
 */
class Autor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'seudonimo', 'descripci贸n'], 'required'],
            [['nombre', 'seudonimo'], 'string', 'max' => 255],
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
            'seudonimo' => 'Seudonimo',
            'descripci贸n' => 'Descripci愠n',
        ];
    }
}
