<?php

namespace Tlbs\Models;


use Tlbs\Interfaces\iCRUD;

class Task implements iCRUD
{
    /**
     * the identifier of the task
     * @var int
     */
    private $id;

    /**
     * the title of the task
     * @var string
     */
    private $title;

    /**
     * the description of the task
     * @var string
     */
    private $description;

    /**
     * flag to see if a task is archived
     * @var int
     */
    private $is_archived;

    /**
     * priority object attached to the task
     * @var Priority
     */
    private $priority;

    /**
     * the date on which the task is due
     * @var string
     */
    private $due_date;

    /**
     * the date on which the task has been created
     * @var string
     */
    private $creation_date;

    /**
     * the date on which the task has been completed
     * @var string
     */
    private $closure_date;

    /**
     * Object User attached to this task
     * @var User
     */
    private $user;

    /**
     * flag to see if a task has been completed / finished
     * @var int
     */
    private $is_completed;

    /**
     * Object TaskType attached to this task
     * @var TaskType
     */
    private $task_type;

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