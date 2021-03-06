<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use common\widgets\datepicker\DatePicker;
use common\enum\ContentEnum;

?>

<div class="search-form">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'create_time',['options'=>['class'=>'control-group span8']])->widget(DatePicker::className(),[
        'options'=>[
            'istime'=>true,
            'format'=>'YYYY-MM-DD',
            'readonly'=>true
        ]
    ])
    ?>

    <?= $form->field($model, 'create_time_end',['options'=>['class'=>'control-group span8']])->widget(DatePicker::className(),[
        'options'=>[
            'istime'=>true,
            'format'=>'YYYY-MM-DD',
            'readonly'=>true
        ]
    ])
    ?>

    <div class="row">
        <?= $form->field($model, 'type',['options'=>['class'=>'control-group span8']])->dropDownList(ContentEnum::getAgreementType(),['prompt'=>'请选择']) ?>
    </div>

    <div class="form-group search-button">
        <?= Html::submitButton(Yii::t('app', '检索'), ['class' => 'btn btn-sm btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', '重置'), ['class' => 'btn btn-sm btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
