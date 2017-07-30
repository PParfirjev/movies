<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property double $rating
 * @property integer $budget
 * @property string $release_date
 * @property string $genre
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'min' => 2, 'max' => 255],
            [['year'], 'date', 'format' => 'yyyy' /*, 'min' => 0, 'max' => 2017*/ ],
            [['year'], 'in', 'range'=>range(1900, 2017)],
            [['rating'], 'number', 'min' => 0, 'max' => 10],
            [['budget'], 'integer', 'min' => 0],
            [['genre'], 'string', 'max' => 128],
            [['release_date'], 'date', 'format' => 'yyyy-MM-dd'],
            [['year', 'rating', 'budget', 'release_date'], 'default', 'value' => null],
            [['name','year','rating','genre','budget','release_date'], 'trim'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'year' => 'Year',
            'rating' => 'Rating',
            'budget' => 'Budget',
            'release_date' => 'Release Date',
            'genre' => 'Genre',
        ];
    }
}
