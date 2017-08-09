<?php
namespace App\Model;

use App\Lib\Database;
use App\Lib\Response;
use App\Lib\Common;

class UserModelConfig
{
    private $db;
    private $table = 'sc_user_config';
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

			$stm = $this->db->prepare("SELECT * FROM $this->table");
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

			$stm = $this->db->prepare("SELECT * FROM $this->table WHERE id = ?");
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
                            userId          = ?, 
                            module        = ?,
                            privilege          = ?,
                            updatedDate = ?,
                            updatedBy = ?
                        WHERE id = ?";
                
                $this->db->prepare($sql)
                     ->execute(
                        array(
                            $data['userId'], 
                            $data['module'],
                            $data['privilege'],
                            $this->date_log,
                            $this->user_log,
                            $data['id']
                        )
                    );
            }
            else
            {
                $sql = "INSERT INTO $this->table
                            (userId, module, privilege, createdDate, createdBy)
                            VALUES (?,?,?,?,?)";
                $this->db->prepare($sql)
                     ->execute(
                        array(
                            $data['userId'], 
                            $data['module'],
                            $data['privilege'],
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