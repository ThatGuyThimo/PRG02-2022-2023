<?php namespace Demo\Person;

class Student extends Person
{
    /**
     * @param string $name
     * @param string $classNumber
     * @param int $number
     */
    public function __construct(
        string $name,
        public string $classNumber,
        public int $number,
    )
    {
    $this->name = $name;
    }
}