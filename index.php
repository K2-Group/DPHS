<?php	include "includes/header.inc";	echo $avgsurv.": ".stime($crosssurvival['avg(survival_time)']);?>		<br /><table border='0' align='center'>		<tr class='tr_1'>			<td>#</td>			<td><a href="?td=name&order=<?= $sort; ?>"><? if ($_GET['td'] == name or $_GET['td'] == $null) { if ($_GET['order'] == ASC or $_GET['order'] == $null) { echo '<u>'.$name.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$name.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $name.'<img src="images/noorder.png" title="" alt="">'; } ?></a></td>			<td><a href="?td=humanity&order=<?= $sort; ?>"><? if ($_GET['td'] == humanity) { if ($_GET['order'] == ASC) { echo '<u>'.$humanity.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$humanity.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $humanity.'<img src="images/noorder.png" title="" alt="">'; } ?></a></td>			<td><a href="?td=life&order=<?= $sort; ?>"><? if ($_GET['td'] == life) { if ($_GET['order'] == ASC) { echo '<u>'.$life.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$life.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $life.'<img src="images/noorder.png" title="" alt="">'; } ?></a></td>			<td><a href="?td=time&order=<?= $sort; ?>"><? if ($_GET['td'] == time) { if ($_GET['order'] == ASC) { echo '<u>'.$survtime.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$survtime.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $survtime.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=ttime&order=<?= $sort; ?>"><? if ($_GET['td'] == ttime) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo $total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></td>			<td><a href="?td=kills&order=<?= $sort; ?>"><? if ($_GET['td'] == kills) { if ($_GET['order'] == ASC) { echo '<u>'.$kills.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$kills.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $kills.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=tkills&order=<?= $sort; ?>"><? if ($_GET['td'] == tkills) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo $total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></td>			<td><a href="?td=bkills&order=<?= $sort; ?>"><? if ($_GET['td'] == bkills) { if ($_GET['order'] == ASC) { echo '<u>'.$bkills.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$bkills.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $bkills.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=tbkills&order=<?= $sort; ?>"><? if ($_GET['td'] == tbkills) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo $total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></td>			<td><a href="?td=zkills&order=<?= $sort; ?>"><? if ($_GET['td'] == zkills) { if ($_GET['order'] == ASC) { echo '<u>'.$zkills.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$zkills.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $zkills.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=tzkills&order=<?= $sort; ?>"><? if ($_GET['td'] == tzkills) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo $total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></td>			<td><a href="?td=hs&order=<?= $sort; ?>"><? if ($_GET['td'] == hs) { if ($_GET['order'] == ASC) { echo '<u>'.$hs.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$hs.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $hs.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=ths&order=<?= $sort; ?>"><? if ($_GET['td'] == ths) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo ''.$total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></td>			<td><a href="?td=hsq&order=<?= $sort; ?>"><? if ($_GET['td'] == hsq) { if ($_GET['order'] == ASC) { echo '<u>'.$hsq.'</u><img src="images/asc.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$hsq.'</u><img src="images/desc.png" title="'.$desc.'" alt="">'; } } else { echo $hsq.'<img src="images/noorder.png" title="" alt="">'; } ?></a><br /><font size="1"><a href="?td=thsq&order=<?= $sort; ?>"><? if ($_GET['td'] == thsq) { if ($_GET['order'] == ASC) { echo '<u>'.$total.'</u><img src="images/ascs.png" title="'.$asc.'" alt="">'; } else { echo '<u>'.$total.'</u><img src="images/descs.png" title="'.$desc.'" alt="">'; } } else { echo ''.$total.'<img src="images/noorders.png" title="" alt="">'; } ?></a></font></a></td>		</tr><?		while($row = mysql_fetch_array($ergebnis))	{?>   		<tr class="<? if (($i%2) == 0) { echo "tr_3"; } else { echo "tr_2"; }; ?>">			<td><?= $i; ?></td>			<td style="text-align:left;"><?= $row['name']; ?></td>			<td><?= $row['humanity']; ?> <? if ($row['humanity'] >= 5000) { echo "<img src='images/held.png' border='0' title='Held' alt='Held' />"; } elseif ($row['humanity'] < 0) { echo "<img src='images/bandit.png' border='0' title='Bandit' alt='Bandit' />"; } else { echo "<img src='images/neutral.png' border='0' title='' alt='' />"; }; ?></td>			<td><?= $row['survival_attempts']-1; ?></td>			<td><?= stime($row['survival_time']); ?><br /><font size="1"><?= stime($row['survival_time']+$row['total_survival_time']); ?></font></td>			<td style="text-align:right;"><?= $row['survivor_kills']; ?><br /><font size="1"><?= $row['survivor_kills']+$row['total_survivor_kills']; ?></font></td>			<td style="text-align:right;"><?= $row['bandit_kills']; ?><br /><font size="1"><?= $row['bandit_kills']+$row['total_bandit_kills']; ?></font></td>			<td style="text-align:right;"><?= $row['zombie_kills']; ?><br /><font size="1"><?= $row['zombie_kills']+$row['total_zombie_kills']; ?></font></td>			<td style="text-align:right;"><?= $row['headshots']; ?><br /><font size="1"><?= $row['headshots']+$row['total_headshots']; ?></font></td>			<td style="text-align:right;"><? if ($row['headshots'] == 0) { echo '0'; } else { echo round(100/($row['survivor_kills']+$row['bandit_kills']+$row['zombie_kills'])*($row['headshots']),2); } ?>%<br /><font size="1"><? if ($row['headshots'] == 0) { echo '0'; } else { echo round(100/($row['survivor_kills']+$row['total_survivor_kills']+$row['bandit_kills']+$row['total_bandit_kills']+$row['zombie_kills']+$row['total_zombie_kills'])*($row['headshots']+$row['total_headshots']),2); } ?>%</font></td>		</tr><?		$i = $i+1;	}?>	</table><?	mysql_close($verbindung);	include "includes/foot.inc";?>