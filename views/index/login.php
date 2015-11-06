<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<body id="login">
<div class="container">


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-signin form-horizontal'],
        'fieldConfig' => [
//            'template' => '{input}'
            'template' => "<div class=\"col-lg-12\">{input}</div>",
            'labelOptions' => ['class' => 'sr-only'],
        ],
    ]); ?>
    <h2 class="form-signin-heading">Please sign in</h2>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'rememberMe')->checkbox([
        'template' => '<div class="col-lg-12">{input} {label}</div>',
    ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn', 'name' => 'login-button']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div> <!-- /container -->
</body>
