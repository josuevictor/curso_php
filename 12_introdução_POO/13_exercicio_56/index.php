<?php

class Pessoa {
    public $nome;

    protected function falar()
    {
        echo "Olá, turma!";
    }
}

class Professor extends Pessoa{
    public $disciplina;
    public function professorFalar()
    {
        $this->falar();
    }
    public function setDisciplina($disciplina)
    {
        $this->nome = $disciplina;
    }

}

$professor1 = new Professor();
$professor1->setDisciplina('Prgramação');

$professor1->professorFalar();