<?php

/**
 * Created by PhpStorm.
 * User: Raymond Phua
 * Date: 8-9-2016
 * Time: 10:11
 */
class Exercise
{
    private $id;
    private $name;
    private $status;

    function __construct($id, $name, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStatus()
    {
        return $this->status;
    }
}