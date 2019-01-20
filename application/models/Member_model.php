<?php

class Member_model extends CI_Model
{

    public function checklogin()
    {

            if ($this->input->post('username') > 0) {

                $this->db->where('Student_id', $this->input->post('username'));
                $query = $this->db->get('student_info');
                $result = $query->result();

                if ($query->num_rows() == 1) {
                            # code...
                        $data = array(
                            'Student_id' => $result[0]->Student_id,
                            'FULLNAME' => $result[0]->Fullname,
                            'Department' => $result[0]->Department,
                            'Major' => $result[0]->Major,
                         );

                        $this->session->set_userdata($data);

                    return true;
                }else{

                    return false;

                }
            
            } else {

                return false;

            }

    }

    public function checklogin_admin()
    {

            $this->db->where('Nunet', $this->input->post('username'));
            $query = $this->db->get('user');
            $result = $query->result();

            if ($query->num_rows() == 1) {

                if ($result[0]->Status == 'y') {
                        # code...
                    $data = array(
                        'Nunet' => $result[0]->Nunet,
                        'FULLNAME' => $result[0]->Name,
                     );

                    $this->session->set_userdata($data);


                          if ($result[0]->Level == 'a') {
                                $admin = array(
                                            'STUDENTCODE' => 'Admin',
                                            'Admin' => true,
                                            'Member' => true,
                                    );

                                $this->session->set_userdata($admin);
                            } elseif ($result[0]->Level == 'm') {
                                $member = array(
                                            'STUDENTCODE' => 'Member',
                                            'Member' => true,
                                    );

                                $this->session->set_userdata($member);
                            }

                    return true;


                }else{

                    return false;

                }

            
            } else {

                return false;

            }

    }


    public function checksession()
    {
        if($this->session->userdata('sess_user') == false) {
            redirect();
        }
    }

}