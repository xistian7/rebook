<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "receta".
 *
 * @property int $id
 * @property int $titulo
 * @property int $subtitulo
 * @property int $descripcion_corta
 * @property int $descripcion
 * @property int $id_img_destacada
 *
 * @property Img $imgDestacada
 * @property RecetaHasCategoria[] $recetaHasCategorias
 * @property RecetaHasImg[] $recetaHasImgs
 * @property RecetaHasVideo[] $recetaHasVideos
 */
class Receta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo', 'descripcion_corta', 'descripcion', 'id_img_destacada'], 'required'],
            [['titulo', 'subtitulo', 'descripcion_corta', 'descripcion', 'id_img_destacada'], 'integer'],
            [['id_img_destacada'], 'exist', 'skipOnError' => true, 'targetClass' => Img::className(), 'targetAttribute' => ['id_img_destacada' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'subtitulo' => 'Subtitulo',
            'descripcion_corta' => 'Descripcion Corta',
            'descripcion' => 'Descripcion',
            'id_img_destacada' => 'Id Img Destacada',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImgDestacada()
    {
        return $this->hasOne(Img::className(), ['id' => 'id_img_destacada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetaHasCategorias()
    {
        return $this->hasMany(RecetaHasCategoria::className(), ['id_receta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetaHasImgs()
    {
        return $this->hasMany(RecetaHasImg::className(), ['id_receta' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRecetaHasVideos()
    {
        return $this->hasMany(RecetaHasVideo::className(), ['id_receta' => 'id']);
    }
}
