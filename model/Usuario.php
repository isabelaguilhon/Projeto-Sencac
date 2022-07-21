<?php
    class Usuario {
        private $idUsuario;
        private $nomeUsuario;
        private $usuario;
        private $senha;

        public function Usuario(){

        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        public function getNomeUsuario()
        {
                return $this->nomeUsuario;
        }

        public function getUsuario()
        {
                return $this->usuario;
        }

        public function getSenha()
        {
                return $this->senha;
        }

        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        public function __toString() {
            $user = "Usuário: <br/>"
                . " - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
                . " - Usuário: " . $this->getUsuario() . "<br/>";
            return $user;
    }
}
?>