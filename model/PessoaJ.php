<?php
require_once 'Pessoa.php';
class PessoaJ extends Pessoa{
    private $nomeFantasia;
    private $inscEstadual;
    private $cnpj;

    public function PessoaJ(){
        
    }

   

    /**
     * Get the value of nomeFantasia
     */ 
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Get the value of inscEstadual
     */ 
    public function getInscEstadual()
    {
        return $this->inscEstadual;
    }

    /**
     * Get the value of cnpj
     */ 
    public function getCnpj()
    {
        return $this->cnpj;
    }
    

    /**
     * Set the value of nomeFantasia
     *
     * @return  self
     */ 
    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }
}