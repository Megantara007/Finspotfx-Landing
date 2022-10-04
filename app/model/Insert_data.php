<?php
session_start(); 

class Insert_data extends Connection{
    private $aN;
    private $eM;
    private $dP;

    public function __construct(){
        $this->aN = $_POST['accNumber'];
        $this->eM = $_POST['email'];
        $this->dP = $_POST['deposit'];

        $conn = $this->__conn();
        
        $id = '';
        $a = 0;
        $date = date('Y').'-'.date('m').'-'.date('d');

        // Reset Auto_Increment Query
        $reset_query    = "ALTER TABLE `client_data` AUTO_INCREMENT = 0";
        $reset          = $conn->prepare($reset_query);
                          $reset->execute();

        $query   =  "INSERT INTO `client_data` (`id`, `client_id`, `email`, `deposit_amount`, `date`, `ip_address`, `user_agent`, `device`) VALUES(?,?,?,?,?,?,?,?)";
        $process =  $conn->prepare($query);    
                    $process->bind_param('ississss', $id, $this->aN, $this->eM, $this->dP, $date, $a, $a, $a);    
                    $process->execute();

        if($process > 0){
            header("location:deposit_bonus/success");
        }else{
            header("location:deposit_bonus/error");
        }
    }
}

?>