<?php


class Celular {
    private $nome;
    private $marca;
    private $tam_tel;
    private $hd;
    private $ram;
    private $preco;
    
    function __construct($nome, $marca, $tam_tel, $hd, $ram, $preco) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->tam_tel = $tam_tel;
        $this->hd = $hd;
        $this->ram = $ram;
        $this->preco = $preco;
    }

    function getNome() {
        return $this->nome;
    }

    function getMarca() {
        return $this->marca;
    }

    function getTam_tel() {
        return $this->tam_tel;
    }

    function getHd() {
        return $this->hd;
    }

    function getRam() {
        return $this->ram;
    }

    function getPreco() {
        return $this->preco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setTam_tel($tam_tel) {
        $this->tam_tel = $tam_tel;
    }

    function setHd($hd) {
        $this->hd = $hd;
    }

    function setRam($ram) {
        $this->ram = $ram;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }
}

?>
