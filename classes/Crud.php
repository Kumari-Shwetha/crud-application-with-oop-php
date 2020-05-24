<?php
include_once("classes/DbConfig.php");
    class Crud extends DbConfig
    {
        public function getData($sql)
        {
            $query=$this->connection->query($sql);
            if($query == false)
            {
                return false;
            }
            $rows=array();
            while($row=$query->fetch_array())
            {
                $rows[]=$row;
            }
            return $rows;
        }
        public function execute($sql)
        {
            $query=$this->connection->query($sql);
            if($query == false)
            {
                return false;
            }
            return true;

        }
        public function login($sql)
        {
            
            $query=$this->connection->query($sql);
          
            if($query->num_rows >0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
         public function escape_string($value)
        {
            
            return $this->connection->real_escape_string($value);
        }

    }
 
?>