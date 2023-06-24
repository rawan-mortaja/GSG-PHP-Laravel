<?php
namespace Managers;

use Models\Student;
use Traits\Loggable;

class Managers
{
    use Loggable;

    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
        $this->log('Student added: ' . $student->getName());
    }

    public function getStudentById($id)
    {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                return $student;
            }
        }

        return null;
    }


    public function updateStudent(Student $student)
    {
        $this->log('Student updated: ' . $student->getName());

        for ($i = 0; $i < count($this->students); $i++) {
            if ($this->students[$i]->getId() == $student->getId()) {
                $this->students[$i] = $student;
                break;
            }
        }
    }

    public function deleteStudent($id)
    {
        $student = $this->getStudentById($id);

        if ($student) {
            $this->log('Student deleted: ' . $student->getName());
            unset($this->students[$id]);
        }
    }
}