<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:35 AM
 */

namespace Tlbs\Models;


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
     * Name of the color associated to the priority
     * @var string
     */
    private $colorName;

    /**
     * Hexadecimal value of the color associated to the priority
     * @var string
     */
    private $colorHex;

    public function Create($object)
    {
        // TODO: Implement Create() method.
    }

    public function Read($id)
    {
        // TODO: Implement Read() method.
    }

    public function Update($id)
    {
        // TODO: Implement Update() method.
    }

    public function Destroy($id)
    {
        // TODO: Implement Destroy() method.
    }

    public function ReadAll()
    {
        // TODO: Implement ReadAll() method.
    }


}