<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class application_model extends CI_Model
{
    function fetch_all()
    {
        
    }
    function submit($d)
    {
        $this->db->select_max('profile_id_pk');
        $this->db->from('pvr_candidate_profile');
        $query=$this->db->get();
        $profile_id=$query->row();
        
        if(empty($profile_id))
        {
            $profile_id=1;
        }
        else
        {
            $profile_id=$profile_id+1;
        }

        $profile_data=array(
            'profile_id_pk'=>$profile_id,
            'candidate_father_name'=>$d->fathername,
            'candidate_mother_name'=>$d->mothername,
            'candidate_nationality'=>
            'candidate_dob'=>
            'candidate_school name'=>
            'candidate_school_address'=>
            'candidate_school_district_id_fk'=>
            'candidate_college name'=>
            'candidate_college_address'=>
            'candidate_college_district_id_fk'=>
            'candidate_aadhaar_no'=>
        )
    }
}
?>