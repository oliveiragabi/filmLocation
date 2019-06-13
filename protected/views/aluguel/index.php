<?php
/* @var $this AluguelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alugueis',
);

?>

<div class="col-md-8">
<h1>Alugueis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>


	<div class="col-md-4" style="margin-top: 7%;">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=aluguel/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=aluguel/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
