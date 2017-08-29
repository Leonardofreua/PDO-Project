<?php

    class ServiceConnectionDB{

        private $dbConn;

        /**
         * ServiceConnectionDB constructor.
         *
         * @access public
         * @param object|PDO $dbConn
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
         * @param array $column
         * @param int $fetchMode
         * @return array - Return query
         * @internal param array $columnn - Columns that will be returned
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

        /**
         * find - Performs a specific search
         *
         * @access public
         * @param $query
         * @param array $array
         * @param int $fetchMode
         * @return mixed
         */
        public function find($query, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
            try{

                $stmt = $this->dbConn->prepare($query);

                foreach ($array as $key => $value) {
                    $stmt->bindValue("$key", $value);
                }

                $stmt->execute();

                return $stmt->fetch($fetchMode);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        /**
         * update - Updates the information of the desired table
         *
         * @param $table
         * @param $column
         * @param $where
         * @return bool
         */
        public function update($table, $column, $where){
            try{
                ksort($column);

                $fieldDetails = null;

                foreach ($column as $key => $value){
                    $fieldDetails .= "$key=:$key,";
                }

                $fieldDetails = rtrim($fieldDetails, ',');

                $stmt = $this->dbConn->prepare("UPDATE $table SET $fieldDetails WHERE $where");

                foreach ($column as $key => $value){
                    $stmt->bindValue(":$key", $value);
                }

                $stmt->execute();

                if(!$stmt->rowCount()){
                    echo "Registry not found!";
                    return false;
                }else{
                    return true;
                }

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        /**
         * remove - Remove the reported registry
         *
         * @param $table
         * @param $fieldName
         * @param $value
         * @param int $limit
         * @return bool
         */
        public function remove($table, $fieldName, $value, $limit = 1){
            try{
                $query = "DELETE FROM $table WHERE " . $fieldName . "=" . $value . " LIMIT $limit";

                $stmt = $this->dbConn->prepare($query);

                $stmt->bindValue(":$fieldName", $value);

                $stmt->execute();

                if(!$stmt->rowCount()){
                    echo "Registry not found!";
                    return false;
                }else{
                    return true;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }