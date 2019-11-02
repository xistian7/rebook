<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $isbn
 * @property string $codigo_barras
 * @property int $id_editorial
 * @property string $edicion
 * @property double $precio_compra
 * @property double $precio_venta
 * @property int $id_estado_libro
 * @property int $id_language
 * @property int $publicado_web
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo', 'id_editorial', 'precio_venta', 'id_estado_libro', 'id_language', 'publicado_web'], 'required'],
            [['id_editorial', 'id_estado_libro', 'id_language', 'publicado_web'], 'integer'],
            [['precio_compra', 'precio_venta'], 'number'],
            [['titulo', 'subtitulo'], 'string', 'max' => 2000],
            [['isbn', 'codigo_barras', 'edicion'], 'string', 'max' => 255],
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
            'isbn' => 'Isbn',
            'codigo_barras' => 'Codigo Barras',
            'id_editorial' => 'Id Editorial',
            'edicion' => 'Edicion',
            'precio_compra' => 'Precio Compra',
            'precio_venta' => 'Precio Venta',
            'id_estado_libro' => 'Id Estado Libro',
            'id_language' => 'Id Language',
            'publicado_web' => 'Publicado Web',
        ];
    }
}
