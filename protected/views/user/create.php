<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

?>

<div class="col-md-8">
<h1>Criar Cliente</h1>
<br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>


<div class="col-md-4" style="margin-top: 8%;">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=user/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=user/index" class="list-group-item">Listar</a>
			<a href="/sistemalocadora/index.php?r=user/admin" class="list-group-item">Gerenciar</a>
		</div>
	</div>