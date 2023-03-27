<?php

    $qtdPatinho = readline("Digite a quantidade de patinhos: (Maior que 1 e menor que 10): ");

    if($qtdPatinho >= 1 || $qtdPatinho <= 10) {
        for($i = $qtdPatinho; $i > 0; $i--) {
            if($i == 1) {
                echo $i ." Patinho foi passear \n Além das montanhas \n Para brincar \n A mamãe gritou: Quá, Quá, Quá, Quá \n Mas nenhum patinho voltou de lá\n\n";
            } else {
            echo $i ." Patinhos foram passear \n Além das montanhas \n Para brincar \n A mamãe gritou: Quá, Quá, Quá, Quá \n Mas só ".$i-1 ." patinhos voltou de lá\n\n";
            }
        }
        
        echo $qtdPatinho != 1 ?
        "A mamãe patinha foi procurar
        Além das montanhas
        Na beira do mar
        A mamãe gritou: Quá, Quá, Quá, Quá
        E os $qtdPatinho patinhos voltaram de lá." : 

        "A mamãe patinha foi procurar
        Além das montanhas
        Na beira do mar
        A mamãe gritou: Quá, Quá, Quá, Quá
        E $qtdPatinho patinho voltou de lá.";

    } else {
        print 'Quantidade inválida!';
    }





    // https://www.youtube.com/watch?v=lEi306OzqTk