<?php
/* @var $this CategoriaController */
/* @var $model Categoria */

$this->breadcrumbs=array(
	'Categorias'=>array('index'),
	'Create',
);

?>

<h1>Create Categoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<br>
<br>
	<div class="row">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=categoria/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=categoria/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>