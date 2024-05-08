<?php

// Definição do trait
trait Log {
    public function log($message) {
        echo '[' . date('Y-m-d H:i:s') . '] ' . $message . "\n";
    }
}

// Exemplo de uso do trait em uma classe
class User {
    // Usando o trait Log
    use Log;

    public function performAction() {
        // Chamando o método log do trait
        $this->log('Performed an action.');
    }
}

// Criando uma instância da classe User
$user = new User();
$user->performAction(); // Saída: [2024-05-08 12:00:00] Performed an action.

/*

Em PHP, os traits são uma forma de reutilizar métodos em várias classes. Eles permitem que você compartilhe métodos entre classes sem usar herança múltipla. Aqui está um exemplo simples de como você pode definir e usar um trait em PHP:

Neste exemplo, o trait Log possui um método log que adiciona um registro de log com a data e hora atuais. A classe User usa esse trait com a declaração use Log, permitindo que a classe User acesse o método log. Dessa forma, o método performAction da classe User pode chamar o método log do trait para registrar a ação realizada.

*/