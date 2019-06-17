<?php
/* @var $this AluguelController */
/* @var $model Aluguel */

$this->breadcrumbs=array(
	'Aluguels'=>array('index'),
	$model->idaluguel=>array('view','id'=>$model->idaluguel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aluguel', 'url'=>array('index')),
	array('label'=>'Create Aluguel', 'url'=>array('create')),
	array('label'=>'View Aluguel', 'url'=>array('view', 'id'=>$model->idaluguel)),
	array('label'=>'Manage Aluguel', 'url'=>array('admin')),
);
?>

<h1>Update Aluguel <?php echo $model->idaluguel; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>