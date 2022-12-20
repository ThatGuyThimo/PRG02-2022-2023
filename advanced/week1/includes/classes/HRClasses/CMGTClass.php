<?php namespace Demo\HRClasses;

use Demo\Person\Student;


class CMGTClass implements HRClass
{

    public string $name = 'klas 1';
    public string $slogan = 'bananen zijn gezond';
    public string $teacher = 'Antwan';
    private array $students = [];
    public const MAX_STUDENTS = 25;

    /**
     * @return Student[]
     */
    public function getStudents(): array {
        return $this->students;
    }

    /**
     * @param array $studentRaw
     * @return void
     * @throws \Exception
     */
    public function addStudent(array $studentRaw): void
    {
        $this->students[] = new Student(
            $studentRaw['name'],
            $studentRaw['classNumber'],
            $studentRaw['number']
        );

        if ($this->getTotalStudents() > self::MAX_STUDENTS) {
            throw new \Exception('to many students max ' . self::MAX_STUDENTS);
        }
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