<?php

// Classe ContaCorrente
class ContaCorrente {
    public $saldo;

    public function definirSaldoInicial($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente para saque de R$ $valor.\n";
        }
    }
}

// Classe TestarContaCorrente
class TestarContaCorrente {

    public static function main() {
        $novaConta = new ContaCorrente();
        $novaConta->definirSaldoInicial(100);
        echo "Saldo após definir saldo inicial: R$ " . $novaConta->saldo . "\n";

        $novaConta->sacar(5);
        echo "Saldo após saque de 500 reais: R$ " . $novaConta->saldo . "\n";

        $novaConta->depositar(7);
        echo "Saldo após depósito de 50 reais: R$ " . $novaConta->saldo . "\n";

        $novaConta->sacar(1);
        echo "Saldo após saque de 600 reais: R$ " . $novaConta->saldo . "\n";
    }
}

// Executando o método main
TestarContaCorrente::main();

?>
