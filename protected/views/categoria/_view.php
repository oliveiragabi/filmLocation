<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>

<div class="view">
<fieldset>
	<legend> <b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br /></legend>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcategoria), array('view', 'id'=>$data->idcategoria)); ?>
	<br />


</fieldset>
</div>

<br>