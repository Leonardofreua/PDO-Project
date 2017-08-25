<?php

	class Customer{

		private $idCliente;
		private $nome;
		private $cpf;
		private $email;
		private $sexo;
		private $dbConn;

        /**
         * @return mixed
         */
        public function getIdCliente()
        {
            return $this->idCliente;
        }

        /**
         * @param mixed $idCliente
         */
        public function setIdCliente($idCliente)
        {
            $this->idCliente = $idCliente;
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

         /**
          * Register customers
          */
       /* public function insertCustomers(){
            try {
                $query = 'INSERT INTO cliente(nome, 
                                              cpf,
                                              email,
                                              sexo)VALUES(:nome, :cpf, :email, :sexo)';

                $stmt = $this->dbConn->prepare($query);

                $stmt->bindValue(':nome', $this->getNome());
                $stmt->bindValue(':cpf', $this->getCpf());
                $stmt->bindValue(':email', $this->getEmail());
                $stmt->bindValue(':sexo', $this->getSexo());

                $stmt->execute();

                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function getAllCustomers(){
            try{
                $query = "SELECT * FROM cliente";

                $stmt = $this->dbConn->prepare($query);
                $stmt->execute();

                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }

        public function findCustomer($idCliente){
            try{
                $query = "SELECT * FROM cliente WHERE idCliente=:idCliente";

                $stmt = $this->dbConn->prepare($query);

                $stmt->bindValue(':idCliente', $idCliente);

                $stmt->execute();

                return $stmt->fetch(\PDO::FETCH_ASSOC);

            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }


        public function updateCustomer(){
            try{
                $query = "UPDATE cliente SET nome=:nome, 
                                                 cpf=:cpf, 
                                                 email=:email, 
                                                 sexo=:sexo
                              WHERE idCliente=:idCliente";

                $stmt = $this->dbConn->prepare($query);

                $stmt->bindValue(':idCliente', $this->getIdCliente(), \PDO::PARAM_INT);
                $stmt->bindValue(':nome', $this->getNome());
                $stmt->bindValue(':cpf', $this->getCpf());
                $stmt->bindValue(':email', $this->getEmail());
                $stmt->bindValue(':sexo', $this->getSexo());

                $stmt->execute();

                return true;

            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }

        public function deleteCustomer($idCliente){
            try{
                $query = "DELETE FROM cliente WHERE idCliente=:idCliente";

                $stmt = $this->dbConn->prepare($query);

                $stmt->bindValue(':idCliente', $idCliente);

                $stmt->execute();

                return true;

            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }*/
	}