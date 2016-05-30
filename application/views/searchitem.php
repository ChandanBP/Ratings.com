<html>
<body bgcolor="#444442">
<h1> Search for a movie by name </h1>


<?php 
echo form_open('login/execute_search'); ?>
<p> catagory 
<select name="formCat">
<option value="">select </option>
<option value="movies">movies</option>
<option value="apartments">apartments</option>
</select>
</p>

<?php 
echo form_input('movie_name',set_value('movie_name', 'Movie Name')); 
echo form_submit('submit','Search');
?>
</body>
</html>