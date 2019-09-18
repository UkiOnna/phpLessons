<?php
class Number {
    private $num;

    public function __construct($num=null){
        $this->num=$num;
    }

    function plus($num){
        return $this->num+=$num;
    }

    function minus($num){
        return $this->num-=$num;
    }

    function mult($num){
        return $this->num*=$num;
    }
    function delenie($num){
        return $this->num/=$num;
    }

    public function getNum()
    {
        return $this->num;
    }
    public function setNum($num)
    {
        $this->num = $num;
    }

}