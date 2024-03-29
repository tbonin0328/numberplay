<?
/**
 * conn_inc.php creates connection to database
 * 
 * MySQL credentials are stored inside a function named conn() 
 *  which allows up to 5 levels of access.
 *  
 * The function conn() returns an active connection to the DB.
 *  
 * @package nmCommon
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 2.091 2011/06/17
 * @link http://www.newmanix.com/ 
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License ("OSL") v. 3.0
 * @todo none
 */
 
	/*
	$myHostName = "numberplay.practice.dreamhosters.com";#provide default DB credentials here
	$myUserName = "thobon4";
	$myPassword = "Lovely11!";
	$myDatabase = "numberdb";
	*/ 
	

 

/**
 * Provides active connection to MySQL DB.
 *
 * A set of default credentials should be placed in the conn() function, and optional 
 * levels of access can be chosen on a case by case basis on specific pages.  
 *
 * One of 5 strings indicating a MySQL user can be passed to the function  
 *
 * 1 admin
 * 2 delete
 * 3 insert
 * 4 update
 * 5 select
 *  
 * MySQL accounts must be setup for each level, with 'select' account only able 
 * to access db via 'select' command, and update able to 'select' and 'update' etc. 
 * Each credential set must exist in MySQL before it can be used.
 *
 * If no data is entered into conn() function when it is called, a mysqli connection with the 
 * default access is returned:
 *
 *<code>
 * $iConn = conn();
 *</code>
 *
  * If you create multiple MySQL users and have a 'select only' user, you can create a 'select only' connection:
 *
 * <code>
 * $iConn = conn("select");
 * </code>
 *
 * You can also create a mysql classic (mysql) connection by declaring FALSE as a second optional argument:
 *
 * <code>
 * $myConn = conn("admin",FALSE);
 * </code>
 *
 * @param string $access represents level of access
 * @param boolean $improved If TRUE, uses mysqli improved connection (default)
 * @return object Returns active connection to MySQL db.
 * @todo error logging, or emailing admin not implemented
 */ 
function conn($access="",$improved = TRUE)
{
	$myHostName = "numberplay.practice.dreamhosters.com";#provide default DB credentials here
	$myUserName = "thobon4";
	$myPassword = "Lovely11!";
	$myDatabase = "numberdb";
	
	if($access != "")
	{#only check access if overwritten in function
		switch(strtolower($access))
		{# Optionally overwrite access level via function
			case "admin":	
				$myUserName = "thobon4"; #your MySQL username
				$myPassword = "xxxxxx"; #your MySQL password	
				break;
			case "delete":	
				$myUserName = "thobon4"; 
				$myPassword = "xxxxxx"; 
				break;	
			case "insert":	
				$myUserName = "thobon4"; 
				$myPassword = "xxxxxx"; 
				break;
			case "update":	
				$myUserName = "thobon4"; 
				$myPassword = "xxxxxx"; 
				break;
			case "select":	
				$myUserName = "thobon4"; 
				$myPassword = "xxxxxx"; 
				break;		
			
		}
	}
	if($improved)
	{//create mysqli improved connection
		$myConn = @mysqli_connect($myHostName, $myUserName, $myPassword, $myDatabase) or die(trigger_error(mysqli_connect_error(), E_USER_ERROR));
	}else{//create standard connection
		$myConn = @mysql_connect($myHostName,$myUserName,$myPassword) or die(trigger_error(mysql_error(), E_USER_ERROR));
		@mysql_select_db($myDatabase, $myConn) or die(trigger_error(mysql_error(), E_USER_ERROR));
	}
	return $myConn;
}

/** 
 * Placing the DB connection inside a class allows us to create a shared 
 * connection to improve use of resources.
 *
 * Returns a mysqli connection:
 *
 * <code>
 * $iConn = IDB::conn();
 * </code>
 *
 * All calls to this class will use the same shared connection.
 * 
 
 
 
 */ 

class IDB 
{ 
	private static $instance = null; #stores a reference to this class

	private function __construct() 
	{#establishes a mysqli connection - private constructor prevents direct instance creation 
		$myHostName = "numberplay.practice.dreamhosters.com";#provide default DB credentials here
		$myUserName = "thobon4";
		$myPassword = "Lovely11!";
		$myDatabase = "numberdb";
		#hostname, username, password, database
		$this->dbHandle = mysqli_connect($myHostName,$myUserName, $myPassword, $myDatabase) or die(trigger_error(mysqli_connect_error(), E_USER_ERROR)); 
	} 

	public static function conn() 
    {#Creates a single instance of the database connection 
      if(self::$instance == null){self::$instance = new self;}#only create instance if does not exist
      return self::$instance->dbHandle;
    }
}
?>