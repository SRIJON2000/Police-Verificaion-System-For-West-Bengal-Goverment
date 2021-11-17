<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Application_model extends CI_Model
{
    function fetch_all_applications($district_id)
    {
        $this->db->select('pvr_id_pk,candidate_f_name,candidate_m_name,candidate_l_name,employer_name,application_date,ocvr_approval,adm_approval,ref_no_pk,pvr_final_status_id_fk,final_status_name,pvr_type_fk,ocvr_verified_nondefence_approval,ocvr_unverified_approval');
        $this->db->from('pvr_vr_detail');
        $this->db->join('pvr_candidate_details', 'pvr_candidate_details.candidate_id_pk = pvr_vr_detail.candidate_id_fk');
        $this->db->join('pvr_employer','pvr_employer.employer_id_pk=pvr_candidate_details.employer_id_fk');
        $this->db->join('pvr_reference_no','pvr_reference_no.receipt_id_fk=pvr_vr_detail.receipt_id_fk');
        $this->db->join('pvr_final_status','pvr_final_status.pvr_final_status_id_pk=pvr_vr_detail.pvr_final_status_id_fk');
        $this->db->join('pvr_master_defence','pvr_master_defence.df_type_id_pk=pvr_vr_detail.pvr_type_fk');
        $this->db->where('pvr_vr_detail.district_id_fk',$district_id);
        $this->db->order_by('pvr_id_pk','desc');
        $query =$this->db->get();
        return $query->result_array();
    }
    function fetch_ranged_applications($s,$e)
    {
        $this->db->select('*');
        $this->db->from('pvr_vr_detail');
        $this->db->join('pvr_candidate_details', 'pvr_candidate_details.candidate_id_pk = pvr_vr_detail.candidate_id_fk');
        $this->db->join('pvr_master_sent_to','pvr_master_sent_to.sent_to_id_pk=pvr_vr_detail.sent_to_id_fk');
        $this->db->join('pvr_employer','pvr_employer.employer_id_pk=pvr_candidate_details.employer_id_fk');
        $this->db->join('pvr_receipt_no','pvr_receipt_no.receipt_id_pk=pvr_vr_detail.receipt_id_fk');
        $this->db->join('pvr_master_gender','pvr_master_gender.gender_id_pk=pvr_candidate_details.candidate_gender_id_fk');
        $this->db->join('pvr_master_caste','pvr_master_caste.caste_id_pk=pvr_candidate_details.candidate_caste_id_fk');
        $this->db->join('pvr_master_defence','pvr_master_defence.df_type_id_pk=pvr_candidate_details.candidate_defence_type_id_fk');
        $this->db->join('pvr_master_district as district1','district1.district_id_pk=pvr_candidate_details.candidate_district_id1_fk');
        $this->db->join('pvr_master_state as state1','state1.state_id_pk=district1.state_id_fk');
        $this->db->join('pvr_master_pincode as pincode1','pincode1.pincode_id_pk=pvr_candidate_details.candidate_pin1_fk');
        $this->db->join('pvr_master_policestation as ps1','ps1.ps_id_pk=pvr_candidate_details.candidate_police_station_id1_fk');
        $this->db->join('pvr_reference_no','pvr_reference_no.ref_no_pk=pvr_candidate_details.reference_no_fk');
        $this->db->join('pvr_with','pvr_with.pvr_with_id_pk=pvr_vr_detail.pvr_with_id_fk');
        $this->db->join('pvr_final_status','pvr_final_status.pvr_final_status_id_pk=pvr_vr_detail.pvr_final_status_id_fk');
        $this->db->join('pvr_memo','pvr_memo.memo_id_pk=pvr_vr_detail.memo_id_fk');
        $this->db->where('pvr_vr_detail.application_date>=',$s);
        $this->db->where('pvr_vr_detail.application_date<=',$e);
        $query1 =$this->db->get();
        return $query1->result_array();
    }
    function fetch_application_details($pvr_id)
    {
        $this->db->select('*');
        $this->db->from('pvr_vr_detail');
        $this->db->join('pvr_candidate_details', 'pvr_candidate_details.candidate_id_pk = pvr_vr_detail.candidate_id_fk');
        $this->db->join('pvr_master_sent_to','pvr_master_sent_to.sent_to_id_pk=pvr_vr_detail.sent_to_id_fk');
        $this->db->join('pvr_employer','pvr_employer.employer_id_pk=pvr_candidate_details.employer_id_fk');
        $this->db->join('pvr_receipt_no','pvr_receipt_no.receipt_id_pk=pvr_vr_detail.receipt_id_fk');
        $this->db->join('pvr_master_gender','pvr_master_gender.gender_id_pk=pvr_candidate_details.candidate_gender_id_fk');
        $this->db->join('pvr_master_caste','pvr_master_caste.caste_id_pk=pvr_candidate_details.candidate_caste_id_fk');
        $this->db->join('pvr_master_defence','pvr_master_defence.df_type_id_pk=pvr_candidate_details.candidate_defence_type_id_fk');
        $this->db->join('pvr_master_district as district1','district1.district_id_pk=pvr_candidate_details.candidate_district_id1_fk');
        $this->db->join('pvr_master_state as state1','state1.state_id_pk=district1.state_id_fk');
        $this->db->join('pvr_master_pincode as pincode1','pincode1.pincode_id_pk=pvr_candidate_details.candidate_pin1_fk');
        $this->db->join('pvr_master_policestation as ps1','ps1.ps_id_pk=pvr_candidate_details.candidate_police_station_id1_fk');
        $this->db->join('pvr_reference_no','pvr_reference_no.ref_no_pk=pvr_candidate_details.reference_no_fk');
        $this->db->join('pvr_with','pvr_with.pvr_with_id_pk=pvr_vr_detail.pvr_with_id_fk');
        $this->db->join('pvr_final_status','pvr_final_status.pvr_final_status_id_pk=pvr_vr_detail.pvr_final_status_id_fk');
        $this->db->join('pvr_memo','pvr_memo.memo_id_pk=pvr_vr_detail.memo_id_fk');
        $this->db->where('pvr_vr_detail.pvr_id_pk',$pvr_id);
        $query1 =$this->db->get();
        return $query1->result_array();
        
    }
    function fetch_second_address($pvr_id)
    {
        $this->db->select('*');
        $this->db->from('pvr_vr_detail');
        $this->db->join('pvr_candidate_details', 'pvr_candidate_details.candidate_id_pk = pvr_vr_detail.candidate_id_fk');
        $this->db->join('pvr_master_district as district2','district2.district_id_pk=pvr_candidate_details.candidate_district_id2_fk');
        $this->db->join('pvr_master_state as state2','state2.state_id_pk=district2.state_id_fk');
        $this->db->join('pvr_master_pincode as pincode2','pincode2.pincode_id_pk=pvr_candidate_details.candidate_pin2_fk');
        $this->db->join('pvr_master_policestation as ps2','ps2.ps_id_pk=pvr_candidate_details.candidate_police_station_id2_fk');
        $this->db->where('pvr_vr_detail.pvr_id_pk',$pvr_id);
        $query2 =$this->db->get();
        return $query2->result_array();
    }
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
    function fetch_category()
    {
        $this->db->select('*');
        $this->db->from('pvr_master_sent_to');
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
    function check_memo_no($hash)
    {
        $code = $this->db->select('*')
						 ->from('pvr_memo')
						 ->where('memo_no',$hash)
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

    function submit($data,$memo_no)
    {
        // $format = "%Y-%M-%d";
        // $date=mdate($format);
        $date=date('Y-m-d');
        /******************************Populating Receipt No Table*************************/
        $this->db->select_max('receipt_id_pk');
        $this->db->from('pvr_receipt_no');
        $query=$this->db->get();
        $maxreceipt_id=$query->row();
        
        if(empty($maxreceipt_id))
        {
            $maxreceipt_id->receipt_id_pk=1;
        }
        else
        {
            $maxreceipt_id->receipt_id_pk=$maxreceipt_id->receipt_id_pk+1;
        }

        $receiptdata=array(
            'receipt_id_pk'=>$maxreceipt_id->receipt_id_pk,
            'receipt_date'=>$data['receiptdate'],
            'receipt_no'=>$data['receiptno']
        );
        $this->db->insert('pvr_receipt_no',$receiptdata);

        /******************************Populating Reference No Table*************************/
        $refdata=array(
            'ref_no_pk'=>$data['refno'],
            'receipt_id_fk'=>$maxreceipt_id->receipt_id_pk,
            'ref_date'=>$data['refdate']
        );
        $this->db->insert('pvr_reference_no',$refdata);

        /******************************Populating Candidate Details Table*************************/
        $this->db->select_max('candidate_id_pk');
        $this->db->from('pvr_candidate_details');
        $query=$this->db->get();
        $maxcandidate_id=$query->row();
        
        if(empty($maxcandidate_id))
        {
            $maxcandidate_id->candidate_id_pk=1;
        }
        else
        {
            $maxcandidate_id->candidate_id_pk=$maxcandidate_id->candidate_id_pk+1;
        }

        $candidate_pin_id1=$this->fetch_pin_id($data['pin1'],$data['district1']);
        $candidate_pin_id2=$this->fetch_pin_id($data['pin2'],$data['district2']);

       
        $candidate_detail=array(
            'candidate_id_pk'=>$maxcandidate_id->candidate_id_pk,
            'reference_no_fk'=>$data['refno'],
            'employer_id_fk'=>$data['employer'],
            'profile_id_fk'=>NULL,
            'candidate_f_name'=>$data['firstname'],
            'candidate_m_name'=>$data['middlename'],
            'candidate_l_name'=>$data['lastname'],
            'candidate_gender_id_fk'=>$data['gender'],
            'candidate_caste_id_fk'=>$data['caste'],
            'candidate_aadhaar_no'=>$data['aadhaarno'],
            'candidate_house_no1'=>$data['houseno1'],
            'candidate_street1'=>$data['street1'],
            'candidate_landmark1'=>$data['landmark1'],
            'candidate_city1'=>$data['city1'],
            'candidate_post_office1'=>$data['po1'],
            'candidate_police_station_id1_fk'=>$data['ps1'],
            'candidate_pin1_fk'=>$candidate_pin_id1,
            'candidate_district_id1_fk'=>$data['district1'],
            'candidate_photo_path'=>'test/path',
            'candidate_defence_type_id_fk'=>$data['defence'],
            'candidate_house_no2'=>$data['houseno2'],
            'candidate_street2'=>$data['street2'],
            'candidate_landmark2'=>$data['landmark2'],
            'candidate_city2'=>$data['city2'],
            'candidate_post_office2'=>$data['po1'],
            'candidate_police_station_id2_fk'=>$data['ps2'],
            'candidate_pin2_fk'=>$candidate_pin_id2,
            'candidate_district_id2_fk'=>$data['district2']

        );
        $this->db->insert('pvr_candidate_details',$candidate_detail);

        /******************************Populating PVR Memo Table*************************/

        $this->db->select_max('memo_id_pk');
        $this->db->from('pvr_memo');
        $query=$this->db->get();
        $maxmemo_id=$query->row();
        
        if(empty($maxmemo_id))
        {
            $maxmemo_id->memo_id_pk=1;
        }
        else
        {
            $maxmemo_id->memo_id_pk=$maxmemo_id->memo_id_pk+1;
        }
        $memo_data=array(
            'memo_id_pk'=>$maxmemo_id->memo_id_pk,
            'memo_no'=>$memo_no,
            'issue_date'=>$date,
            'issued_by_dept_id_fk'=>$this->session->userdata('department_id'),
        );
        $this->db->insert('pvr_memo',$memo_data);

        /******************************Populating PVR_WITH Table*************************/
        $this->db->select_max('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $query=$this->db->get();
        $maxpvr_id=$query->row();
        
        if(empty($maxpvr_id))
        {
            $maxpvr_id->pvr_id_pk=1;
        }
        else
        {
            $maxpvr_id->pvr_id_pk=$maxpvr_id->pvr_id_pk+1;
        }

        /************************************************************************************/

        $this->db->select_max('pvr_with_id_pk');
        $this->db->from('pvr_with');
        $query=$this->db->get();
        $maxpvrwith_id=$query->row();
        
        if(empty($maxpvrwith_id))
        {
            $maxpvrwith_id->pvr_with_id_pk=1;
        }
        else
        {
            $maxpvrwith_id->pvr_with_id_pk=$maxpvrwith_id->pvr_with_id_pk+1;
        }

        /************************************************************************************/

        $this->db->select('dept_name');
        $this->db->from('pvr_master_department');
        $this->db->where('dept_id_pk',$this->session->userdata('department_id'));
        $query = $this->db->get();
        $dept = $query->row();

        /************************************************************************************/

        $pvr_with_data=array(
                'pvr_with_id_pk'=>$maxpvrwith_id->pvr_with_id_pk,
                //'pvr_id_fk'=>$maxpvr_id->pvr_id_pk,
                'pvr_with_status'=>$dept->dept_name,
                'pvr_with_date'=>$date
            );

        $this->db->insert('pvr_with',$pvr_with_data);

        /******************************Populating PVR Final Status Table*************************/

        // $this->db->select_max('pvr_final_status_id_pk');
        // $this->db->from('pvr_final_status');
        // $query=$this->db->get();
        // $maxpvrfinalstatuswith_id=$query->row();
        
        // if(empty($maxpvrfinalstatuswith_id))
        // {
        //     $maxpvrfinalstatuswith_id->pvr_final_status_id_pk=1;
        // }
        // else
        // {
        //     $maxpvrfinalstatuswith_id->pvr_final_status_id_pk=$maxpvrfinalstatuswith_id->pvr_final_status_id_pk+1;
        // }

        // $pvr_finalstatus_data=array(

        //     'pvr_final_status_id_pk'=>$maxpvrfinalstatuswith_id->pvr_final_status_id_pk,
        //     //'pvr_id_fk'=>$maxpvr_id,
        //     'final_status_name'=>'Under Process'
        // );

        // $this->db->insert('pvr_final_status',$pvr_finalstatus_data);

        /******************************Populating PVR Details Table*************************/
        

        $pvr_data=array(
            'pvr_id_pk'=>$maxpvr_id->pvr_id_pk,
            'receipt_id_fk'=>$maxreceipt_id->receipt_id_pk,
            'candidate_id_fk'=>$maxcandidate_id->candidate_id_pk,
            'application_date'=>$date,
            'pvr_type_fk'=>$data['defence'],
            'memo_id_fk'=>$maxmemo_id->memo_id_pk,
            'pvr_with_id_fk'=>$maxpvrwith_id->pvr_with_id_pk,
            'pvr_final_status_id_fk'=>1,
            'remarks'=>'test',
            'pvr_report_id_fk'=>NULL,
            'district_id_fk'=>$this->session->userdata('office_district'),
            'sent_to_id_fk'=>$data['category'],
            'ocvr_approval'=>0,
            'adm_approval'=>0,
            'ocvr_unverified_approval'=>0,
            'ocvr_verified_nondefence_approval'=>0,
        );

        $this->db->insert('pvr_vr_detail',$pvr_data);
        


    }

    function addoffice($data)
    {
            $this->db->select_max('employer_id_pk');
            $this->db->from('pvr_employer');
            $query=$this->db->get();
            $maxemp_id=$query->row();

            if(empty($maxemp_id))
            {
                $maxemp_id->employer_id_pk=1;
            }
            else
            {
                $maxemp_id->employer_id_pk=$maxemp_id->employer_id_pk+1;
            }
            $emp=array(
                'employer_id_pk'=>$maxemp_id->employer_id_pk,
                'profile_id_fk'=>NULL,
                'employer_name'=>$data['employer_name'],
                'employer_add1'=>$data['employer_addr1'],
                'employer_add2'=>$data['employer_addr2'],
                'district_id_fk'=>$this->session->userdata('office_district')
            );
            $this->db->insert('pvr_employer',$emp);
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
                $maxpin_id->pincode_id_pk=1;
            }
            else
            {
                $maxpin_id->pincode_id_pk=$maxpin_id->pincode_id_pk+1;
            }
            $pin=array(
                'pincode_id_pk'=>$maxpin_id->pincode_id_pk,
                'pincode_no'=>$pin,
                'district_id_fk'=>$district_id
            );

            $this->db->insert('pvr_master_pincode',$pin);
            return $maxpin_id;
        }
        else
          return $pin_id->pincode_id_pk;
    }
    function ocvr_approve($pvr_id)
    {
        $this->db->set('ocvr_approval',1);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');

        $this->db->select('dept_name');
        $this->db->from('pvr_master_department');
        $this->db->where('dept_id_pk',$this->session->userdata('department_id'));
        $query = $this->db->get();
        $dept = $query->row();

        $this->db->select('pvr_with_id_fk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('pvr_id_pk',$pvr_id);
        $query = $this->db->get();
        $pvrwithid = $query->row();


        $this->db->set('pvr_with_status',$dept->dept_name);
        $this->db->where('pvr_with_id_pk',$pvrwithid->pvr_with_id_fk);
        $this->db->update('pvr_with');

    }
    function adm_approve($pvr_id)
    {
        $this->db->set('adm_approval',1);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');

        $this->db->select('dept_name');
        $this->db->from('pvr_master_department');
        $this->db->where('dept_id_pk',$this->session->userdata('department_id'));
        $query = $this->db->get();
        $dept = $query->row();

        $this->db->select('pvr_with_id_fk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('pvr_id_pk',$pvr_id);
        $query = $this->db->get();
        $pvrwithid = $query->row();


        $this->db->set('pvr_with_status',$dept->dept_name);
        $this->db->where('pvr_with_id_pk',$pvrwithid->pvr_with_id_fk);
        $this->db->update('pvr_with');

    }
    function ocvr_verified_nondefence_approve($pvr_id)
    {
        $this->db->set('ocvr_verified_nondefence_approval',1);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');

    }
    function ocvr_unverified_approve($pvr_id)
    {
        $this->db->set('ocvr_unverified_approval',1);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');

    }
    function verify($pvr_id)
    {
        $this->db->set('pvr_final_status_id_fk',2);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');
    }
    function unverify($pvr_id)
    {
        $this->db->set('pvr_final_status_id_fk',3);
        $this->db->where('pvr_id_pk',$pvr_id);
        $this->db->update('pvr_vr_detail');
    }
    function find_pvr_id($no,$t)
    {
        if($t==2)
        {
            $this->db->select('memo_id_pk');
            $this->db->from('pvr_memo');
            $this->db->where('memo_no',$no);
            $query = $this->db->get();
            $id = $query->row();

            if(!empty($id))
            {
                $this->db->select('pvr_id_pk');
                $this->db->from('pvr_vr_detail');
                $this->db->where('memo_id_fk',$id->memo_id_pk);
                $query = $this->db->get();
                $pvrid = $query->row();
                return $pvrid->pvr_id_pk;
            }
            return 0;
        }
        if($t==3)
        {
            $this->db->select('receipt_id_pk');
            $this->db->from('pvr_receipt_no');
            $this->db->where('receipt_no',$no);
            $query = $this->db->get();
            $id = $query->row();

            if(!empty($id))
            {
                $this->db->select('pvr_id_pk');
                $this->db->from('pvr_vr_detail');
                $this->db->where('receipt_id_fk',$id->receipt_id_pk);
                $query = $this->db->get();
                $pvrid = $query->row();

                return $pvrid->pvr_id_pk;
            }
            return 0;
        }
        if($t==4)
        {
            $this->db->select('receipt_id_fk');
            $this->db->from('pvr_reference_no');
            $this->db->where('ref_no_pk',$no);
            $query = $this->db->get();
            $id = $query->row();

            if(!empty($id))
            {
                $this->db->select('pvr_id_pk');
                $this->db->from('pvr_vr_detail');
                $this->db->where('receipt_id_fk',$id->receipt_id_fk);
                $query = $this->db->get();
                $pvrid = $query->row();

                return $pvrid->pvr_id_pk;
            }
            return 0;
        }
    }
    function a()
    {
        $month_number=date('n');
        $prev_quarter=ceil($month_number/3)-1;
        if($prev_quarter==1)
        {
            $prev_quarter=4;
        }
        $this->db->select('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('EXTRACT(quarter FROM application_date)=',$prev_quarter);
        $this->db->where('pvr_final_status_id_fk',1);
        $query=$this->db->get();
        $number=$query->num_rows();
        return $number;
    }
    function b()
    {
        $month_number=date('n');
        $quarter=ceil($month_number/3);
        $this->db->select('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('EXTRACT(quarter FROM application_date)=',$quarter);
        $query=$this->db->get();
        $number=$query->num_rows();
        return $number;
    }
    function c()
    {
        $month_number=date('n');
        $quarter=ceil($month_number/3);
        $this->db->select('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('EXTRACT(quarter FROM application_date)=',$quarter);
        $this->db->where('pvr_final_status_id_fk',1);
        $query=$this->db->get();
        $number=$query->num_rows();
        return $number;
    }
    function d()
    {
        $date=date('d-m-Y', strtotime('-120 day'));
        $this->db->select('pvr_id_pk');
        $this->db->from('pvr_vr_detail');
        $this->db->where('application_date<=',$date);
        $this->db->where('pvr_final_status_id_fk',1);
        $query=$this->db->get();
        $number=$query->num_rows();
        return $number;
    }
}
?>