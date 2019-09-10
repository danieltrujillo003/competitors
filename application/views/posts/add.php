<?php echo form_open('posts/add'); ?>

<?php echo validation_errors(); ?>

<?php echo form_label('Name', 'name'); ?><br/>
<?php echo form_input('name', '', 'id="name"'); ?><br/><br/>
<?php echo form_label('Bio', 'bio'); ?><br/>
<?php echo form_textarea('bio', '', 'id="bio"'); ?><br/><br/>
<?php echo form_label('Position', 'position'); ?><br/>
<?php echo form_input('position', '', 'id="position"'); ?><br/><br/>
<?php echo form_submit('submit', 'Submit'); ?><br/><br/>

<?php echo form_close(); ?>
