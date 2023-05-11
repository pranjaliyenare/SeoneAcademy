<?php 
namespace App\Models;
use CodeIgniter\Model;

class registrationModel extends Model {

   protected $table = 'seone_academy_registration_form';
   protected $primaryKey = 'id'; 
   protected $useAutoIncrement = true; 
   protected $insertID = 0; 
   protected $returnType = 'array'; 
   protected $useSoftDeletes = false; 
   protected $protectFields = true; 

    protected $allowedFields = [
        'id',
        'fullName',
        'address',
        'email',
        'phone'
    ];

    // Dates 
   protected $useTimestamps = false; 
   protected $dateFormat = 'datetime'; 
   protected $createdField = 'created_at'; 
   protected $updatedField = 'updated_at'; 
   protected $deletedField = 'deleted_at'; 

   // Validation 
   protected $validationRules = []; 
   protected $validationMessages = []; 
   protected $skipValidation = false; 
   protected $cleanValidationRules = true; 

   // Callbacks 
   protected $allowCallbacks = true; 
   protected $beforeInsert = []; 
   protected $afterInsert = []; 
   protected $beforeUpdate = []; 
   protected $afterUpdate = []; 
   protected $beforeFind = []; 
   protected $afterFind = []; 
   protected $beforeDelete = []; 
   protected $afterDelete = []; 


   public function insert_data($data = array())
   {
       $this->db = \Config\Database::connect();
       $this->db->table($this->table)->insert($data);
       return $this->db->insertID();
   }

   public function update_data($id, $data = array())
   {
       $this->db = \Config\Database::connect();
       $this->db->table($this->table)->update($data, array(
           "id" => $id,
       ));
       return $this->db->affectedRows();
   }

   public function delete_data($id)
   {
       $this->db = \Config\Database::connect();
       return $this->db->table($this->table)->delete(array(
           "id" => $id,
       ));
   }

   public function get_all_data()
   {
       $this->db = \Config\Database::connect();
       $query = $this->db->query('select * from ' . $this->table);
       return $query->getResultArray();
   }
}




  

?>