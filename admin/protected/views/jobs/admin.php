<?php
/* @var $this JobsController */
/* @var $model Jobs */

$this->breadcrumbs = array(
    'Jobs' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Jobs', 'url' => array('index')),
    array('label' => 'Create Jobs', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jobs-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Employees</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'jobs-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'value' => '$data->job_id',
        ),
        array(
            'name' => 'title',
            'type' => 'raw',
            'value'=> 'CHtml::link($data->title, Yii::app()->createUrl("jobs/view",array("id"=>$data->job_id)))'
        ),
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'header' => 'No of Applications',
            'value' => 'JobResumes::Model()->getAppliccation($data->job_id)',
        ),
        array(
            'name' => 'job_id',
            'type' => 'raw',
            'header' => 'Lastest of Application',
            'value' => 'JobResumes::Model()->getLastestApplication($data->job_id)',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
    'itemsCssClass' => 'item-class',
));
?>
