<?php

$array = [
    'Bianca' => 9,
    'Layla' =>  7,
    'Arthur' => 8,
    'Victor' => 10
];

arsort($array);

print_r($array);


?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Pontos</th>
    </tr>
    <?php foreach ($array as $nome => $pontos ):?>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $pontos ?></td>
        </tr>
    <?php endforeach; ?>
</table>
