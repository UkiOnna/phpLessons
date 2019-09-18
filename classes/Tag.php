<?php

class Tag
{
    private $name, $isClosing, $body, $attributes = [];

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    public function __construct($name, $isClosing)
    {
        $this->name = $name;
        $this->isClosing = $isClosing;
    }

    public function setAttributes($attrs)
    {
        $this->attributes = $attrs;
    }

    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function getString()
    {
        if ($this->isClosing) {
            $str = "<" . $this->getName();
            if (count($this->attributes) > 0) {
                foreach ($this->attributes as $key => $value) {
                    $str .= " " . $key . "=" . '"' . $value . '"' . " ";
                }
                $str .= ">";
            }
            if ($this->body != null) {
                $str .= $this->body;
            }
            $str .= "</" . $this->name . ">";
        }
        else{
            $str = "<" . $this->getName();
            if (count($this->attributes) > 0) {
                foreach ($this->attributes as $key=>$value) {
                    $str .= " " . $key . "=" . '"' . $value . '"' . " ";
                }
                $str .= "/>";
            }
        }
        return $str;
    }
}