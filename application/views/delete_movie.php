<html>
<body bgcolor="#444442">
<h1> Delete movie </h1>
<fieldset>

<?php 
echo form_open('login/deleteMovie');
echo form_input('movie_name',set_value('movie_name', 'Movie Name'));
echo form_submit('submit','Delete Movie');
?>

</br>
</br>
<p><?php echo anchor('login', 'Home');?> </p>

</fieldset>
</body>
</html>
