<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'id'=>'book-form',
)); ?>
<div class="row">
	<div class="col-md-6">
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<div class="input-group input-group" style="z-index:1">
				<span class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</span>
				<?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
							'model' => $model,
							'attribute' => 'fromDate',
							'htmlOptions' => array('class'=>'form-control'),
							'pluginOptions' => array(
								'format' => 'yyyy-mm-dd',
								'showAnim' =>'slide',
							)
						));
					?>
				<span class="input-group-addon">
					-
				</span>
				<?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
							'model' => $model,
							'attribute' => 'toDate',
							'htmlOptions' => array('class'=>'form-control'),
							'pluginOptions' => array(
								'format' => 'yyyy-mm-dd',
								'showAnim' =>'slide',
							)
						));
					?>
				<div class="input-group-btn">
					<?php echo CHtml::submitButton('Search',  array('class' => 'btn btn-success', 'style'=>'padding:7px 10px;'));?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>
<script>
	$(document).ready(function(){
		var exportUrl=$('#book-form').serialize();
		
		$('#generate-pdf').click(function (){
            window.open('<?php echo Yii::app()->controller->createUrl('book/exportPDF?');?>'+exportUrl, '_blank');
        });
		$('#export').click(function (){
            location.replace('<?php echo Yii::app()->controller->createUrl('book/exportXls?');?>'+exportUrl);
        });
		
		$('#Book_toDate').change(function(){
			var fromDate = $('#Book_fromDate');
			var toDate = $('#Book_toDate');
			
			if(fromDate.val()==''){
				alert('Select from date first ..');
				toDate.val('');
				return false;
			}
			
			if(toDate.val() < fromDate.val()){
				alert('Return date must not be less than the from date ..');
				toDate.val('');
				return false;
			}
		});
		
        $("#Book_fromDate").inputmask({
				mask: "y-m-d",
				placeholder: "yyyy-mm-dd",
				alias: "date",
			});
		$("#Book_toDate").inputmask({
				mask: "y-m-d",
				placeholder: "yyyy-mm-dd",
				alias: "date",
			});
	});
	
</script>