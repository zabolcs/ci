<h1>Login Theme: semantic</h1>

<?php echo $message; ?>

<?php echo form_open(); ?>

    <?php echo form_label('Email:', 'email'); ?>
    <?php echo form_input('email', set_value('email')); ?>
    <?php echo form_error('email'); ?>

    <?php echo form_label('Password:', 'password'); ?>
    <?php echo form_password('password'); ?>
    <?php echo form_error('password'); ?>

    <label for="rememberMe"><?php echo form_checkbox('remember', 1, FALSE, 'class="rememberMe"'); ?> Remember Me</label>
	<a href='/auth/facebook'>facebook login</a>
	<a href='/auth/google'>google login</a>
    <?php echo form_submit('login', 'Login'); ?>

<?php echo form_close(); ?>