<?php
/* @var $this FilmeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Filmes',
);
?>

<h1>Lista de Filmes</h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=filme/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=filme/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>
