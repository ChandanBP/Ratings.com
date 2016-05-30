<?php

echo 'Movie Information obtained<br>';

foreach($records as $rec){
  echo $rec->Movie_id." ".$rec->Movie_name." ".$rec->Director." ".$rec->Music_Director." ".$rec->DESCRIPTION." ".$rec->Ratings." ".$rec->Lang_id." ";
}
?>