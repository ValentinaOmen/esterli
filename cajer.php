<?php
iniciarCajero();

function retirarDinero() {
    global $saldo;
    $cantidad = readline("Ingrese la cantidad a retirar: ");
    if ($cantidad <= $saldo) {
        $saldo -= $cantidad;
        echo "Dinero retirado exitosamente.\n";
    } else {
        echo "Falra de dino en tu cuenta.\n";
    }
}
function ingresarDinero() {
    global $saldo;
    $cantidad = readline("Ingrese la cantidad a depositar: ");
    $saldo += $cantidad;
    echo "Dinero ingresado exitosamente: \n";
}

function consultarSaldo() {
    global $saldo;
    echo "Saldo actual:\n";
}

function iniciarCajero() {
    global $saldo;

    while (true) {
        echo "Seleccione una opción:\n";
        echo "1. Ingresar dinero\n";
        echo "2. Retirar dinero\n";
        echo "3. Consultar saldo\n";
        echo "4. Salir\n";

        $opcion = readline("Ingrese su opción: ");

        switch ($opcion) {
            case '1':
                ingresarDinero();
                break;
            case '2':
                retirarDinero();
                break;
            case '3':
                consultarSaldo();
                return;
            default:
                echo "Opción no válida.\n";
        }
    }
}