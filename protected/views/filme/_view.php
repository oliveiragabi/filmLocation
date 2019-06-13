<?php
/* @var $this FilmeController */
/* @var $data Filme */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfilme')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfilme), array('view', 'id'=>$data->idfilme)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoria0->nome); ?>
	<br />
</div>
<br>