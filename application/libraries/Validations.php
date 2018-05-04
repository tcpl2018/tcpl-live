<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Validations {
    

    public function jobApplication($params)
    {
        

        try {
            $CI = & get_instance();
            $CI->load->library('form_validation');
            if (empty($params['captcha'])) {
                $result['errors'][] = "Invalid captcha";
            }
            
            if ($CI->form_validation->required($params['full_name']) == False) {
                    $result['errors'][] = "Sorry! You can't skip this :)";
            }
            
            if ($CI->form_validation->required($params['email']) == False) {
                $result['errors'][] = "Sorry! You can't skip this :)";
            }
            if ($CI->form_validation->valid_email($params['email']) == False) {
                $result['errors'][] = "Ohhh! Wrong email";
            }
            if ($CI->form_validation->required($params['phone']) == False) {
                $result['errors'][] = "Sorry! You can't skip this :)";
            }

            if (strlen($params['phone'])<10 || strlen($params['phone'])>10) {
                $result['errors'][] = "Invalid Phone";
            }
            // if ($CI->form_validation->required($params['experience']) == False) {
            //     $result['errors'][] = "Experience is required";
            // }

            if (empty($result)) {
                $result['status'] = 1;
                $result['msg'] = "valid data";
            } else {
                $result['status'] = 0;
                $result['msg'] = "Fail to save data";
                $result['errors'] =$result['errors'];
            }
            return $result;
        } catch (Exception $ex) {
            $result['status'] = 0;
            $result['errors'] = $ex->getMessage();
            return $result;
        }
    }
    
   
   public function contactUs($params)
    {
        

        try {
            $CI = & get_instance();
            $CI->load->library('form_validation');
            if (empty($params['captcha'])) {
                $result['errors'][] = "Invalid captcha";
            }
            
            if ($CI->form_validation->required($params['name']) == False) {
                    $result['errors'][] = "Sorry! You can't skip this :)";
            }
            
            if ($CI->form_validation->required($params['email']) == False) {
                $result['errors'][] = "Sorry! You can't skip this :)";
            }
            if ($CI->form_validation->valid_email($params['email']) == False) {
                $result['errors'][] = "Ohhh! Wrong email";
            }
            if ($CI->form_validation->required($params['phone']) == False) {
                $result['errors'][] = "Sorry! You can't skip this :)";
            }

            if (strlen($params['phone'])<10 || strlen($params['phone'])>10) {
                $result['errors'][] = "Invalid Phone";
            }
            // if ($CI->form_validation->required($params['experience']) == False) {
            //     $result['errors'][] = "Experience is required";
            // }

            if (empty($result)) {
                $result['status'] = 1;
                $result['msg'] = "valid data";
            } else {
                $result['status'] = 0;
                $result['msg'] = "Fail to save data";
                $result['errors'] =$result['errors'];
            }
            return $result;
        } catch (Exception $ex) {
            $result['status'] = 0;
            $result['errors'] = $ex->getMessage();
            return $result;
        }
    }
    
    
    
    
}
