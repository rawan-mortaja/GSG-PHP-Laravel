<?php

namespace Models;

require_once __DIR__ . '/Course.php';
class Student
{
    private readonly int $id;
    private $name;
    private $email;
    private $courses;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->courses = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($student)
    {
        return $student;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getCourses()
    {
        return $this->courses;
    }

    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }
}
