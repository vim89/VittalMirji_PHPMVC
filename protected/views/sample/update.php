<?php
/* @var $this SampleController */
/* @var $model Sample */

$this->breadcrumbs=array(
	'Samples'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sample', 'url'=>array('index')),
	array('label'=>'Create Sample', 'url'=>array('create')),
	array('label'=>'View Sample', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Sample', 'url'=>array('admin')),
);
?>

<h1>Update Sample <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>