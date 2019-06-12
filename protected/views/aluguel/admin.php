<?php
/* @var $this AluguelController */
/* @var $model Aluguel */

$this->breadcrumbs=array(
	'Aluguels'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aluguel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Aluguels</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aluguel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idaluguel',
		'iduser',
		'vltotal',
		'data_inicial',
		'data_final',
		'qtdfilme',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<br>
<br>
	<div class="col-10">
		<div class="list-group" >
			<a href="/sistemalocadora/index.php?r=aluguel/create" class="list-group-item">Criar</a>
			<a href="/sistemalocadora/index.php?r=aluguel/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
