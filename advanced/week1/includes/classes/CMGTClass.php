<?php

class CMGTClass
{

    public string $name = 'klas 1';
    public string $slogan = 'bananen zijn gezond';
    public string $teacher = 'Antwan';
    private array $students = [];

    /**
     * @return Student[]
     */
    public function getStudents(): array {
        return $this->students;
    }

    /**
     * @param array $value
     * @return void
     */
    public function addStudent(array $value): void
    {
        $this->students[] = new Student(
            $value['name'],
            $value['classNumber'],
            $value['number']
        );
    }

    /**
     * @return int
     */
    public function getTotalStudents(): int
    {
        return count($this->students);
    }
    //addStudent()
    //getTotalStudents()
}