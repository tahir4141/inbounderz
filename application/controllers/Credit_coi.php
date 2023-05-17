<?php
 // require_once "Classes/PHPExcel.php";
class Credit_coi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
           // $this->load->library('PHPExcel.php');
         $this->load->library('Excel');
        $this->load->library('PHPExcel');
      
    }

  
    public function send_excel()
    {

        print_r($_FILES);
        die;
        if($_SERVER['REQUEST_METHOD']=='POST')
        {

           
            // $upload_status =  $this->uploadDoc();
            // if($upload_status!=false)
            // {
                $file_path = $_FILES["excel_file"]["tmp_name"];
                $objReader = PHPExcel_IOFactory::createReader('Excel5');
                $objPHPExcel = $objReader->load($file_path);
                $sheet = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow();
                $highestColumn = $sheet->getHighestColumn();
        
        }
    } 
   
}
?>