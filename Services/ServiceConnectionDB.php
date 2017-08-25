<?php

    class ServiceConnectionDB{

        private $dbConn;

        /**
         * ServiceConnectionDB constructor.
         * @param $dbConn
         */
        public function __construct(\PDO $dbConn){
            $this->dbConn = $dbConn;
        }


        /**
         * insert - Inserts the data in the entities of the database
         *
         * @access public
         * @param string $table - Name of the table in the database
         * @param array $column - Provide the names of the columns
         */
        public function insert($table, $column){
            try {
                ksort($column);

                $fieldNames = implode('`, `', array_keys($column));
                $fieldValues = ':' . implode(', :', array_keys($column));

                $query = "INSERT INTO $table(`$fieldNames`)VALUES($fieldValues)";

                $stmt = $this->dbConn->prepare($query);

                foreach ($column as $key => $value){
                    $stmt->bindValue(":$key", $value);
                }

                $stmt->execute();

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        /**
         * getAll - Fetch all information for a certain entity
         *
         * @access public
         * @param $query
         * @param array $columnh - Columns that will be returned
         * @param int $fetchMode
         * @return array - Return query
         */
        public function getAll($query, $column = array(), $fetchMode = PDO::FETCH_ASSOC){
            try{

                $stmt = $this->dbConn->prepare($query);

                foreach ($column as $key => $value) {
                    $stmt->bindValue("$key", $value);
                }

                $stmt->execute();

                return $stmt->fetchAll($fetchMode);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function find($query, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
            try{

                $stmt = $this->dbConn->prepare($query);

                echo $query;

                foreach ($array as $key => $value) {
                    $stmt->bindValue("$key", $value);
                }

                $stmt->execute();

                return $stmt->fetch($fetchMode);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }