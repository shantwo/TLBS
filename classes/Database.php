<?php

class Database
{
    private $host = HOST;
    private $user = USERNAME;
    private $pass = PASSWORD;
    private $dbname = DATABASE;

    private $dbh;
    private $error;

    private $stmt;

    /**
     * DatabaseClass constructor.
     */
    public function  __construct()
    {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // Create a new PDO instanace
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
            // Catch any errors
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }

    /**
     *
     * @param $query
     */
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Bind a value to a parameter for a query
     * @param $param
     * @param $value
     * @param null $type
     */
    public function bind($param, $value, $type = null){
        if (null === $type) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case null === $value:
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    /**
     * execute a query
     * @return mixed
     */
    public function execute(){
        return $this->stmt->execute();
    }

    /**
     * fetch multiple results
     * @return mixed
     */
    public function resultset(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * fetch single results
     * @return mixed
     */
    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * count rows
     * @return mixed
     */
    public function rowCount(){
        return $this->stmt->rowCount();
    }

    /**
     * get the last inserted id
     * @return string
     */
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    /**
     * begin a transaction
     * @return bool
     */
    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    /**
     * end a transaction
     * @return bool
     */
    public function endTransaction(){
        return $this->dbh->commit();
    }

    /**
     * cancel a transaction
     * @return bool
     */
    public function cancelTransaction(){
        return $this->dbh->rollBack();
    }

    /**
     * dump parameters
     * @return mixed
     */
    public function debugDumpParams(){
        return $this->stmt->debugDumpParams();
    }
}