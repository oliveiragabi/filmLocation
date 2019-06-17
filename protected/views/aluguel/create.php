<?php
/* @var $this AluguelController */
/* @var $model Aluguel */

$this->breadcrumbs=array(
	'Aluguels'=>array('index'),
	'Create',
);

?>

<h1>Criar novo aluguel de filme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

<br>
	<br>
	<div class="row">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=aluguel/create" class="list-group-item">Listar</a>
			<a href="/sistemalocadora/index.php?r=aluguel/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>