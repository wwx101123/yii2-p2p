<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\enum\ProductEnum;
use common\enum\VouchersEnum;
use common\widgets\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\QfbVouchers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="update-form">

    <?php $form = ActiveForm::begin([
        'id' => 'member-form',
        'options' => ['class' => 'form-horizontal bui-form-horizontal bui-form bui-form-field-container'], 
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"controls\">{input}<span class=\"valid-text\">{error}</span></div>",
            'labelOptions' => ['class' => 'lable-text control-label'],
            'errorOptions'=>['class'=>'valid-text']
        ],
    ]); ?>

    
    
    
<div class="row">
    <?= $form->field($model, 'name',['options'=>['class'=>'control-group span8']])->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'type',['options'=>['class'=>'control-group span8']])->dropDownList(VouchersEnum::getRule(),['prompt'=>'请选择']) ?>
    <?= $form->field($model, 'valid_days',['options'=>['class'=>'control-group span8']])->textInput() ?>
    <?= $form->field($model, 'money',['options'=>['class'=>'control-group span8']])->textInput(['maxlength' => true]) ?>
</div>
<div class="row">
    <?= $form->field($model, 'use_money',['options'=>['class'=>'control-group span8']])->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'use_members',['options'=>['class'=>'control-group span8','style'=>'width:620px']])
    ->checkboxList($members,['style'=>'margin-left: 10px;']) ?>
    
    <?//= $form->field($model, 'use_type',['options'=>['class'=>'control-group span8']])->dropDownList(ProductEnum::getType(),['prompt'=>'请选择']) ?>
</div>
<div class="row">
    
    <?= $form->field($model, 'start_time',['options'=>['class'=>'control-group span8']])->widget(DatePicker::className(),[
        'options'=>[
            'istime'=>true,
            'format'=>'YYYY-MM-DD',
            'readonly'=>true
        ]
    ]) ?>
    <?= $form->field($model, 'end_time',['options'=>['class'=>'control-group span8']])->widget(DatePicker::className(),[
        'options'=>[
            'istime'=>true,
            'format'=>'YYYY-MM-DD',
            'readonly'=>true
        ]
    ]) ?>
    <?= $form->field($model, 'status',['options'=>['class'=>'control-group span8']])->dropDownList(VouchersEnum::getStatus(),['prompt'=>'请选择']) ?>
</div>


<div class="row-btn">
    <div class="btn-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '创建') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    
    </div>
     <div class="btn-group">
    <?= Html::a(Yii::t('app', '返回列表'), ['index'], ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
$(function(){
	$('#qfbvouchers-use_members input:first').click(function(){
		
		if($(this).is(':checked')){
			$('#qfbvouchers-use_members input').each(function(){
				var v = $(this)[0];
			    v.checked = true;
			});
		}else{
		    $('#qfbvouchers-use_members input').removeAttr("checked");
		}
	});
	
});
</script>
