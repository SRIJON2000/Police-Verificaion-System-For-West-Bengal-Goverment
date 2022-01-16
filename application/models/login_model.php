<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{
    
    function loginMe($email, $password, $salt)
    {
        $this->db->select('password,office_id_fk,desig_id_fk,dept_id_fk,login_id_pk');
        $this->db->from('pvr_login');
        $this->db->where('username',$email);
        $query = $this->db->get();
        $user = $query->row();
        //$password=hash("sha256", $user->password.$salt); //added because password is not encrypted at login page. Will be removed.

            if(!empty($user))
            {
                //database password is salted and hashed
            $salted_hashed_password=hash("sha256", $user->password.$salt);
            //$salted_hashed_password=hash("sha256", $user->password);
            
                //compare the salted hased passwords
                if($password==$salted_hashed_password)
                {
                    $this->db->select('office_name,district_id_fk');
                    $this->db->from('pvr_master_office');
                    $this->db->where('office_id_pk',$user->office_id_fk);
                    $query1 = $this->db->get();
                    $office = $query1->row();


                    $this->db->select('desig_name');
                    $this->db->from('pvr_master_designation');
                    $this->db->where('desig_id_pk',$user->desig_id_fk);
                    $query2 = $this->db->get();
                    $desig = $query2->row();

                    $this->db->select('dept_name');
                    $this->db->from('pvr_master_department');
                    $this->db->where('dept_id_pk',$user->dept_id_fk);
                    $query3 = $this->db->get();
                    $dept= $query3->row();

                    $this->db->select('state_id_fk');
                    $this->db->from('pvr_master_district');
                    $this->db->where('district_id_pk',$office->district_id_fk);
                    $query4 = $this->db->get();
                    $state= $query4->row();

                    $this->db->select('district_name');
                    $this->db->from('pvr_master_district');
                    $this->db->where('district_id_pk',$office->district_id_fk);
                    $query5 = $this->db->get();
                    $district= $query5->row();

                    $result=array('office_name'=>$office->office_name,
                                    'office_id'=>$user->office_id_fk,
                                    'login_id'=>$user->login_id_pk,
                                    'user_type'=>$desig->desig_name,
                                    'office_district'=>$office->district_id_fk,
                                    'office_state'=>$state->state_id_fk,
                                    'department'=>$dept->dept_name,
                                    'department_id'=>$user->dept_id_fk,
                                    'district_name'=>$district->district_name);
                    
                    unset($_SESSION['salt']); //line added
                    return $result;
                } 
               else 
                {
                    return array();
                }
        } 
        else 
        {
            return array();
        }
    }
    function change_password($password,$email)
    {
        $hashed=hash("sha256", $password);
        $this->db->set('password',$hashed);
        $this->db->where('username',$email);
        $this->db->update('pvr_login');
    }
    function checkEmailExist($email)
    {
        $this->db->select('login_id_pk');
        $this->db->where('username', $email);
        $query = $this->db->get('pvr_login');
        $result = $query->row();
        if(empty($result))
        {
            return 0;
        }
        else
            return 1;
    }


    function resetPasswordUser($data)
    {
        $result = $this->db->insert('tbl_reset_password', $data);

        if($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getCustomerInfoByEmail($email)
    {
        $this->db->select('userId, email, name');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $this->db->where('email', $email);
        $query = $this->db->get();

        return $query->row();
    }

    function checkActivationDetails($email, $activation_id)
    {
        $this->db->select('id');
        $this->db->from('tbl_reset_password');
        $this->db->where('email', $email);
        $this->db->where('activation_id', $activation_id);
        $query = $this->db->get();
        return $query->num_rows();
    }

    /*function createPasswordUser($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', array('password'=>getHashedPassword($password)));
        $this->db->delete('tbl_reset_password', array('email'=>$email));
    }*/

    function lastLogin($loginInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_last_login', $loginInfo);
        $this->db->trans_complete();
    }

    function lastLoginInfo($userId)
    {
        $this->db->select('BaseTbl.createdDtm');
        $this->db->where('BaseTbl.userId', $userId);
        $this->db->order_by('BaseTbl.id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_last_login as BaseTbl');
		
        return $query->row();
    }
}

?>