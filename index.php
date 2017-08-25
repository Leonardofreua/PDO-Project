<?php	
	ini_set('display_errors',1);

	require_once 'Services/ServiceConnectionDB.php';
	require_once 'Database/connection.php';
	require_once 'Classes/Customer.php';
	
	$dbConn = new Connection();
	$service = new ServiceConnectionDB($dbConn);
    $customer = new Customer();

    /** Chamada do INSERT do SERVICE
     *
        $column = array(
            'nome' => 'Leonard',
            'cpf' => '84684810097',
            'email' => 'leonardo@gmail.com',
            'sexo' => 'm'
        );

      $service->insert("cliente", $column);
     */

     /**Chamada do SELECT ALL do SERVICE
        //$column = array('idCliente' => 2); //Opcional
        $item = $service->getAll("SELECT * FROM Cliente");

        foreach ($item as $key => $value){
            echo $value['nome'];
        }*/
    

    //Chamada do FIND do SERVICE
        $column = array('idCliente' => 1);
        $item = $service->find("SELECT * FROM cliente WHERE idCliente=:idCliente", $column);

        foreach ($item as $key => $value){
            echo $value['email'];
        }



    //$customer->updateCustomer();

    //$customer->deleteCustomer(3);

    //$result = $customer->findCustomer(2);
   //echo $result['nome'];
