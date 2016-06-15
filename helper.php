<?php 
class ModHelloWorldHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */ 
	public static function getHello($params)
    {
		// $result = "Hello World"; -- direct variable assigning returns the value as well
		
	
		// Obtain a database connection
			$db = JFactory::getDbo();
			
/*		--- USED FOR RETRIVING by language direct compare ---
			// Retrieve the shout
			$query = $db->getQuery(true)
						->select($db->quoteName('hello'))
						->from($db->quoteName('#__helloworld'))
						->where('lang = ' . $db->Quote('en-GB'));

*/
		// Retrieve the shout - note we are now retrieving the id not the lang field.
			$query = $db->getQuery(true)
            ->select($db->quoteName('hello'))
            ->from($db->quoteName('#__helloworld'))
            ->where('id = '. $db->Quote($params)); // retriving from parameters

			// Prepare the query
			$db->setQuery($query);
			// Load the row.
			$result = $db->loadResult();
			// Return the Hello
			return $result;
    }

}
?>