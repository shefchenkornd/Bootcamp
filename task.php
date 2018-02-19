<?php

class Task{
    public $desc;

    public $completed = false;

    public function __construct($desc)
    {
        $this->desc = $desc;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Go to the store');

$task2 = new Task('Pick up groceries');

$task->complete();

// php index.php
var_dump($task->completed);