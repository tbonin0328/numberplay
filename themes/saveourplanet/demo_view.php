<?php
/**
 * demo_view.php along with demo_list.php provides a sample web application
 *
 * this app is contingent upon the  installation and proper 
 * configuration of the nmMini package (config-mini.php) or equivalent  
 * 
 * @package nmListView
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.0 2012/11/14
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_list.php
 * @todo none
 */
 
require 'include/config-mini.php'; #provides configuration, pathing, error handling, db credentials
 
# check variable of item passed in - if invalid data, forcibly redirect back to demo_list.php page
if(isset($_GET['id']) && (int)$_GET['id'] > 0){#proper data must be on querystring
	 $myID = (int)$_GET['id']; #Convert to integer, will equate to zero if fails
}else{
	header("Location:demo_list.php");
}

//sql statement to select individual item
$sql = 'SELECT * FROM `water_avail` where WaterAvailID = ' . $myID;
//---end config area --------------------------------------------------



$foundRecord = FALSE; # Will change to true, if record found!
   
# connection comes first in mysqli (improved) function
$myConn = @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(myerror(__FILE__,__LINE__,mysql_error()));
@mysql_select_db(DB_NAME,$myConn) or die(myerror(__FILE__,__LINE__,mysql_error()));

$result = mysql_query($sql,$myConn) or die(myerror(__FILE__,__LINE__,mysql_error()));

if (mysql_num_rows($result) > 0)//at least one record!
{#records exist - process
	   $foundRecord = TRUE;	
	   while ($row = mysql_fetch_assoc($result))
	   {
			$WaterRank = (int)$row['WaterRank'];
			$CityName = dbOut($row['CityName']);
			$StateName = dbOut($row['StateName']);
			$Description = dbOut($row['Description']);
			$AvailRank = (float)$row['AvailRank'];
			$VulnScore = dbOut($row['VulnScore']);
	   }
}

@mysql_free_result($result); # releases web server resources

if($foundRecord)
{#only load data if record found
	$title = $CityName . "'s nationwide water risk rank is " . $WaterRank; #overwrite title with Muffin info!
}
# END CONFIG AREA ---------------------------------------------------------- 

include 'include/header.php'; #header must appear before any HTML is printed by PHP
?>
<!--<h3 align="center"><?=THIS_PAGE;?></h3>-->

<!--
<p>This page, along with <b>demo_list.php</b>, demonstrate a List/View web application.</p>
<p>This page is to be used only with <b>demo_list.php</b>, and is <b>NOT</b> the entry point of the application, meaning this page gets <b>NO</b> link on your web site.</p>
<p>Use <b>demo_list.php</b> and <b>demo_view.php</b> as a starting point for building your own List/View web application!</p> 
-->

<?php
if($foundRecord)
{#records exist - show muffin!
?>
	<h2><?=$CityName;?>, <?=$StateName;?>, is one of the top 20 cities with serious water issues!</h2>
	<br />
	<div><a href="demo_list.php"><h2>Thirsty for More City Rankings?</h2></a></div>
	<br />
	<table align="center">
		<tr>
			<td><img src="upload/w<?=$myID;?>.png" /></td>
			<td colspan="6"><h2>Thinking about moving to <?=$CityName;?>, <?=$StateName;?>? Think again!</h2></td>
		</tr>
		<tr>
			<td colspan="12">
				<blockquote><h2><?=$Description;?></h2></blockquote>
			</td>
		</tr>
		<tr>
			<td align="center" colspan="3">
				<h2><i>Rank Among U.S. for Water Shortage Issues:</i> <font color="red"><?=number_format($WaterRank,0);?></font></h2>
			</td>
			<td align="center" colspan="3">
				<h2><i>Water Availability Rating (if it's low, it's bad):</i> <font color="red"><?=number_format($AvailRank,2);?></font></h2>
			</td>
			<td align="center" colspan="3">
				<h2><i>Vulnerability to Drought:</i> <font color="red"><?=$VulnScore;?></font></h2>
			</td>
		</tr>
	</table>
<?
}else{//no such muffin!
    echo '<div align="center">What! No water supply dooms day list? Oh no!</div>';
    echo '<div align="center"><a href="demo_list.php">Try Another City Ranking?</a></div>';
}

include 'include/footer.php'; #header must appear before any HTML is printed by PHP
?>
