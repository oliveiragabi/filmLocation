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

		<?php echo $form->labelEx($model,'idusuario', array(
			'class'=>'col-2 control-label'
		)); ?>
		<?php $user = User::model()->findAll();
        $list = CHtml::listData($user, 'idusuario', 'nome');
        ?>
        <div class="col-10">
        <?php
		echo $form->dropDownList($model,'idusuario', $list, array(
			'empty'=>'Selecione',
			'class'=>'form-control'
		)); ?>
	</div>
		<?php echo $form->error($model,'idusuario'); ?>
</div>

<div class="row">

		<?php echo $form->labelEx($model,'idfilme', array(
			'class'=>'col-2 control-label'
		)); ?>
		<?php $filme = Filme::model()->findAll();
        $list = CHtml::listData($filme, 'idfilme', 'nome');
        ?>
        <div class="col-10">
        <?php
		echo $form->dropDownList($model,'idfilme', $list, array(
			'empty'=>'Selecione',
			'class'=>'form-control'
		)); ?>
	</div>
		<?php echo $form->error($model,'idfilme'); ?>
</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inicial'); ?>
		<?php echo $form->dateTimeLocalField($model,'data_inicial'); ?>
		<?php echo $form->error($model,'data_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_final'); ?>
		<?php echo $form->dateTimeLocalField($model,'data_final'); ?>
		<?php echo $form->error($model,'data_final'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->