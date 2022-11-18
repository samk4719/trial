<?php

class DatabaseClass{
    protected static $connection;
    
    public function connect(){
        
        if (!isset(self::$connection)){
            
            include ('inc_dbConfig.php');
            
            self::$connection = new mysqli ($host, $username, $password, $dbname); //creating database connection object using mysqli method, new keyword.  
        }//if end
        
        if (self::$connection === false){
            return false;
        }//if end
        return self::$connection;
    }//connect function end
    
    public function Select($query){ //function for select queries
        
        $connection = $this -> connect();
        
        $result = $connection -> query($query);
        
        if($result){
            return $result;
        }else{
            return false;
        }//if-else end
    }//Select function end
    
    public function ActionQuery($sql){ //function for insert queries 
        
        $connection = $this -> connect();
        
        $result = $connection -> query($sql);
        
        if($result){
            return $result;
        }else{
            return false;
        }//if-else end 
    }//ActionQuery function end
    
    public function error(){ //function for error handling
        
        $connection = $this->connect();
        return $connection -> error;
    }//error function end
    
}//class end

?>