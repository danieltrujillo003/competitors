<p><?php echo $person['bio']; ?></p>

<?php echo form_open('posts/delete/'.$person['id']); ?>
<?php echo form_submit('delete', 'Delete'); ?><br/><br/>
<?php echo form_close(); ?>