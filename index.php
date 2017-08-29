<?php	
	ini_set('display_errors',1);

	require_once 'Services/ServiceConnectionDB.php';
	require_once 'Database/connection.php';
	require_once 'Classes/Customer.php';
	
	$dbConn = new Connection();
	$service = new ServiceConnectionDB($dbConn);
    $customer = new Customer();

    /** INSERT - SERVICE
        $column = array(
            'nome' => 'NewUser',
            'cpf' => '999999999999',
            'email' => 'user@user.com',
            'sexo' => 'm'
        );

      $service->insert("cliente", $column);
     */

     /**SELECT ALL - SERVICE
        //$column = array('id' => 2); //Opcional
        $item = $service->getAll("SELECT * FROM Cliente");

        foreach ($item as $key => $value){
            echo $value['nome'] . "</br>";
        }
     */

    /**FIND - SERVICE
        $column = array('id' => 8);
        $item = array($service->find("SELECT * FROM cliente WHERE id=:id", $column));

        foreach($item as $value){
            echo $value['nome'] . "</br>";
            echo $value['email'];
        }
    */

    /**UPDATE - SERVICE
        $column = array('nome' => 'NewUser');
        $service->update("cliente", $column, "id = 7");
    */

    //$service->remove("cliente", "id", 6);