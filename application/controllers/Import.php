<?php 
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Import extends CI_Controller {  

	function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('import_model', 'import');
        $this->load->model('alert_model');
        $this->load->library('session');
        $this->load->model('member_model');

        $this->member_model->checksession();
        
    }
      
  public function uploadData(){
            
            $path = 'files/excel/';
            require_once APPPATH . "/third_party/PHPExcel.php";
            $config['upload_path'] = $path;
            $config['allowed_types'] = 'xlsx|xls';
            $config['remove_spaces'] = TRUE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);            
            if (!$this->upload->do_upload('uploadFile')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
            if(empty($error)){
              if (!empty($data['upload_data']['file_name'])) {
                $import_xls_file = $data['upload_data']['file_name'];
            } else {
                $import_xls_file = 0;
            }
            $inputFileName = $path . $import_xls_file;
            
            try {
                $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($inputFileName);
                $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                $flag = true;
                $i=0;
                foreach ($allDataInSheet as $value) {
                  if($flag){
                    $flag =false;
                    continue;
                  }
                  $inserdata[$i]['Student_id'] = $value['A'];
                  // $inserdata[$i]['Citizen_id'] = $value['B'];
                  $inserdata[$i]['Fullname'] = $value['B'];
                  $inserdata[$i]['Faculty'] = $value['C'];
                  $inserdata[$i]['Department'] = $value['D'];
                  $inserdata[$i]['Major'] = $value['E'];

                  $i++;
                }               
                $result = $this->import->importdata($inserdata);   
                if($result){
                  $this->alert_model->alert_success();
                  redirect('main/table_student_info');

                }else{

                  $this->alert_model->alert_error();
                  redirect('main/table_student_info');
                }             

          } catch (Exception $e) {
               die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                        . '": ' .$e->getMessage());
            }
          }else{
              echo $error['error'];
          }
            
          
  }




}
?>
