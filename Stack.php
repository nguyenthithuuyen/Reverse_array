<?php


class Stack
{
    protected $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function push($element)
    {
        array_push($this->stack, $element);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            echo "Ngan xep khong con cho trong";
        } else {
            return array_pop($this->stack);
        }
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}