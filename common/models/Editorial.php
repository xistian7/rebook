<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "editorial".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripción
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
            [['nombre', 'descripción'], 'required'],
            [['nombre'], 'string', 'max' => 255],
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
            'descripción' => 'Descripci�n',
        ];
    }
}
