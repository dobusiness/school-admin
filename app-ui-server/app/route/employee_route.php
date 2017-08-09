<?php
use App\Model\EmployeeModel;

$app->group('/employee/', function () {
    
    $this->get('test', function ($req, $res, $args) {
        return $res->getBody()
                   ->write('Hello Employees');
    });
    
    $this->get('', function ($req, $res, $args) {
        $um = new EmployeeModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->GetAll()
            )
        );
    });
    
    $this->get('{id}', function ($req, $res, $args) {
        $um = new EmployeeModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Get($args['id'])

            )
        );
    });
    
    $this->post('', function ($req, $res) {
        $um = new EmployeeModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->InsertOrUpdate(
                    $req->getParsedBody()
                )
            )
        );
    });
    
    $this->post('{id}', function ($req, $res, $args) {
        $um = new EmployeeModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Delete($args['id'])
            )
        );
    });
});