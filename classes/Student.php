<?php

include_once "BasePerson.php";

class Student extends BasePerson
{
    protected $marks = [], $course, $facultet;

    /**
     * @return array
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * @param array $marks
     */
    public function setMarks($marks)
    {
        $this->marks = $marks;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getFacultet()
    {
        return $this->facultet;
    }

    /**
     * @param mixed $facultet
     */
    public function setFacultet($facultet)
    {
        $this->facultet = $facultet;
    }

    public function getStudentsMarksBySubject($subject)
    {
        $studentMarks = [];
        foreach ($this->marks as $key => $value) {
            if ($key == $subject) {
                $studentMarks[] = $value;
            }
        }
        return $studentMarks;
    }

    public function getAverageMarksBySubject($subject){
        $avg=0;
        foreach ($this->getStudentsMarksBySubject($subject) as $mark){
            $avg+=$mark;
        }
        return $avg/count($this->getStudentsMarksBySubject($subject));
    }
}