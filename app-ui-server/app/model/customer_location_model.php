<?php
namespace App\Model;

use App\Lib\Database;
use App\Lib\Response;
use App\Lib\Common;

class CustomerLocationModel
{
    private $db;
    private $table = 'sc_customer_location';
    private $user_log = 'lbazan';
    private $date_log;
    private $response;
    
    public function __CONSTRUCT()
    {
        $this->db = Database::StartUp();
        $this->date_log = Common::getDatetimeNow();
        $this->response = new Response();
    }
    
    public function GetAll()
    {
		try
		{
			$result = array();

			$stm = $this->db->prepare("SELECT c.id, c.customerId, c.priority, c.type, c.type, z.zipINEI, z.zipMTC,
                        z.country, z.department, z.province, z.district, c.address, c.comment, c.status 
                        FROM $this->table c inner join sc_zip z on c.zipId = z.id");
			$stm->execute();
            
			$this->response->setResponse(true);
            $this->response->result = $stm->fetchAll();
            
            return $this->response;
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}
    }
    
    public function Get($id)
    {
		try
		{
			$result = array();

			$stm = $this->db->prepare("SELECT c.id, c.customerId, c.priority, c.type, c.type, z.zipINEI, z.zipMTC,
                        z.country, z.department, z.province, z.district, c.address, c.comment, c.status 
                        FROM $this->table c inner join sc_zip z on c.zipId = z.id WHERE c.id = ?");
			$stm->execute(array($id));

			$this->response->setResponse(true);
            $this->response->result = $stm->fetch();
            
            return $this->response;
		}
		catch(Exception $e)
		{
			$this->response->setResponse(false, $e->getMessage());
            return $this->response;
		}  
    }
    
    public function InsertOrUpdate($data)
    {
		try 
		{
            if(isset($data['id']))
            {
                $sql = "UPDATE $this->table SET 
                            customerId          = ?, 
                            priority        = ?,
                            type          = ?,
                            address            = ?,
                            zipId    = ?,
                            comment    = ?,
                            status = ?,
                            updatedDate = ?,
                            updatedBy = ?
                        WHERE id = ?";
                
                $this->db->prepare($sql)
                     ->execute(
                        array(
                            $data['customerId'], 
                            $data['priority'],
                            $data['type'],
                            $data['address'],
                            $data['zipId'],
                            $data['comment'],
                            $data['status'],
                            $this->date_log,
                            $this->user_log,
                            $data['id']
                        )
                    );
            }
            else
            {
                $sql = "INSERT INTO $this->table
                            (customerId, priority, type, address, zipId, comment, status, createdDate, createdBy)
                            VALUES (?,?,?,?,?,?,?,?,?)";
                
                $this->db->prepare($sql)
                     ->execute(
                        array(
                            $data['customerId'], 
                            $data['priority'],
                            $data['type'],
                            $data['address'],
                            $data['zipId'],
                            $data['comment'],
                            $data['status'],
                            $this->date_log,
                            $this->user_log
                        )
                    ); 
            }
            
			$this->response->setResponse(true);
            return $this->response;
		}catch (Exception $e) 
		{
            $this->response->setResponse(false, $e->getMessage());
		}
    }
    
    public function Delete($id)
    {
		try 
		{
			$stm = $this->db
			            ->prepare("DELETE FROM $this->table WHERE id = ?");			          

			$stm->execute(array($id));
            
			$this->response->setResponse(true);
            return $this->response;
		} catch (Exception $e) 
		{
			$this->response->setResponse(false, $e->getMessage());
		}
    }
}