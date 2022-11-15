<?php

class Student
{
    /**
     * @param string $name
     * @param string $classNumber
     * @param int $number
     */
    public function __construct(
        public string $name,
        public string $classNumber,
        public int $number,
    )
    {

    }
}