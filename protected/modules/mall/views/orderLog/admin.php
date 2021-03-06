<?php
$this->breadcrumbs=array(
	'Order Logs'=>array('index'),
	'Manage',
);

?>

<h1>Manage Order Logs</h1>

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

<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'order-log-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'log_id',
		'order_id',
		'op_name',
        array(
            'name' => 'action_time',
            'value'=>'date("Y-m-d H:i;s",$data->action_time+8*3600)'
        ),
        array(
            'name' => 'log_text',
            'value' => '$data->showOp($data->log_id)'
        ),
        array(
            'value' => 'Tbfunction::view_log($data->log_id)',
        ),
	),
));
?>
