<?php
/* @var $this AluguelController */
/* @var $model Aluguel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idaluguel'); ?>
		<?php echo $form->textField($model,'idaluguel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idfilme'); ?>
		<?php echo $form->textField($model,'idfilme'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_inicial'); ?>
		<?php echo $form->textField($model,'data_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_final'); ?>
		<?php echo $form->textField($model,'data_final'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->