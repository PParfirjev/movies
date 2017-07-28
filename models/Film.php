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
            [['year'], 'integer'],
            [['rating'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['genre', 'budget', 'release_date'], 'string', 'max' => 128],
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
