<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/4/2017
 * Time: 8:26 PM
 */

class User
{
    private $id;
    private $email;
    private $password;

    /**
     * User constructor.
     * @param $id
     * @param $email
     * @param $password
     */
    public function __construct($id = null, $email = '', $password = '')
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
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

    public static function registerNewUser($User){
        $database = new Database();

        $database->query('INSERT INTO tlbs_user (usr_email, usr_password) VALUES (:email, :password)');
        $database->bind(':email', $User->getEmail());
        $database->bind(':password', $User->getPassword());
        $database->execute();
    }

    public static function hashPassword($password){
        return password_hash($password,PASSWORD_BCRYPT, ['cost' => 12]);
    }

    public static function verifyPassword($hash){
        return password_verify('immortal', $hash);
    }

    public static function CheckIfEmailExist($email){
        $database = new Database();

        $database->query('SELECT * FROM tlbs_user WHERE usr_email = :email');
        $database->bind(':email', $email);
        $database->execute();
        return $database->single();
    }

    public static function getUserId($email){
        $database = new Database();

        $database->query('SELECT usr_id FROM tlbs_user WHERE usr_email = :email');
        $database->bind(':email', $email);
        $database->execute();
        return $database->single();
    }
}

