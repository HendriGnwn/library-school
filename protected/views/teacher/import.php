<?php
/* @var $this TeacherController */
/* @var $model Teacher */
?>

<?php
$this->breadcrumbs=array(
	'Guru'=>array('index'),
	'Import Data',
);

$this->menu=array(
	array('label'=>'List Guru', 'url'=>array('index')),
);
?>

<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="glyphicon-import"></i>Import Data Guru
				</h3>
			</div>
			<div class="box-content">
				<?php echo $model->getDescriptionHtml(); ?>
				<?php $form=$this->beginWidget('MyActiveForm', array(
					'id'=>'teacher-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
						'validateOnChange'=>true,
					),
					'enableAjaxValidation'=>false,
					'htmlOptions' => array(
						'enctype' => 'multipart/form-data',
					),
					)); ?>
				
				<?php echo $form->errorSummary($model); ?>
				
				<div class="row control-group form-group">
					<div class="col-xs-12 col-md-6">
						<?php echo $form->labelEx($model, 'file', array('class'=>'control-label')); ?>
						<?php echo $form->fileField($model,'file', array('class'=>'form-control')); ?>
					</div>
					<div class="col-xs-12 col-md-6">
						<?php echo $form->error($model,'file', array('class'=>'error-text help-block')); ?>
					</div>
				</div>
				
				<div class="form-actions">
					<?php echo TbHtml::submitButton('Save',array(
						'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
						'size'=>TbHtml::BUTTON_SIZE_LARGE,
					)); ?>
				</div>

				<?php $this->endWidget(); ?>
			</div>
		</div>
	</div>
</div><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

