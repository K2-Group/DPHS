<?php	$verbindung = mysql_connect($host, $user, $pass) or die ("Wrong Username or Password/Falscher Benutzername oder Passwort");	mysql_select_db($db) or die ("Database not found./Datenbank nicht gefunden.");	$i=1;			if ($_GET['order'] == ASC) { $sort = DESC; $srt = ASC; } else { $sort = ASC; $srt = DESC;};		if ($_GET['td'] == $NULL) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY name ASC"; }	elseif ($_GET['td'] == humanity) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY humanity ".$srt; }	elseif ($_GET['td'] == life) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY survival_attempts ".$srt; }	elseif ($_GET['td'] == svtime) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY survival_time ".$srt; }	elseif ($_GET['td'] == ttime) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY survival_time+total_survival_time ".$srt; }	elseif ($_GET['td'] == kills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY survivor_kills ".$srt; }	elseif ($_GET['td'] == tkills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY survivor_kills+total_survivor_kills ".$srt; }	elseif ($_GET['td'] == bkills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY bandit_kills ".$srt; }		elseif ($_GET['td'] == tbkills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY bandit_kills+total_bandit_kills ".$srt; }	elseif ($_GET['td'] == zkills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY zombie_kills ".$srt; }		elseif ($_GET['td'] == tzkills) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY zombie_kills+total_zombie_kills ".$srt; }	elseif ($_GET['td'] == hs) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY headshots ".$srt; }		elseif ($_GET['td'] == ths) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY headshots+total_headshots ".$srt; }	elseif ($_GET['td'] == hsq) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY 100/(survivor_kills+bandit_kills+zombie_kills)*(headshots) ".$srt; }	elseif ($_GET['td'] == thsq) { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY 100/(survivor_kills+total_survivor_kills+bandit_kills+total_bandit_kills+zombie_kills+total_zombie_kills)*(headshots+total_headshots) ".$srt; }	else { $abfrage = "SELECT * FROM profile p INNER JOIN survivor s ON p.unique_ID = s.unique_ID WHERE is_dead=0 ORDER BY name ".$srt;};	$ergebnis = mysql_query($abfrage);		$ast_="SELECT avg(survival_time) FROM survivor;"; 	$ast=mysql_query($ast_); 	$crosssurvival=mysql_fetch_array($ast); 	?>