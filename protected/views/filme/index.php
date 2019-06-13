<?php
/* @var $this FilmeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Filmes',
);

?>
<div class="col-md-8">

<h1>Filmes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>

<br>
<br>

	<div class="col-md-4" style="margin-top: 2%;">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=filme/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=filme/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
