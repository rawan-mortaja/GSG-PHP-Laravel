<?php

use Managers\Managers;
use Models\Course;
use Models\Student;

$managerr = new Managers();

$phpCourse = new Course(1, 'PHP');
$laravelCourse = new Course(2, 'Laravel');

$student1 = new Student(1, 'Rawan', 'rawan@gmail.com');
$student1->addCourse($phpCourse);
$student1->addCourse($laravelCourse);

$student2 = new Student(2, 'Mohammed', 'mohammed@gmail.com');
$student2->addCourse($phpCourse);

$managerr->addStudent($student1);
$managerr->addStudent($student2);

$student1->addCourse(new Course(3, 'BackEnd'));
$manager->updateStudent($student1);

$managerr->deleteStudent(2);

$retrievedStudent = $managerr->getStudentById(1);
if ($retrievedStudent) {
    echo "Retrieved student: {$retrievedStudent->getName()}\n";
    echo "Email: {$retrievedStudent->getEmail()}\n";
    echo "Courses:\n";
    foreach ($retrievedStudent->getCourses() as $course) {
        echo "- {$course->getName()}\n";
    }
} else {
    echo "Student not found.\n";
}
