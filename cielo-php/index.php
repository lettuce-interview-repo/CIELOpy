<html>
<head>
<title>CIELO test form</title>
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" /> -->
</head>
<body>

<div id="container">
<?php echo form_open('controller'); ?>
<?php if (isset($message)) { ?>Inserted form into MySQL database<?php } ?>
<?php echo form_label('Name'); ?> <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('Date of Birth'); ?> <?php echo form_error('ddob'); ?><br />
<?php echo form_input(array('id' => 'ddob', 'name' => 'ddob', 'placeholder' => 'Date of Birth')); ?><br />

<?php echo form_label('Email'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

<?php echo form_label('Favorite Color:'); ?> <?php echo form_error('dcolor'); ?><br />
<?php echo form_input(array('id' => 'dcolor', 'name' => 'dcolor')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>