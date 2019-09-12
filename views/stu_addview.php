<!DOCTYPE html>
<html>
<head>
	<title>Students Example</title>
</head>
<body>
<?php 
	echo form_open('S/add_student');
	echo form_label('Roll No.');
	echo form_input(array('id' =>'roll',  'name' =>'roll'));
	echo "<br/>";


	echo form_label('Name');
	echo form_input(array('id' =>'name', 'name'=>'name'));
	echo "<br/>";

	echo form_submit(array('id' => 'submit', 'value'=>'add'));
	echo form_close();
?>
</body>
</html>
