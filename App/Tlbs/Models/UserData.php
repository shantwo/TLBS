<?php
/**
 * Created by IntelliJ IDEA.
 * User: Didier
 * Date: 12/15/2017
 * Time: 5:40 PM
 */

namespace Tlbs\Models;


use Tlbs\Interfaces\iCRUD;

class UserData implements iCRUD
{
    private $id;
    private $user;
    private $firstname;
    private $lastname;
    private $address;
    private $city;
    private $country;
    private $email;
    private $phone_home;
    private $phone_office;
    private $phone_mobile;
    private $birthdate;
    private $company;
    private $website;

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