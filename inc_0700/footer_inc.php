<?php
/**
 * footer_inc.php provides the right panel and footer for our site pages 
 *
 * Includes dynamic copyright data 
 *
 * @package nmCommon
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.014 2012/06/09
 * @link http://www.newmanix.com/  
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @see template.php
 * @see header_inc.php 
 * @todo none
 */
?>
	  <!-- footer include starts here -->
	  </td>
	  <!-- right panel starts here -->	
	  <!-- change right panel color here -->
      	<td width="175" valign="top">
		<? echo $config->sidebar2; ?>
        </td>
	</tr>
      <!-- change footer color here -->
	<tr>
		<td colspan="3">
		    <p align="center"><b>Footer Goes Here!</b></p>
			<p align="center">Always include some sort of copyright notice, for example:</p>
	        <p align="center"><em>&copy; My Company, 2007 - <?php echo date("Y");?></em></p>
		</td>
  </tr>
</table>
</body>
</html>