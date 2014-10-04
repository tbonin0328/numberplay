<?php
/**
 * demo_list.php along with demo_view.php provides a sample web application
 *
 * this app is contingent upon the  installation and proper 
 * configuration of the nmMini package (config-mini.php) or equivalent
 * 
 * @package nmListView
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 3.0 2012/11/14
 * @link http://www.newmanix.com/
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see demo_view.php
 * @todo none
 */

require 'include/config-mini.php'; #provides configuration, pathing, error handling, db credentials 
 
# SQL statement
$sql = "select WaterAvailID, WaterRank, CityName, StateName, Description, AvailRank, VulnScore from water_avail";

#Fills <title> tag  
//$title = 'Water resources are at risk in many U.S. cities';

# END CONFIG AREA ---------------------------------------------------------- 

include 'include/header.php'; #header must appear before any HTML is printed by PHP
?>
<h2 align="center">Water Availability Rankings for Cities with Highest Drought Vulnerability</h2>

<!--
<p>This page, along with <b>demo_view.php</b>, demonstrate a List/View web application.</p>
<p>This page is the entry point of the application, meaning this page gets a link on your web site.  Since the current subject is muffins, we could name the link something clever like <a href="demo_list.php">MUFFINS</a></p>
<p>Use <b>demo_list.php</b> and <b>demo_view.php</b> as a starting point for building your own List/View web application!</p> 
-->

<?php

# connection comes first in mysqli (improved) function

$myConn = @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(myerror(__FILE__,__LINE__,mysql_error()));
@mysql_select_db(DB_NAME,$myConn) or die(myerror(__FILE__,__LINE__,mysql_error()));
$result = mysql_query($sql,$myConn) or die(myerror(__FILE__,__LINE__,mysql_error()));
if (mysql_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysql_fetch_assoc($result))
	{# process each row
         echo '<div align="center"><a href="demo_view.php?id=' . (int)$row['WaterAvailID'] . '">' . dbOut($row['CityName']) . '</a>';
         echo ' : <font color="red">' . number_format((float)$row['AvailRank'],2)  . '</font></div>';
 
	} 
}else{//no records
	print '<div align="center">What! No City?  There must be a mistake!!</div>';
}
@mysql_free_result($result); # releases web server resources

include 'include/footer.php';
?>
