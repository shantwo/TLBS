<?php

namespace Tlbs\Models;

use Tlbs\Interfaces\iCRUD;

class User implements iCRUD
{
    private $id;
    private $email;
    private $password;
    private $role;

    /**
     * User constructor.
     * @param $id
     * @param $email
     * @param $password
     * @param $role
     */
    public function __construct($id = null, $email = null, $password = null, $role = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $this->hashPassword($password);
        $this->role = 3;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return null
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param null $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }


    /**
     * Create a user inside Database
     * @param User $user
     */
    public function Create($user)
    {
        $database = new Database();

        $database->query('INSERT INTO tlbs_user (usr_email, usr_password, role_rol_id) VALUES (:email, :password, :role)');
        $database->bind(':email', $user->getEmail());
        $database->bind(':password', $user->getPassword());
        $database->bind(':role',$user->getRole());
        $database->execute();


    }

    /**
     * @param User $user
     */
    public function Read($user)
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

    private function hashPassword($password){
        return password_hash($password,PASSWORD_BCRYPT, ['cost' => 12]);
    }
}