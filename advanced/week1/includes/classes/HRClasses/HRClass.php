<?php namespace Demo\HRClasses;

interface HRClass
{
   public function getStudents(): array;

   public function addStudent(array $studentRaw): void;
}