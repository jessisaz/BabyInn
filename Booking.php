<?php
 
class Booking
{
 
    private $dbh;
 
    private $bookingsTableName = 'bookings';
 
    /**
     * Booking constructor.
     * @param string $database
     * @param string $host
     * @param string $databaseUsername
     * @param string $databaseUserPassword
     */
    public function __construct($database, $host, $databaseUsername, $databaseUserPassword)
    {
        try {
 
            $this->dbh =
                new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $database),
                    $databaseUsername,
                    $databaseUserPassword
                );
 
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function index()
    {
    $statement = $this->dbh->query('SELECT * FROM ' . $this->bookingsTableName);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    


}