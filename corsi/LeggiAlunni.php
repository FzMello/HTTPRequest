<?php
	$select = "<select name='alunno' id='alunno' onchange='apricorsi()'><option value='std' disabled selected> -- Select students -- </option>";
	$lines=file("alunni.txt");
	foreach($lines as $line_num =>$line)
	{
		$parti=explode(";",$line);
		//echo $parti[1]." ".$parti[2]."<br>";
		$select = $select."<option value='".$parti[0]."'>".$parti[1]." ".$parti[2]."</option>";
	}
	$select = $select."</select>";
	echo $select;
?>