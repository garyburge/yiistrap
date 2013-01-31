<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Yiistrap <small>Twitter Bootstrap for Yii</small></h1>

<div class="buttons">
	<h3>Buttons</h3>

	<h5>Button styles</h5>

	<div style="margin-bottom: 20px;">
		<?php echo TbHtml::button('Default'); ?>
		<?php echo TbHtml::button('Primary',array('style'=>'primary')); ?>
		<?php echo TbHtml::button('Danger',array('style'=>'danger')); ?>
		<?php echo TbHtml::button('Warning',array('style'=>'warning')); ?>
		<?php echo TbHtml::button('Success',array('style'=>'success')); ?>
		<?php echo TbHtml::button('Info',array('style'=>'info')); ?>
		<?php echo TbHtml::button('Inverse',array('style'=>'inverse')); ?>
		<?php echo TbHtml::button('Link',array('style'=>'link')); ?>
	</div>

	<h5>Button sizes</h5>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::button('Large button',array('style'=>'primary','size'=>'large')); ?>
		<?php echo TbHtml::button('Large button',array('size'=>'large')); ?>
	</div>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::button('Default button',array('style'=>'primary')); ?>
		<?php echo TbHtml::button('Default button'); ?><br/>
	</div>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::button('Small button',array('style'=>'primary','size'=>'small')); ?>
		<?php echo TbHtml::button('Small button',array('size'=>'small')); ?><br/>
	</div>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::button('Mini button',array('style'=>'primary','size'=>'mini')); ?>
		<?php echo TbHtml::button('Mini button',array('size'=>'mini')); ?>
	</div>

	<h5>Block buttons</h5>

	<div class="well" style="margin-bottom: 20px; width: 320px;">
		<?php echo TbHtml::button('Block button',array('block'=>true,'style'=>'primary')); ?>
		<?php echo TbHtml::button('Block button',array('block'=>true)); ?>
	</div>

	<h5>Disabled state</h5>

	<div style="margin-bottom: 20px;">
		<?php echo TbHtml::linkButton('Primary link',array('disabled'=>true,'style'=>'primary','size'=>'large')); ?>
		<?php echo TbHtml::linkButton('Link',array('disabled'=>true,'size'=>'large')); ?>
	</div>
</div>

<div class="button-dropdowns">
	<h3>Button dropdowns</h3>

	<?php $dropdownConfig = array(
		array('label'=>'Action','url'=>'#'),
		array('label'=>'Another action','url'=>'#'),
		array('label'=>'Something else here','url'=>'#'),
		'---',
		array('label'=>'Separate link','url'=>'#'),
	); ?>

	<h5>Default dropdown</h5>

	<div style="margin-bottom: 20px;">
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'primary')); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'danger')); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'warning')); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'success')); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'info')); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'inverse')); ?>
	</div>

	<h5>Split dropdown</h5>

	<div style="margin-bottom: 20px;">
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'primary','split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'danger','split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'warning','split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'success','split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'info','split'=>true)); ?>
		<?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('style'=>'inverse','split'=>true)); ?>
	</div>
</div>

<div class="images">
	<h3>Images</h3>

	<div class="row-fluid" style="text-align: center; width: 450px;">
		<div class="span4">
			<?php echo TbHtml::imageRounded('http://placehold.it/140x140/eeeeee/aaaaaa/'); ?>
			<h5>Rounded</h5>
		</div>
		<div class="span4">
			<?php echo TbHtml::imageCircle('http://placehold.it/140x140/eeeeee/aaaaaa/'); ?>
			<h5>Circle</h5>
		</div>
		<div class="span4">
			<?php echo TbHtml::imagePolaroid('http://placehold.it/140x140/eeeeee/aaaaaa/'); ?>
			<h5>Polaroid</h5>
		</div>
	</div>
</div>

<div class="navs">
	<?php $navItems = array(
		array('icon'=>'home','url'=>array('/site/index')),
		array('label'=>'Profile','url'=>'#'),
		array('label'=>'Messages','url'=>'#'),
		array('label'=>'Dropdown','items'=>array(
			array('label'=>'Heading'),
			array('label'=>'Action','url'=>'#'),
			array('label'=>'Another action','url'=>'#'),
			array('label'=>'Something else here','url'=>'#'),
			'---',
			array('label'=>'Separate link','url'=>'#'),
		)),
	); ?>

	<h3>Navs</h3>

	<h5>Nav tabs</h5>

	<div style="margin-bottom: 20px;">
		<?php $this->widget('bootstrap.widgets.TbNav', array('style'=>'tabs','items'=>$navItems)); ?>
	</div>

	<div style="margin-bottom: 20px;">
		<?php $this->widget('bootstrap.widgets.TbNav', array('style'=>'tabs','stacked'=>true,'items'=>$navItems)); ?>
	</div>

	<h5>Nav pills</h5>

	<div style="margin-bottom: 20px;">
		<?php $this->widget('bootstrap.widgets.TbNav', array('style'=>'pills','items'=>$navItems)); ?>
	</div>

	<div style="margin-bottom: 20px;">
		<?php $this->widget('bootstrap.widgets.TbNav', array('style'=>'pills','stacked'=>true,'items'=>$navItems)); ?>
	</div>

	<h5>Nav list</h5>

	<div style="margin-bottom: 20px;">
		<div class="well" style="padding: 8px 0;">
			<?php $this->widget('bootstrap.widgets.TbNav', array(
				'style'=>'list',
				'items'=>array(
					array('label'=>'List header'),
					array('label'=>'Home','url'=>'#'),
					array('label'=>'Library','url'=>'#'),
					array('label'=>'Applications','url'=>'#'),
				),
			)); ?>
		</div>
	</div>
</div>

<div class="breadcrumbs">
    <h3>Breadcrumb</h3>

    <?php echo TbHtml::breadcrumb(array('Home')); ?>

    <?php echo TbHtml::breadcrumb(array(
        TbHtml::icon('home') => array('/site/index'),
        'Library',
    )); ?>

    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
        'divider' => '&rsaquo;',
        'links' => array(
            'Library' => array('#'),
            'Data',
        ),
    )); ?>
</div>

<div class="labels-badges">
	<h3>Labels and badges</h3>

	<h5>Labels</h5>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::labelSpan('Default'); ?>
		<?php echo TbHtml::labelSpan('Success',array('style'=>'success')); ?>
		<?php echo TbHtml::labelSpan('Warning',array('style'=>'warning')); ?>
		<?php echo TbHtml::labelSpan('Important',array('style'=>'important')); ?>
		<?php echo TbHtml::labelSpan('Info',array('style'=>'info')); ?>
		<?php echo TbHtml::labelSpan('Inverse',array('style'=>'inverse')); ?>
	</div>

	<h5>Badges</h5>

	<div style="margin-bottom: 10px;">
		<?php echo TbHtml::badgeSpan('1'); ?>
		<?php echo TbHtml::badgeSpan('2',array('style'=>'success')); ?>
		<?php echo TbHtml::badgeSpan('4',array('style'=>'warning')); ?>
		<?php echo TbHtml::badgeSpan('6',array('style'=>'important')); ?>
		<?php echo TbHtml::badgeSpan('8',array('style'=>'info')); ?>
		<?php echo TbHtml::badgeSpan('10',array('style'=>'inverse')); ?>
	</div>
</div>

<div class="alerts">
    <h3>Alerts</h3>

    <h5>Default alerts</h5>

    <?php echo TbHtml::alert('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'); ?>
    <?php echo TbHtml::alert('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.'); ?>
    <?php echo TbHtml::alert('success', '<strong>Well done!</strong> You successfully read this important alert message.'); ?>
    <?php echo TbHtml::alert('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'); ?>

    <h5>Block alerts</h5>

    <?php Yii::app()->user->setFlash('warning','<h4>Warning!</h4>Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'); ?>

    <?php $this->widget('bootstrap.widgets.TbAlert',array(
        'block'=>true,
        'events'=>array(
            'close'=>"function() { console.log('Alert close event fired.'); }",
            'closed'=>"function() { console.log('Alert closed event fired.'); }",
        ),
    )); ?>

</div>