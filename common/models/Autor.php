<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property int $id
 * @property string $nombre
 * @property string $seudonimo
 * @property string $descripción
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
            [['nombre', 'seudonimo', 'descripción'], 'required'],
            [['nombre', 'seudonimo'], 'string', 'max' => 255],
            [['descripción'], 'string', 'max' => 2000],
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
            'descripción' => 'Descripci�n',
        ];
    }
}
