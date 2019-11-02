<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "img".
 *
 * @property int $id
 * @property int $src
 * @property int $nombre
 * @property int $descripcion
 *
 * @property Receta[] $recetas
 * @property RecetaHasImg[] $recetaHasImgs
 */
class Img extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['src', 'nombre', 'descripcion'], 'required'],
            [['src', 'nombre', 'descripcion'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetas()
    {
        return $this->hasMany(Receta::className(), ['id_img_destacada' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetaHasImgs()
    {
        return $this->hasMany(RecetaHasImg::className(), ['id_imagen' => 'id']);
    }
}
