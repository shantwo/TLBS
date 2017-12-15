<?php
/**
 * Copyright (c) 2017. Shantwo
 */

namespace Tlbs\Interfaces;

interface iCRUD
{

    public function Create($object);

    public function Read($id);

    public function Update($id);

    public function Destroy($id);

    public function ReadAll();


}