<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);


?>

<h1>Create User</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<br>
<br>
	<div class="row">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=user/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=user/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>