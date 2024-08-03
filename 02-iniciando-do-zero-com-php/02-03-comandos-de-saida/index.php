<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h4>Weslley Gostoso</h4>";
$hoje = Date("Y-m-d H:i:s");
$hoje_object = new DateTime($hoje);
$hoje_formatado = $hoje_object->format("d/m/Y");
echo $hoje_formatado;

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print "<h3>Melhorando o meu PHP</h3>";
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$pessoas = array("p1" => "Fulano", "p2" => "Cicrano", "p3" => "Deltrano");

echo "<pre>";
print_r($pessoas);
echo "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);


/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);


/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
