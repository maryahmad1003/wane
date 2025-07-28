<?php
namespace mary\Core\Abstract;
use mary\Core\Database;
use PDO;

abstract class AbstractRepository {
    protected PDO $db;
    
    public function __construct() {
        $this->db = Database::getConnection();
    }
    
    public function selectAll(){}
    public function selectBy(array $filter){}
}
