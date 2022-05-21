<?php
 public function numerosPrimos($inicial = null, $final = null)
    {
        $numerosPrimos = [];

        $inicial = intval($inicial);
        $final   = intval($final);

        if ($inicial <= 1 && $inicial <= $final) {
            return "Por favor informe numero maior que 2 para Iniciar e o Final maior que Inicial";
        }

        for ($i = $inicial; $i < $final; $i++) {

            $contador = 0;

            for ($j = $i; $j >= 1; $j--) {

                if (($i % $j) == 0) {
                    $contador++;
                }
            }

            if ($contador == 2) {
                $numerosPrimos['primos'][] = $i;
            }
        }

        return isset($numerosPrimos['primos']) ? $numerosPrimos['primos'] : 'Não encontramos Numeros Primos';
    }
?>