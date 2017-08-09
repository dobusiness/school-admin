<?php
use App\Model\CustomerModel;
use App\Model\CustomerLocationModel;
use App\Model\CustomerContactModel;

$app->group('/customer/', function () {
    
    $this->get('test', function ($req, $res, $args) {
        return $res->getBody()
                   ->write('Hello Customers');
    });
    
    $this->get('', function ($req, $res, $args) {
        $um = new CustomerModel();
        
        //echo '<pre>'; print_r($current_user); echo '</pre>';
         
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
        $um = new CustomerModel();
        
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
        $um = new CustomerModel();
        
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
        $um = new CustomerModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Delete($args['id'])
            )
        );
    }); 

    $this->get('location/', function ($req, $res, $args) {
        $um = new CustomerLocationModel();
        
        //echo '<pre>'; print_r($current_user); echo '</pre>';
         
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->GetAll()
            )
        );
    });
    
    $this->get('location/{id}', function ($req, $res, $args) {
        $um = new CustomerLocationModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Get($args['id'])
            )
        );
    });
    
    $this->post('location/', function ($req, $res) {
        $um = new CustomerLocationModel();
        
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
    
    $this->post('location/{id}', function ($req, $res, $args) {
        $um = new CustomerLocationModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Delete($args['id'])
            )
        );
    });

    $this->get('contact/', function ($req, $res, $args) {
        $um = new CustomerContactModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->GetAll()
            )
        );
    });
    
    $this->get('contact/{id}', function ($req, $res, $args) {
        $um = new CustomerContactModel();
        
        return $res
           ->withHeader('Content-type', 'application/json')
           ->getBody()
           ->write(
            json_encode(
                $um->Get($args['id'])
            )
        );
    });
    
    $this->post('contact/', function ($req, $res) {
        $um = new CustomerContactModel();
        
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
    
    $this->post('contact/{id}', function ($req, $res, $args) {
        $um = new CustomerContactModel();
        
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