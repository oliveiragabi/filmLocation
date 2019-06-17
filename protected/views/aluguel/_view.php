<?php
/* @var $this AluguelController */
/* @var $data Aluguel */

?>

<div class="view">
	<fieldset>
	<legend>   <b><?php echo CHtml::encode($data->getAttributeLabel('idaluguel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idaluguel), array('view', 'id'=>$data->idaluguel)); ?>
	<br />   </legend>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome do cliente')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario0->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nome do filme')); ?>:</b>
	<?php echo CHtml::encode($data->idfilme0->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->data_inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_final')); ?>:</b>
	<?php echo CHtml::encode($data->data_final); ?>
	<br />

</fieldset>

</div>
<br>