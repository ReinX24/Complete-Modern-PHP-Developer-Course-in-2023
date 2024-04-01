<?php

declare(strict_types=1);

namespace App;

class School
{
    private $students = [];

    public function add(string $name, int $grade): void
    {
        // The $grade key points to an array that contains $name
        // This inner array will contain that students that are in that grade
        $this->students[$grade][] = $name;
    }

    public function grade($grade): array
    {
        // Returns an empty array if the $grade key is not found in students
        return $this->students[$grade] ?? [];
    }

    public function studentByGradeAlphabetical(): array
    {
        // Sorts an array with its keys
        ksort($this->students);

        // Returning a modified version of the array with sorted keys
        return array_map(function ($grade) {
            // The $grade variable contains the array where the students are 
            // stored in, sort the array of names in alphabetical order.
            sort($grade);

            return $grade;
        }, $this->students);
    }
}
