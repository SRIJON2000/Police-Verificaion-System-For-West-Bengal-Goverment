<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Application_model extends CI_Model
{
    function fetch_gender()
    {
        
        $this->db->select('*');
        $this->db->from('pvr_master_gender');
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_state()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_state');
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_caste()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_caste');
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_policestation()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_policestation');
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_district()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_district');
        //$this->db->where('state_id_fk',$state_id);
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_defence()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_defence');
        $query =$this->db->get();
		return $query->result_array();
    }


    function submit($form_data)
    {
        $office_id=$this->session->userdata('office_id');
        $this->db->select('district_id_fk');
        $this->db->from('pvr_master_office');
        $this->db->where('office_id_pk',$office_id);
        $query =$this->db->get();
        $office_district_id=$query->row();

        $this->db->select('state_id_fk');
        $this->db->from('pvr_master_district');
        $this->db->where('district_id_pk',$office_district_id);
        $query =$this->db->get();
        $office_state_id=$query->row();

        // $school_pin_id=$this->fetch_pin_id($d->spin,$school_district_id);
        // $college_pin_id=$this->fetch_pin_id($d->cpin,$college_district_id);

        // $this->db->select_max('profile_id_pk');
        // $this->db->from('pvr_candidate_profile');
        // $query=$this->db->get();
        // $maxprofile_id=$query->row();
        
        // if(empty($maxprofile_id))
        // {
        //     $maxprofile_id->profile_id_pk=1;
        // }
        // else
        // {
        //     $maxprofile_id->profile_id_pk=$maxprofile_id->profile_id_pk+1;
        // }

        // $profile_data=array(
        //     'profile_id_pk'=>$maxprofile_id->profile_id_pk,
        //     'candidate_father_name'=>$d->fathername,
        //     'candidate_mother_name'=>$d->mothername,
        //     'candidate_nationality'=>$d->nation,
        //     'candidate_dob'=>$d->dob,
        //     'candidate_school_name'=>$d->sname,
        //     'candidate_school_address'=>$d->saddress,
        //     'candidate_school_district_id_fk'=>$school_district_id,
        //     'candidate_college_name'=>$d->cname,
        //     'candidate_college_address'=>$d->caddress,
        //     'candidate_college_district_id_fk'=>$college_district_id,
        //     'candidate_aadhaar_no'=>$d->aadhaarno,
        //     'candidate_school_pin_id_fk'=>$d->$school_pin_id,
        //     'candidate_college_pin_id_fk'=>$d->$college_pin_id
            
        // );
        // $this->db->insert('pvr_candidate_profile',$profile_data);

    //     $receiptdata=array(
    //         'receipt_no'=>$d->receiptno,
    //         'receipt_date'=>$d->receiptdate,
    //     );
    //     $this->db->insert('pvr_receipt_no',$receiptdata);
    //     $refdata=array(
    //         'refno_pk'=>$d->refno,
    //         'receipt_no_fk'=>$d->receiptno,
    //         'ref_date'=>$d->refdate
    //     );
    //     $this->db->insert('pvr_reference_no',$refdata);

    //     $this->db->select_max('candidate_id_pk');
    //     $this->db->from('pvr_candidate_details');
    //     $query=$this->db->get();
    //     $maxcandidate_id=$query->row();
        
    //     if(empty($maxcandidate_id))
    //     {
    //         $maxcandidate_id->candidate_id_pk=1;
    //     }
    //     else
    //     {
    //         $maxcandidate_id->candidate_id_pk=$maxcandidate_id->candidate_id_pk+1;
    //     }

    //     $candidate_pin_id1=$this->fetch_pin_id($d->pin1);
    //     $candidate_pin_id2=$this->fetch_pin_id($d->pin2);

    //     $candidate_district_id1=$this->fetch_district_id($d->district1);
    //     $candidate_district_id2=$this->fetch_district_id($d->district2);

    //     $e=0;
    //     // $candidate_detail=array(
    //     //     'candidate_id_pk'=>$maxcandidate_id->candidate_id_pk,
    //     //     'reference_no_fk'=>$d->refno,
    //     //     'employer_id_fk'=>$e,
    //     //     'profile_id_fk'=>$maxprofile_id->profile_id_pk,
    //     //     'candidate_f_name'=>$d->firstname,
    //     //     'candidate_m_name'=>$d->middlename,
    //     //     'candidate_l_name'=>$d->lastname,
    //     //     'candidate_gender_id'=>$d->gender,
    //     //     'candidate_caste_id_fk'=>$d->caste,
    //     //     'candidate_aadhaar_no'=>$d->aadhaarno,
    //     //     'candidate_house_no1'=>$d->houseno1,
    //     //     'candidate_street1'=>$d->street1,
    //     //     'candidate_landmark1'=>$d->landmark1,
    //     //     'candidate_city1'=>$d->city1,
    //     //     'candidate_post_office1'=>$d->po1,
    //     //     // 'candidate_police_station_id1_fk'=>,
    //     //     'candidate_pin1_fk'=>$candidate_pin_id1,
    //     //     'candidate_district_id1_fk'=>$candidate_district_id1,
    //     //     'candidate_photo_path'=>'test/path',
    //     //     'candidate_defence_type_id_fk'=>$d->dp,
    //     //     'candidate_house_no2'=>$d->houseno2,
    //     //     'candidate_street2'=>$d->street2,
    //     //     'candidate_landmark2'=>$d->landmark2,
    //     //     'candidate_city2'=>$d->city2,
    //     //     'candidate_post_office2'=>$d->po1,
    //     //     'candidate_police_station_id2_fk'=>,
    //     //     'candidate_pin2_fk'=>$candidate_pin_id2,
    //     //     'candidate_district_id2_fk'=>$candidate_district_id2

    //     // );
    //     $this->db->insert('pvr_candidate_details',$candidate_detail);

     }

    function fetch_district_id($district_name)
    {
        $this->db->select('district_id_pk');
        $this->db->from('pvr_master_district');
        $this->db->where('district_name',$district_name);
        $query=$this->db->get();
        $district_id=$query->row();
        return $$district_id->district_id_pk;
    }

    function fetch_pin_id($pin,$district_id)
    {
        $this->db->select('pincode_id_pk');
        $this->db->from('pvr_master_pincode');
        $this->db->where('pincode_no',$pin);
        $query=$this->db->get();
        $pin_id=$query->row();

        if(empty($pin_id))
        {
            $this->db->select_max('pincode_id_pk');
            $this->db->from('pvr_master_pincode');
            $query=$this->db->get();
            $maxpin_id=$query->row();

            if(empty($maxpin_id))
            {
                $maxpin_id=1;
            }
            else
            {
                $maxpin_id=$maxpin_id+1;
            }
            $p=array(
                'pincode_id_pk'=>$maxpin_id,
                'pincode_no'=>$pin,
                'district_id_fk'=>$district_id
            );

            $this->db->insert('pvr_master_pincode',$p);
            return $maxpin_id;
        }
        else
          return $pin_id->pincode_id_pk;
    }

    function fetch_police_station_id()
    {

    }
}
?>