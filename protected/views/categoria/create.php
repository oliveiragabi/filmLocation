<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Create',
);

?>

<div class="col-md-8">
<h1>Criar nova categoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

<div class="col-md-4" style="margin-top: 7%;">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=categoria/index" class="list-group-item">Listar</a>
			<a href="/sistemalocadora/index.php?r=categoria/admin" class="list-group-item">Gerenciamento</a>
		</div>
</div>