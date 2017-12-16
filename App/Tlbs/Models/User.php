<?php

namespace Tlbs\Models;

use Tlbs\Database;
use Tlbs\Interfaces\iCRUD;

class User implements iCRUD
{
    /**
     * ID of the User
     * Unique identifier of the user. Null for a new user as it will be generated inside the database
     * @var int|null
     */
    private $id;

    /**
     * Email of the User
     * Email of the User, should be unique
     * @var string
     */
    private $email;

    /**
     * Password of the User, should always be hashed before recording inside Db
     * @var bool|string
     */
    private $password;

    /**
     * Role of the user
     * @var null|Role
     */
    private $role;

    /**
     * User constructor,
     * Construct the object User. When a new one is created it is null and need the parameters to be set before usage
     *
     * @param int $id
     * @param string $email
     * @param string $password
     * @param Role $role
     */
    public function __construct($id = null, $email = '', $password = '', $role = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }


    /**
     * Create a user inside Database,
     * This method use a User object as parameters, use its good parameters to add a nez element User in the database
     * @param User $user
     */
    public function Create($user)
    {
        $database = Database::getInstance();

        $user->password = $user->hashPassword($user->password);
        $user->role = 3;

        $database->query('INSERT INTO tlbs_user (usr_email, usr_password, role_rol_id) VALUES (:email, :password, :role)');
        $database->bind(':email', $user->getEmail());
        $database->bind(':password', $user->getPassword());
        $database->bind(':role',$user->getRole()->getId());
        $database->execute();

    }

    /**
     * @param User $user
     * @return User
     */
    public function Read($user)
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_user WHERE usr_id = :id');
        $database->bind(':id', $user->getId());
        $database->execute();
        $result = $database->single();
        $user->setPassword($result['usr_password']);
        $user->setEmail($result['user_email']);
        $user->role = $result['role_rol_id'];
        return $user;
    }

    /**
     * @param User $user
     */
    public function Update($user)
    {
        $database = Database::getInstance();

        $database->query('UPDATE tlbs_user SET usr_id=:id, usr_password = :password, usr_email = :email, role_rol_id = :role');
        $database->bind(':id', $user->getId());
        $database->bind(':password', $user->getPassword());
        $database->bind(':email', $user->getEmail());
        $database->bind(':role',$user->getRole()->getId());
        $database->execute();

    }

    /**
     * @param User $user
     */
    public function Destroy($user)
    {
        $database = Database::getInstance();

        $database->query('DELETE FROM tlbs_user WHERE usr_id = :id');
        $database->bind(':id', $user->getId());
        $database->execute();
    }

    public function ReadAll()
    {
        $database = Database::getInstance();

        $database->query('SELECT * FROM tlbs_user');
        $database->execute();
        $results = $database->resultset();

        $resultSet = [];

        foreach ($results as $key => $User){
            $temp = new self();
            $temp->setId($User['usr_id']);
            $temp->setEmail($User['usr_email']);
            $temp->setPassword($User['usr_password']);
            $temp->setRole($User['role_rol_id']);
            $resultSet[$key] = $temp;
        }

        return $resultSet;

    }

    /**
     * Hash a password
     * @param $password
     * @return bool|string
     */
    private function hashPassword($password){
        return password_hash($password,PASSWORD_BCRYPT, ['cost' => 12]);
    }
}