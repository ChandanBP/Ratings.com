<html>
<body bgcolor="#444442">
<div>
    
        
				<table align="center">
				<caption style="color:red;font-size: 25px;font-weight: bold;">Movie Info</caption>
					<?php
					   $res = $results;
						$s = $res['movies_return'];
					   foreach($s as $d){
					   ?>
					   <script>
					      movieId = <?php echo $d->Movie_id;?>;
						  
					   </script>
						<tr>
							<td style="color:white;">Movie</td><td style="color:green;"><?php echo $d->Movie_name; ?></td>
						</tr>
						<tr>
							<td style="color:white;">Director</td><td style="color:green;"><?php echo $d->Director; ?></td>
						</tr>
						<tr>
							<td style="color:white;">Music_Director</td><td style="color:green;"><?php echo $d->Music_Director; ?></td>
						</tr>
						<tr>
							<td style="color:white;">DESCRIPTION</td><td style="color:green;"><?php echo $d->DESCRIPTION; ?></td>
						</tr>
						<tr>
							<td style="color:white;">Ratings</td><td style="color:green;"><?php echo $d->Ratings; ?></td>
						</tr>
						
					   <?php } ?>
			</table>
			
       
    
</div>
</body>
</html>