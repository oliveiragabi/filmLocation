<?php
/* @var $this FilmeController */
/* @var $model Filme */

$this->breadcrumbs=array(
	'Filmes'=>array('index'),
	'Create',
);

?>

<h1>Create Filme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<br>
<br>
	<div class="row">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=filme/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=filme/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>