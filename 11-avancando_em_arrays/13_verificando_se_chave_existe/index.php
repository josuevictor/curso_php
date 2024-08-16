  <?php

        $arr = [
            'nome' => "Bianca",
            'idade' => 23
        ];

        if (array_key_exists('nome', $arr))
        {
            echo "A chave existe";
        }
        else
        {
            echo "A chave nao existe";
        }

        if (isset($arr['idade']))
        {
            echo "A chave existe";
        }
        else
        {
            echo "A chave nao existe";
        }