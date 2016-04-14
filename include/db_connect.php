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
        //$this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, 3306);
        $this->conn = mysqli_connect('gcmchat.c81l6jttxgta.us-east-1.rds.amazonaws.com', 'root', '2439Lona', 'gcm_chat', 3306);
        // $dsn = 'mysql:host=gcmchat.c81l6jttxgta.us-east-1.rds.amazonaws.com;port=3306;dbname=gcm_chat';
        // $username = 'root';
        // $password = '2439Lona';

        // $this->conn = new PDO($dsn, $username, $password);

        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // returing connection resource
        return $this->conn;
    }

}

?>
