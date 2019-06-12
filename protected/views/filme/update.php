<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	$model->idfilme=>array('view','id'=>$model->idfilme),
	'Update',
);

$this->menu=array(
	array('label'=>'List Filme', 'url'=>array('index')),
	array('label'=>'Create Filme', 'url'=>array('create')),
	array('label'=>'View Filme', 'url'=>array('view', 'id'=>$model->idfilme)),
	array('label'=>'Manage Filme', 'url'=>array('admin')),
);
?>

<h1>Update Filme <?php echo $model->idfilme; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>