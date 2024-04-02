<?php

declare(strict_types=1);

namespace App;

class School
{
    private $students = [];

    public function add(string $name, int $grade): void
    {
        $this->students[$grade][] = $name;
    }

    public function grade(int $grade): array
    {
        return $this->students[$grade] ?? [];
    }

    public function studentsByGradeAlphabetically()
    {
        ksort($this->students);
        return array_map(function ($grade) {
            // Sorts array of student elements in each grade
            sort($grade);
            return $grade;
        }, $this->students);
    }
}
