<?php
/* @var $this AluguelController */
/* @var $model Aluguel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluguel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
		<?php echo $form->error($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vltotal'); ?>
		<?php echo $form->textField($model,'vltotal'); ?>
		<?php echo $form->error($model,'vltotal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inicial'); ?>
		<?php echo $form->textField($model,'data_inicial'); ?>
		<?php echo $form->error($model,'data_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_final'); ?>
		<?php echo $form->textField($model,'data_final'); ?>
		<?php echo $form->error($model,'data_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qtdfilme'); ?>
		<?php echo $form->textField($model,'qtdfilme'); ?>
		<?php echo $form->error($model,'qtdfilme'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->