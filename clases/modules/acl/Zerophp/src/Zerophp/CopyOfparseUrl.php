<?php

/*
 /README.md                  -> README.md
/                           -> controller=default, action=default
/kaka                       -> 404
/users                      -> controller=users, action = default
/users/insert               -> controller=users, action = insert
/users/update/id/8          -> controller=users, action = update, params = array(id=>8)
/users/kaka                 -> 404
/users/update/id            -> 400
/users/update/id/8/param    -> 400
/users/update/kaka/kaka     -> controller=users, action = update, params = array(kaka=>kaka)
*/

/*testing*/
$urls = array(
		"",
		"/",
		"/README.md",
		"kaka",
		"/kaka",
		"/users",
		"/users/insert",
		"/users/update/id/8",
		"/users/kaka",
		"/users/update/id",
		"/users/update/id/8/param",
		"/users/update/id/8/param/value/param2/value2/param3/value3",
		"/users/update/kaka/kaka");


// foreach($urls as $url){
	
// 	echo '<pre>';
// 	echo "--------------------------------------------------";
// 	echo "<p>URL: ".$url."</p>";
// 	echo "Result:</br>";
// 	print_r(parseUrl("http://www.domain.net".$url));
// 	echo '<pre>';
// }



/**
 * Get a fiendly url and check the correspondece with this pattern (domain.net/controller/action[/param/value][/param2/value2/...]) 
 * sets 
 * 
 * @param string $url
 * @return request taken from url with next structure
 * $array("controller" => "controller",
 *	 	 "action" => "action",
 *		 "parameters" => array("parameter_name" => "name",
 *							   "parameter_value" => "value")); 
 */

function parseUrl($url) 
{
	//set request structure
	$request = array("controller" => "",
					 "action" => "",
					 "parameters" => array()
	);

    // Parse $URI
	$parsed_url = parse_url($url);

	if(!isset($parsed_url["path"]))
		return $request;

	//Explode $URL
	$url_array = explode("/", $parsed_url["path"]);

    // 
		//[0] =>empty
		//[1] =>controller
		//[2] =>action
		//[3(+2)] => each not pair greather than 2 is a parameter name
		//[4(+2)] => each pair greather than 2 is a parameter value
	
	unset($url_array[0]);

	if(count($url_array) > 0){
		//check if is controller && assign
		$request["controller"] = isController($url_array[1]) ? $url_array[1]: false;
	}
	if(count($url_array) > 1){
		//check if is controller && assign
		$request["action"] = isAction($url_array[2]) ? $url_array[2] : false;
	}
	if(count($url_array) > 2){
		//get parameters && assign
		$params = array();
		for($i=3,$z=4 ;$i < count($url_array);$i += 2 ,$z += 2)
			$params[$url_array[$i]] =  $url_array[$z];
		$request["parameters"] = $params;
		
	}	
    
    return  $request ;
}






/**
 * Checks if a string matches exists as controller
 *  
 * @param string $controller is the controller name
 * @param string $controller_path is the path to the controller file folder
 * @return true if exists, false if not
 */

function isController($controller, 
    $controller_path = 'C:\www\formproject\modules\Application\src\Application\Controller'){

	$controllers = scandir($controller_path);

	unset($controllers[0]); //[.]
	unset($controllers[1]); //[..]
	
	
	foreach($controllers as $controller_file){
		if($controller == sanitizeFileName($controller_file))
			return true;
	}
	
	if($controllers)
		return in_array($controller, $controllers);
	else
		return false;

}

/**
 * Cleans filename path 
 * 
 * Ex: c:\file.php -> file
 * @param string $file
 * @return string $file strlowered file name
 * @return string $ext revome file extension
 */
function sanitizeFileName($file,$ext = ".php"){
	$file = basename($file,$ext);
	$file = strtolower($file);
	return $file;
}


/**
 * Checks if a string matches with a predefined actions array.
 * @param string $controller is the controller name
 * @return true if exists, false if not
 */
function isAction($action){
	$actions = array("select","insert","update","delete");
	return in_array($action, $actions);

}