<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class login_model extends CI_Model
{
    
    function loginMe($email, $password,$type)
    {
        $this->db->select('password','office_id_fk');
        $this->db->from('pvr_login');
        $this->db->where('username',$email);
        $query = $this->db->get();
        $user = $query->row();
        
        if(!empty($user)){
            //$hashed_password=crypt($password);
            $hashed_password=hash( "sha256", $password );
            echo $hashed_password;
            if($user->password==$hashed_password){
                $this->db->select('office_name');
                $this->db->from('pvr_master_office');
                $this->db->where('office_id_pk',$user->office_id_fk);
                $query = $this->db->get();
                $office = $query->row();

                $this->db->select('desig_name');
                $this->db->from('pvr_master_designation');
                $this->db->where('desig_id_pk',$type);
                $query = $this->db->get();
                $desig = $query->row();

                $result=array('office_name'=>$office->office_name,
                                'user_type'=>$desig->desig_name);

                return $result;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

    function checkEmailExist($email)
    {
        $this->db->select('userId');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() > 0){
            return true;
        } else {
            return false;
        }
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