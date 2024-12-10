<?php
	$id = $_POST["id"]; 
	$table = "<table border='1'><th>ID PROF</th><th>Data</th><th>Ora</th><th>Durata</th>";
	$lines=file("lezioni.txt");
	foreach($lines as $line_num =>$line)
	{
		$parti=explode(";",$line);
		//echo $parti[1]." ".$parti[2]."<br>";
		if (strcmp($parti[2], $id) == 0){
			$profs=file("insegnanti.txt");
			foreach($profs as $prof_num =>$prof)
			{
				$partip=explode(";",$prof);
				if (strcmp($partip[0], $parti[1]) == 0){
					$table = $table."<tr><td>".$partip[1]." ".$partip[2]."</td>";
				}
			}
			$table = $table."<td>".$parti[3]."</td>"."<td>".$parti[4]."</td>"."<td>".$parti[5]."</td></tr>";
		}
	}
	$table = $table."</table>";
	echo $table;
?>