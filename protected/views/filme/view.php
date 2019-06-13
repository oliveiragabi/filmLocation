<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->idfilme,
);

$this->menu=array(
	array('label'=>'List Filme', 'url'=>array('index')),
	array('label'=>'Create Filme', 'url'=>array('create')),
	array('label'=>'Update Filme', 'url'=>array('update', 'id'=>$model->idfilme)),
	array('label'=>'Delete Filme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfilme),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>View Filme #<?php echo $model->idfilme; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfilme',
		'nome',
		array(
			'label'=>'Categoria',
			'value'=>$model->idcategoria0->nome
		),
		
	),
)); ?>

<br>
<br>
