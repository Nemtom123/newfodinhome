<?php
class PDOSQL  {
    private $SQl_Type = null;
    private  $kapcsolat  =   array();
    private $eredmeny = null;

    public function __construct($SQl_Type) {
        $this->kapcsolat = array();
        $this->eredmeny = "";
        $this->SQl_Type = $SQl_Type;
        switch( $SQl_Type ){
            case    'MySql' :   $this->kapcsolat = new PDO("mysql:host=;dbname=;charset=utf8","felhasznalonev","jelszo");
                break;
            case    'MsSql' :   $this->kapcsolat = new PDO("sqlsrv:server=;Database=","","");
                break;
        }
    }

    function getKapcsolat() {
        return $this->kapcsolat;
    }


//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function Kapcsolodas(){
        $this->kapcsolat->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
        $this->kapcsolat->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $this->kapcsolat->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->kapcsolat->setAttribute(PDO::SQLSRV_ATTR_DIRECT_QUERY, true);
        $this->kapcsolat->setAttribute(PDO::ATTR_DEFAULT_STR_PARAM, PDO::PARAM_STR_NATL);
        //$this->kapcsolat->setAttribute(PDO::ATTR_EMULATE_PREPARES , true);
        //$this->kapcsolat->setAttribute(PDO::SQLSRV_ATTR_CURSOR_SCROLL_TYPE , PDO::SQLSRV_CURSOR_DYNAMIC);
        $this->kapcsolat->setAttribute(PDO::SQLSRV_ATTR_QUERY_TIMEOUT , 1);

        if ( strcmp($this->SQl_Type,"MySql") === 0){
            $this->kapcsolat->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
            $this->kapcsolat->setAttribute(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL);
        }
    }//public function Kapcsolodas()

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function KapcsolatLezaras(){
        $this->kapcsolat = NULL;
        //mysql_close($this->kapcsolat);
    }//public function KapcsolatLezaras()

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function Lekerdezes($lekerdezes){
        try{

            if (is_object($this->eredmeny)){
                $this->eredmeny->closeCursor();
            }
            $this->eredmeny = $this->kapcsolat->query($lekerdezes );
            $this->eredmeny->setFetchMode(PDO::FETCH_ASSOC);

        }catch(PDOException $ex) {
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString()." ".$lekerdezes;
            exit;
        }
    }//public function Lekerdezes($lekerdezes)

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function Bevitel($lekerdezes){
        try{
            $this->kapcsolat->exec($lekerdezes);
        }catch(PDOException $ex) {
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString()." ".$lekerdezes;
            exit;
        }
        //mysql_query($lekerdezes, $this->kapcsolat) or die(mysql_error()."<br>".$lekerdezes);
    }//public function Bevitel($lekerdezes)

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************
    public function Execute($lekerdezes, $parameteres){
        try{
            $this->eredmeny = $this->kapcsolat->prepare($lekerdezes,array(PDO::ATTR_EMULATE_PREPARES => true));
            foreach ( $parameteres as $key => $array ){
                $this->eredmeny->bindParam( $array['variable'], $array['value'] );
            }
            $this->eredmeny->execute();
        }catch(PDOException $ex) {
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString()." ".$lekerdezes." : ".serialize($parameteres);
            exit;
        }
        //mysql_query($lekerdezes, $this->kapcsolat) or die(mysql_error()."<br>".$lekerdezes);
    }//public function Bevitel($lekerdezes)
//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function last_indert_id($lekerdezes){
        try{
            $this->kapcsolat->exec($lekerdezes);
        }catch(PDOException $ex) {
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString()." ".$lekerdezes;
            exit;
        }
        //mysql_query($lekerdezes, $this->kapcsolat) or die(mysql_error()."<br>".$lekerdezes);
        return $this->kapcsolat->lastInsertId();
    }//public function last_indert_id($lekerdezes)

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function fetch_array()
    {
        try{
            return $this->eredmeny->fetch(PDO::FETCH_ASSOC);
        }  catch (PDOException $ex){
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString();
            exit;
        }
    }//public function fetch_array()

//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function data_seek($row_number){
        // $this->eredmeny->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, $row_number);
        //mysql_data_seek($this->eredmeny, $row_number);
    }//public function data_seek($ertek)
//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function num_rows(){
        return $this->eredmeny->rowCount();
        //return mysql_num_rows($this->eredmeny);
    }//public function data_seek($ertek)
//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function fetch_row(){
        try{
            return $this->eredmeny->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_ABS, 0);
        }  catch (PDOException $ex){
            print $ex->getMessage()." ".$ex->getCode()." ".$ex->getTraceAsString();
            exit;
        }
        //return mysql_fetch_row($this->eredmeny);
    }//public function data_seek($ertek)
//**************************************************************************************
//**************************************************************************************
//**************************************************************************************

    public function fetch_assoc()
    {
        return $this->eredmeny->fetchAll(PDO::FETCH_ASSOC);
        //return mysql_fetch_assoc($this->eredmeny);
    }//public function fetch_array()


//**************************************************************************************
//**************************************************************************************
//**************************************************************************************


//**************************************************************************************    
//**************************************************************************************
//**************************************************************************************          


}//abstract class MySql implements SqlInterfesz

?>