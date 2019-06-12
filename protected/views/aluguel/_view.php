<?php
/* @var $this AluguelController */
/* @var $data Aluguel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idaluguel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idaluguel), array('view', 'id'=>$data->idaluguel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vltotal')); ?>:</b>
	<?php echo CHtml::encode($data->vltotal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_inicial')); ?>:</b>
	<?php echo CHtml::encode($data->data_inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_final')); ?>:</b>
	<?php echo CHtml::encode($data->data_final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qtdfilme')); ?>:</b>
	<?php echo CHtml::encode($data->qtdfilme); ?>
	<br />


</div>