<?php
/* @var $this JobTeamsController */
/* @var $model JobTeams */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-teams-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positions'); ?>
		<?php echo $form->textField($model,'positions',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'positions'); ?>
	</div>
        <div class="row">
        <?php echo $form->labelEx($model, 'descriptions'); ?>
        <?php
        $this->widget('application.extensions.tinymce.ETinyMce', array(
            'model' => $model,
            'value'=>$model->descriptions,
            'attribute' => 'descriptions',
            'htmlOptions' => array('size' => 60, 'maxlength' => 255),
            'plugins' => array('safari', 'pagebreak', 'style', 'layer', 'table', 'save', 'advhr', 'advlink', 'emotions', 'iespell', 'inlinepopups', 'preview', 'searchreplace', 'print', 'contextmenu', 'paste', 'directionality', 'fullscreen', 'noneditable', 'visualchars', 'nonbreaking', 'xhtmlxtras', 'template'),
            'options' => array(
                'theme_advanced_toolbar_location' => 'top',
                'theme' => 'advanced',
                'skin' => 'o2k7',
                'theme_advanced_buttons1' => 'preview,bold,italic,underline,fontselect,fontsizeselect,link,justifyfull,justifyleft,justifycenter,justifyright,pasteword,pastetext,table,|,bullist,numlist,|,undo,redo,|,code,fullscreen',
                'theme_advanced_buttons2' => '',
                'theme_advanced_buttons3' => '',
                'height' => '100',
            ),
        ));
        echo $form->error($model, 'descriptions');
        ?>

    </div>
	<div class="row">
		<?php echo $form->labelEx($model,'link_twitter'); ?>
		<?php echo $form->textField($model,'link_twitter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_facebook'); ?>
		<?php echo $form->textField($model,'link_facebook',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link_email'); ?>
		<?php echo $form->textField($model,'link_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link_email'); ?>
	</div>
    <div class="row">
        <?php if(isset($files)){?>
        <img src="<?php echo $files['uri']?>" width="64" height="64"/>
        <?php }?>
        <?php echo $form->labelEx($model, 'image_id'); ?>
        <?php echo $form->fileField($model, 'image_id',array('accept'=>'image/*')); ?>
        <?php echo $form->error($model, 'image_id'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->