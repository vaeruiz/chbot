<?php
$array = [
    0=>'Me sacaron del grupo de WhatsApp de paracaidismo. Se ve que no caía bien.',
    1=>'¿Sabes cuánta leche da una vaca en su vida? Pues la misma que en bajada.',
    2=>'¿Cuál es el colmo de un peluquero? Descubrir que en la vida nada es permanente.'
];

$indiceAletario = array_rand($array);

echo "Aquí va un chiste: {$array[$indiceAletario]}";
?>
