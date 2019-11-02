<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Book;

/**
 * BookSearch represents the model behind the search form of `common\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_editorial', 'id_estado_libro', 'id_language', 'publicado_web'], 'integer'],
            [['titulo', 'subtitulo', 'isbn', 'codigo_barras', 'edicion'], 'safe'],
            [['precio_compra', 'precio_venta'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Book::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_editorial' => $this->id_editorial,
            'precio_compra' => $this->precio_compra,
            'precio_venta' => $this->precio_venta,
            'id_estado_libro' => $this->id_estado_libro,
            'id_language' => $this->id_language,
            'publicado_web' => $this->publicado_web,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'subtitulo', $this->subtitulo])
            ->andFilterWhere(['like', 'isbn', $this->isbn])
            ->andFilterWhere(['like', 'codigo_barras', $this->codigo_barras])
            ->andFilterWhere(['like', 'edicion', $this->edicion]);

        return $dataProvider;
    }
}
