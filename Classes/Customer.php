<?php

	class Customer{

		private $id;
		private $nome;
		private $cpf;
		private $email;
		private $sexo;

        /**
         * @return mixed
         */
        public function getid()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setid($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNome()
        {
            return $this->nome;
        }

        /**
         * @param mixed $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        /**
         * @return mixed
         */
        public function getCpf()
        {
            return $this->cpf;
        }

        /**
         * @param mixed $cpf
         */
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getSexo()
        {
            return $this->sexo;
        }

        /**
         * @param mixed $sexo
         */
        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }
	}