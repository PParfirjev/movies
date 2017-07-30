<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Film */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="film-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->widget(\yii\jui\DatePicker::classname(), [
        //'language' => 'ru',
        'dateFormat' => 'yyyy',
    ])
    ?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <?= $form->field($model, 'budget')->textInput() ?>

    <?= $form->field($model, 'release_date')->widget(\yii\jui\DatePicker::classname(), [
        //'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ])
    ?>

    <?= $form->field($model, 'genre')->dropDownList(
        ['Военный' => 'Военный',
            'Драма' => 'Драма',
            'Исторический' => 'Исторический',
            'Фантастика' => 'Фантастика',
            'Боевик' => 'Боевик',
            'Триллер' => 'Триллер',
            'Приключения' => 'Приключения',
            'Мультфильм' => 'Мультфильм',
            'Комедия' => 'Комедия',
            'Семейный' => 'Семейный',

        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
