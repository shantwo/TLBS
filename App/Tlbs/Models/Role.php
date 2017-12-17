<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:46 AM
 */

namespace Tlbs\Models;


use Tlbs\Database;
use Tlbs\Interfaces\iCRUD;

class Role implements iCRUD
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Role constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id = null, $name = '')
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @param Role $role
     */
    public function Create($role)
    {
        $database = Database::getInstance();

        $database->query('INSERT INTO tlbs_role (rol_name) VALUES (:role)');
        $database->bind(':role',$role->getName());
        $database->execute();
    }

    /**
     * @param Role $role
     * @return Role
     */
    public function Read($role)
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_role WHERE rol_id = :id');
        $database->bind(':id', $role->getId());
        $database->execute();
        $result = $database->single();
        $role->setId($result{'rol_id'});
        $role->setName($result{'rol_name'});
        return $role;
    }

    /**
     * @param Role $role
     */
    public function Update($role)
    {
        $database = Database::getInstance();

        $database->query('UPDATE tlbs_role SET rol_name = :name WHERE rol_id = :id');
        $database->bind(':id', $role->getId());
        $database->bind(':name', $role->getName());
        $database->execute();
    }

    /**
     * @param Role $role
     */
    public function Destroy($role)
    {
        $database = Database::getInstance();

        $database->query('DELETE FROM tlbs_role WHERE rol_id = :id');
        $database->bind(':id', $role->getId());
        $database->execute();
    }

    public function ReadAll()
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_role');
        $database->execute();
        $results = $database->resultset();

        $resultSet = [];

        foreach ($results as $key => $Role){
            $temp = new self();

            $temp->setId($Role['rol_id']);
            $temp->setName($Role['rol_name']);
            $resultSet[$key] = $temp;
        }

        return $resultSet;
    }


}