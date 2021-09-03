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
    function fetch_employer($district_id)
    {
        $this->db->select('employer_id_pk,employer_name');
        $this->db->from('pvr_employer');
        $this->db->where('district_id_fk',$district_id);
        $query =$this->db->get();
		return $query->result_array();
    }
    function fetch_state_code($state_id)
    {
        $this->db->select('state_name_code');
        $this->db->from('pvr_master_state');
        $this->db->where('state_id_pk',$state_id);
        $query =$this->db->get();
        $state_code=$query->row();
		return $state_code->state_name_code;
    } 
    function fetch_district_code($district_id)
    {
        $this->db->select('district_name_code');
        $this->db->from('pvr_master_district');
        $this->db->where('district_id_pk',$district_id);
        $query =$this->db->get();
        $district_code=$query->row();
		return $district_code->district_name_code;
    } 
    function check_receipt_no($hash)
    {
        $code = $this->db->select('*')
						 ->from('pvr_receipt_no')
						 ->where('receipt_no',$hash)
						 ->get();
		$result = $code->result_array();
		$count = count($result);
		if($count == 0)
		{
			return TRUE;	
		}
		else
		{
			return FALSE;
		}
    }

    function submit($data)
    {
        /******************************Populating Receipt No Table*************************/
        $this->db->select_max('receipt_id_pk');
        $this->db->from('pvr_receipt_no');
        $query=$this->db->get();
        $maxreceipt_id=$query->row();
        
        if(empty($maxreceipt_id))
        {
            $maxreceipt_id=1;
        }
        else
        {
            $maxreceipt_id=$maxreceipt_id+1;
        }

        $receiptdata=array(
            'receipt_id_pk'=>$maxreceipt_id,
            'receipt_date'=>$data->receiptdate,
            'receipt_no'=>$data->receiptno
        );
        $this->db->insert('pvr_receipt_no',$receiptdata);

        /******************************Populating Reference No Table*************************/
        $refdata=array(
            'ref_no_pk'=>$data->refno,
            'receipt_id_fk'=>$maxreceipt_id,
            'ref_date'=>$data->refdate
        );
        $this->db->insert('pvr_reference_no',$refdata);

        /******************************Populating Candidate Details Table*************************/
        $this->db->select_max('candidate_id_pk');
        $this->db->from('pvr_candidate_details');
        $query=$this->db->get();
        $maxcandidate_id=$query->row();
        
        if(empty($maxcandidate_id))
        {
            $maxcandidate_id=1;
        }
        else
        {
            $maxcandidate_id=$maxcandidate_id+1;
        }

        $candidate_pin_id1=$this->fetch_pin_id($data->pin1,$data->district1);
        $candidate_pin_id2=$this->fetch_pin_id($data->pin2,$data->district2);

       
        $candidate_detail=array(
            'candidate_id_pk'=>$maxcandidate_id,
            'reference_no_fk'=>$data->refno,
            'employer_id_fk'=>$data->employer,
            'profile_id_fk'=>NULL,
            'candidate_f_name'=>$data->firstname,
            'candidate_m_name'=>$data->middlename,
            'candidate_l_name'=>$data->lastname,
            'candidate_gender_id'=>$data->gender,
            'candidate_caste_id_fk'=>$data->caste,
            'candidate_aadhaar_no'=>$data->aadhaarno,
            'candidate_house_no1'=>$data->houseno1,
            'candidate_street1'=>$data->street1,
            'candidate_landmark1'=>$data->landmark1,
            'candidate_city1'=>$data->city1,
            'candidate_post_office1'=>$data->po1,
            'candidate_police_station_id1_fk'=>$data->ps1,
            'candidate_pin1_fk'=>$candidate_pin_id1,
            'candidate_district_id1_fk'=>$data->district1,
            'candidate_photo_path'=>'test/path',
            'candidate_defence_type_id_fk'=>$data->defence,
            'candidate_house_no2'=>$data->houseno2,
            'candidate_street2'=>$data->street2,
            'candidate_landmark2'=>$data->landmark2,
            'candidate_city2'=>$data->city2,
            'candidate_post_office2'=>$data->po1,
            'candidate_police_station_id2_fk'=>$data->ps2,
            'candidate_pin2_fk'=>$candidate_pin_id2,
            'candidate_district_id2_fk'=>$data->district2

        );
        $this->db->insert('pvr_candidate_details',$candidate_detail);


        /******************************Populating PVR Details Table*************************/
        $this->db->select_max('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $query=$this->db->get();
        $maxpvr_id=$query->row();
        
        if(empty($maxpvr_id))
        {
            $maxpvr_id=1;
        }
        else
        {
            $maxpvr_id=$maxpvr_id+1;
        }

        $pvr_data=array(
            'pvr_id_pk'=>$maxpvr_id,
            'receipt_id_fk'=>$maxreceipt_id,
            'candidate_id_fk'=>$maxcandidate_id,
            'application_date'=>
            'pvr_type_fk'=>
            'pvr_sent_to_id_fk'=>
            'memo_id_fk'=>
            'pvr_with_id_fk'=>
            'pvr_final_status_id_fk'=>
            'remarks'=>
            'pvr_report_id_fk'=>
            'district_id_fk'=>$this->session->userdata('office_district')
        );

        $this->db->insert('pvr_vr_detail',$pvr_data);
        


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
            $pin=array(
                'pincode_id_pk'=>$maxpin_id,
                'pincode_no'=>$pin,
                'district_id_fk'=>$district_id
            );

            $this->db->insert('pvr_master_pincode',$pin);
            return $maxpin_id;
        }
        else
          return $pin_id->pincode_id_pk;
    }

}
?>