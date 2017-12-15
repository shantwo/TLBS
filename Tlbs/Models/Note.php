<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 7:30 AM
 */

namespace Tlbs\Models;


use Tlbs\Interfaces\iCRUD;
use User;

class Note implements iCRUD
{
    /**
     * Identifier of the note
     * @var int
     */
    private $id;

    /**
     * title of the note
     * @var string
     */
    private $title;

    /**
     * content of the note
     * @var string
     */
    private $content;

    /**
     * User attached to this note
     * @var User
     */
    private $user;

    /**
     * Flag to check if a note is permanent(aka can not be deleted)
     * @var int
     */
    private $is_permanent;

    /**
     * flag to see if a note has been archived
     * @var int
     */
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