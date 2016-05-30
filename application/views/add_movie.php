<html>
<body bgcolor="#444442">
<h1> Add movie </h1>
<fieldset>

<?php 
echo form_open('login/addNew_movie');
echo form_input('movie_name',set_value('movie_name', 'Movie Name'));
echo form_input('director', set_value('director','Movie Director'));
echo form_input('music_director',set_value('music_director','Music Director'));
echo form_input('description', set_value('description','Description'));
echo form_input('ratings', set_value('ratings','Ratings'));
echo form_input('lang_id', set_value('lang_id','language id'));
echo form_submit('submit','Add Movie');
?>

</br>
</br>
<?php echo anchor('login/delete_movie','Delete Movie'); 

?>


</fieldset>
</body>
</html>
