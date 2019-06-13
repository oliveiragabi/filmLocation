<?php
/* @var $this FilmeController */
/* @var $model Filme */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filme-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

<div class="row">

		<?php echo $form->labelEx($model,'idcategoria', array(
			'class'=>'col-2 control-label'
		)); ?>
		<?php $cat = Categoria::model()->findAll();
        $list = CHtml::listData($cat, 'idcategoria', 'nome');
        ?>
        <div class="col-10">
        <?php
		echo $form->dropDownList($model,'idcategoria', $list, array(
			'empty'=>'Selecione',
			'class'=>'form-control'
		)); ?>
	</div>
		<?php echo $form->error($model,'idcategoria'); ?>
</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->