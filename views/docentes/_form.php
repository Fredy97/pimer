<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Docentes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="docentes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'paterno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'materno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nu_genero')->textInput() ?>

    <?= $form->field($model, 'nu_grupo')->textInput() ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
