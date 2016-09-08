<?php

/**
 * Created by PhpStorm.
 * User: Raymond Phua
 * Date: 8-9-2016
 * Time: 10:07
 */
class Student
{
    private $id;
    private $firstname;
    private $lastname;
    private $class;
    private $exercises;

    function __construct($id, $firstname, $lastname, $class)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->class = $class;
    }

    //Getters
    public function getId()
    {
        return $this->id;
    }

    public function getFullName()
    {
        return $this->firstname." ".$this->lastname;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function getExercises()
    {
        return $this->exercises;
    }

    //Setters
    public function setExercises($exercises) {
        $this->exercises = $exercises;
    }
}