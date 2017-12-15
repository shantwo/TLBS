<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:26 AM
 */

namespace Tlbs\Models\Contributor;

use Tlbs\Interfaces\iCRUD;

class Contributor implements iCRUD
{
    /**
     * the identifier of the contributor
     * @var int
     */
    private $id;

    /**
     * User object attached to this contributor
     * @var User
     */
    private $user;

    /**
     * Nickname given to the contributor
     * @var string
     */
    private $nickname;

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