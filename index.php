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
        //$column = array('idCliente' => 2); //Opcional
        $item = $service->getAll("SELECT * FROM Cliente");

        foreach ($item as $key => $value){
            echo $value['nome'];
        }*/
    

    /**FIND - SERVICE
        $column = array('idCliente' => 1);
        $item = array($service->find("SELECT * FROM cliente WHERE idCliente=:idCliente", $column));

        foreach($item as $value){
            echo $value['nome'];
            echo $value['cpf'];
            echo $value['email'];
        }
    */

    /**UPDATE - SERVICE
        $column = array('nome' => 'NewUser');
        $service->update("cliente", $column, "idCliente = 1");
    */

    $service->remove("cliente", "idCliente=:4");

    //$customer->deleteCustomer(3);