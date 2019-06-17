<?php
/* @var $this AluguelController */
/* @var $model Aluguel */

$this->breadcrumbs=array(
	'Alugueis'=>array('index'),
	$model->idaluguel,
);

$this->menu=array(
	array('label'=>'List Aluguel', 'url'=>array('index')),
	array('label'=>'Create Aluguel', 'url'=>array('create')),
	array('label'=>'Update Aluguel', 'url'=>array('update', 'id'=>$model->idaluguel)),
	array('label'=>'Delete Aluguel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idaluguel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Aluguel', 'url'=>array('admin')),
);
?>

<h1>View Aluguel #<?php echo $model->idaluguel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idaluguel',
		array(
			'label'=>'Cliente',
			'value'=>$model->idusuario0->nome
		),
		array(
			'label'=>'Filme escolhido',
			'value'=>$model->idfilme0->nome
		),
		'data_inicial',
		'data_final',
	),
)); ?>
<br>
<br>
