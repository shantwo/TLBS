<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:35 AM
 */

namespace Tlbs\Models;


use Tlbs\Database;
use Tlbs\Interfaces\iCRUD;

class Priority implements iCRUD
{
    /**
     * identifier of the priority
     * @var int
     */
    private $id;

    /**
     * the name of the priority
     * @var string
     */
    private $name;

    /**
     * Name of the color class associated to the priority
     * @var string
     */
    private $colorName;

    /**
     * Hexadecimal value of the color associated to the priority
     * @var string
     */
    private $colorHex;

    /**
     * Priority constructor.
     * @param int $id
     * @param string $name
     * @param string $colorName
     * @param string $colorHex
     */
    public function __construct($id = null, $name = '', $colorName = '', $colorHex = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->colorName = $colorName;
        $this->colorHex = $colorHex;
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
     * @return string
     */
    public function getColorName()
    {
        return $this->colorName;
    }

    /**
     * @param string $colorName
     */
    public function setColorName($colorName)
    {
        $this->colorName = $colorName;
    }

    /**
     * @return string
     */
    public function getColorHex()
    {
        return $this->colorHex;
    }

    /**
     * @param string $colorHex
     */
    public function setColorHex($colorHex)
    {
        $this->colorHex = $colorHex;
    }

    /**
     * @param Priority $priority
     */
    public function Create($priority)
    {
        $database = Database::getInstance();

        $database->query('INSERT INTO tlbs_priority (pri_name, pri_color_name, pri_color_hex) VALUES (:name, :color_name, :color_hex)');
        $database->bind(':name',$priority->getName());
        $database->bind(':color_name',$priority->getColorName());
        $database->bind(':color_hex',$priority->getColorHex());
        $database->execute();
    }

    /**
     * @param Priority $priority
     * @return Priority
     */
    public function Read($priority)
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_priority WHERE pri_id = :id');
        $database->bind(':id', $priority->getId());
        $database->execute();
        $result = $database->single();
        $priority->setId($result{'pri_id'});
        $priority->setName($result{'pri_name'});
        $priority->setColorName($result{'pri_color_name'});
        $priority->setColorHex($result{'pri_color_hex'});
        return $priority;
    }


    /**
     * @param Priority $priority
     */
    public function Update($priority)
    {
        $database = Database::getInstance();

        $database->query('UPDATE tlbs_priority SET pri_name = :name, pri_color_name = :color_name, pri_color_hex = :color_hex  WHERE pri_id = :id');
        $database->bind(':id', $priority->getId());
        $database->bind(':name', $priority->getName());
        $database->bind(':color_name', $priority->getColorName());
        $database->bind(':color_hex', $priority->getColorHex());
        $database->execute();
    }

    /**
     * @param Priority $priority
     */
    public function Destroy($priority)
    {
        $database = Database::getInstance();

        $database->query('DELETE FROM tlbs_priority WHERE pri_id = :id');
        $database->bind(':id', $priority->getId());
        $database->execute();
    }

    public function ReadAll()
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_priority');
        $database->execute();
        $results = $database->resultset();

        $resultSet = [];

        foreach ($results as $key => $Priority){
            $temp = new self();

            $temp->setId($Priority['pri_id']);
            $temp->setName($Priority['pri_name']);
            $temp->setColorName($Priority['pri_color_name']);
            $temp->setColorHex($Priority['pri_color_hex']);
            $resultSet[$key] = $temp;
        }

        return $resultSet;
    }


}