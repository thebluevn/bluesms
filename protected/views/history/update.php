<?php
/* @var $this HistoryController */
/* @var $model History */

$this->breadcrumbs=array(
	'Histories'=>array('index'),
	$model->history_id=>array('view','id'=>$model->history_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List History', 'url'=>array('index')),
	array('label'=>'Create History', 'url'=>array('create')),
	array('label'=>'View History', 'url'=>array('view', 'id'=>$model->history_id)),
	array('label'=>'Manage History', 'url'=>array('admin')),
);
?>

<h1>Update History <?php echo $model->history_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>