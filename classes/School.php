<?php

class School{
    public $students=[],$name,$adress;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return array
     */
    public function getStudents()
    {
        return $this->students;
    }


    public function getStudentsByCourse($course){
        $studentsCourse=[];
        foreach ($this->students as $student){
            if($student->getCourse()==$course){
                $studentsCourse[]=$student;
            }
        }
        return $studentsCourse;
    }

    public function getStudentsByFacultet($fakultet){
        $studentsFacultet=[];
        foreach ($this->students as $student){
            if($student->getFacultet()==$fakultet){
                $studentsFacultet[]=$student;
            }
        }
        return $studentsFacultet;
    }

    public function AddStudent(Student $student){
        $this->students[]=$student;
    }

    public function RemoveStudent($name){
        foreach ($this->students as $key=>$student){
            if($student->getName()==$name){
                unset($this->students[$key]);
            }
        }
    }




}