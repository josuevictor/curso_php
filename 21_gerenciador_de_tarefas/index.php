<?php

    class Task{

        public $title;
        public $description;
        public $completed;

        public function __construct($title, $description, $completed)
        {
            $this->title = $title;
            $this->description = $description;
            $this->completed = $completed;
        }

        public function markAsCompleted($completed)
        {
            $this->completed = 1;
        }

        public function markAsIncomplete($completed)
        {
            $this->completed = 0;
        }

        public function getTitle()
        {
            return $this->title . PHP_EOL;
        }

        public function getDescription()
        {
            return $this->description . PHP_EOL;
        }

        public function isCompleted()
        {
            if ($this->completed == 0)
            {
                echo "tarefa não concluída" . PHP_EOL;
            } elseif ($this->completed == 1)
            {
                echo 'tarefa concluída';
            }

        }

    }

    $tarefa1 = new Task('lavar banheiro', 'sábado de manhã', 0);

    echo $tarefa1->getTitle();

    echo $tarefa1->getDescription();

    echo $tarefa1->isCompleted();

    $tarefa1->markAsCompleted(1);

    echo $tarefa1->isCompleted();
