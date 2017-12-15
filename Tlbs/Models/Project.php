<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:40 AM
 */

namespace Tlbs\Models;

use Tlbs\Interfaces\iCRUD;

class Project implements iCRUD
{
    private $id;
    private $name;
    private $icon;
    private $creator;
    private $creation_date;
    private $is_deleted;

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