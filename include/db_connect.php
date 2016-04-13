<?php

/**
 * Handling database connection
 *
 * @author Ravi Tamada
 * @link URL Tutorial link
 */
class DbConnect {

    private $conn;

    function __construct() {        
    }

    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
        include_once dirname(__FILE__) . '/config.php';

        // Connecting to mysql database
        $this->conn = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if (mysql_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysql_connect_error();
        }

        // returing connection resource
        return $this->conn;
    }

}

?>
