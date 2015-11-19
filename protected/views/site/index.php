<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    /*'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),*/
    'heading'=>'Welcome to Repair IT',
)); ?>

<?php $this->endWidget(); ?>

        <?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'http://www.kdpsolutions.ca/wp-content/uploads/2014/01/virtual-desktop-1170x250.jpg', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://www.kdpsolutions.ca/wp-content/uploads/2014/01/virtual-desktop-1170x250.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'http://www.kdpsolutions.ca/wp-content/uploads/2014/01/virtual-desktop-1170x250.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
)); ?>

<p>A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process.</p>

<p>A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process.</p>

<p>A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process. A bunch of information about repairs/products/ or process.</p>

<?php
$this->renderPartial('contact', array('model'=>$model))
?>