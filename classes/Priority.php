<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 11/23/2017
 * Time: 7:57 AM
 */

class Priority
{
    private $id;
    private $name;

    /**
     * Priority constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id = null, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public static function getAllPriorities(){
        $database = new Database();

        $database->query('
        SELECT *
        FROM tsk_priority
        ORDER BY pri_id ASC
        ');

        $database->execute();

        $results = $database->resultset();

        $result = array();

        foreach($results as $priorityDb){
            $priority = new Priority();
            $priority->setId($priorityDb['pri_id']);
            $priority->setName($priorityDb['pri_name']);

            $result[] = $priority;
        }

        return $result;
    }


}