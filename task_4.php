<?php
$studentGrades = array(
    array("Math" => 90, "English" => 85, "Science" => 78),
    array("Math" => 75, "English" => 92, "Science" => 88),
    array("Math" => 68, "English" => 78, "Science" => 85)
);
function calculateAverageGrades($grades) {
    foreach ($grades as $student) {
        $totalGrade = 0;
        $numSubjects = count($student);
        foreach ($student as $subject => $grade) {
            $totalGrade += $grade;
        }
        $averageGrade = $totalGrade / $numSubjects;
        echo "Average Grade: " . round($averageGrade, 2) . "\n";
    }
}
calculateAverageGrades($studentGrades);