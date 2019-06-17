<?php
/* @var $this CategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Categorias',
);

?>
<div class="col-md-8">
<h1>Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>

<div class="col-md-4" style="margin-top: 7%;">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=categoria/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=categoria/admin" class="list-group-item">Gerenciamento</a>
		</div>
</div>
