<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<h4>Here's link for <?php echo CHtml::link('CRUD Samples', array('sample/index'))  ?> Demo</h4>
