<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leave-comment mr0"><!--leave comment-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="site-login">
                <h1><?= Html::encode($this->title) ?></h1>

                <p>Please fill out the following fields to login:</p>

                <?php $form = ActiveForm::begin([
                    'id' => 'signup-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <div class="form-group"> <!-- Обертка для Name -->
                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                </div>

                <div class="form-group" style="margin-top: 20px;"> <!-- Обертка для Email с отступом 20px -->
                    <?= $form->field($model, 'email')->textInput() ?>
                </div>

                <div class="form-group" style="margin-top: 20px;"> <!-- Обертка для Password с отступом 20px -->
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>

                <div class="col-lg-offset-1" style="color:#999;">
                    You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
                    To modify the username/password, please check out the code <code>app\models\User::$users</code>.
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <!-- Put this script tag to the <head> of your page -->

            <!-- Put this div tag to the place, where Auth block will be -->


        </div>
    </div>
</div>
