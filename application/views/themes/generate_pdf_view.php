<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href = "<?php echo base_url(); ?>" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<style type="text/css">
			@page {
				margin: 0.4cm;
			}

			body {
				font-family: times;
				margin: 0.5cm 0;
				text-align: justify;
			}

			#header, #footer {
				position: fixed;
				left: 0;
				right: 0;
				color: #aaa;
				font-size: 0.9em;
			}

			#header {
				top: 0;
				border-bottom: 0.1pt solid #aaa;
			}

			#footer {
				bottom: 0;
				border-top: 0.1pt solid #aaa;
			}

			#header table, #footer table {
				width: 100%;
				border-collapse: collapse;
				border: none;
			}

			#header td, #footer td {
				padding: 0;
				width: 50%;
			}

			/*.page-number  {
				text-align: center;
			}*/

			.page-number:before {
				content: "Page " counter(page);
			}

			hr {
				page-break-after: always;
				border: 0;
			}
			.flr{
				float: right;
			}
			.cl{
				clear: both;
			}
			.text-center{
				text-align: center;
			}
			.text-right{
				text-align: right;
			}
			p, ol{
				font-size: 14px;
				
			}
			.no_date{
				font-size: 14px;
			}
			
			/* Table Start */
			.data_table{
				font-size: 12px;
			}
			
			table.table, .table td, .table th {
    			border: 1px solid black;
			}
			table {
			    border-collapse: collapse;
			    /*margin-left: %;*/
			    width: 100%;
			}
			.td {
			    /*vertical-align: bottom;*/
			    /*padding:5px;*/
			    text-align: center;
			}
			.row
			{
				width: 100%;
			}
			.course_col
			{
				text-align: left;

			}
			.course_li
			{
				margin-bottom: 1%;
			}
			ul li{list-style: none;margin-bottom: 2%}

			/* Table Start */
			  

		</style>
</head>
<body>
	<div id="footer">
			<table>
				<tr>
					<td>www.apps-hwr.wb.gov.in</td>
					<td class="page-number" style="text-align: right;"></td>
				
				</tr>
			</table>	
		</div>

		 <div style="text-align:center; margin-bottom: 1%">
            <div><img src="<?php echo base_url(); ?>admin/themes/adminlte/dist/img/hwh.png" rel="www.apps-hwr.wb.gov.in" alt="https://www.apps-hwr.wb.gov.in" /></div>
             <div style="font-size:22px; color:#333; font-weight:bold;">Online Application for Recruitment</div>
             <div style="font-size:20px; color:#F63; font-weight:bold;">District Administration Howrah</div>
             <div style="font-size:19px; color:#038DCC;">Social Welfare Department</div>
             <div style="font-size:17px; color:#000;">Office of the District Magistrate Howrah, Government of West Bengal</div>
         </div>
         <div > 
         	<ul>
         		<li style="border: 0px solid"><b>Applicant Id:</b> <?php echo $spm_dtls[0]['spm_code'] ?><img src="<?php echo base_url() ?>files/public/spm/photo/<?php echo $spm_dtls[0]['spm_photo'] ?>" width="150px" height="150px" style="float: right;margin-left: 40%"></li>
         	</ul>

         	
         </div>
         <div >
         	<ul>
         		<li>
         			<b>Position Applied For:</b><?php echo $spm_dtls[0]['spm_post'] ?>
         		</li>
         		<li>
         			<b>Name:</b><?php echo trim($spm_dtls[0]['spm_fname']).' '.trim($spm_dtls[0]['spm_mname']).' '.trim($spm_dtls[0]['spm_lname']) ?>
         		</li>
         		 
         		<li>
         			<b>Guardian Name:</b><?php echo trim($spm_dtls[0]['spm_gurdian_fname']).' '.trim($spm_dtls[0]['spm_gurdian_mname']).' '.trim($spm_dtls[0]['spm_gurdian_lname']) ?>
         		</li>
         		<li>
         			<b>Category:</b><?php echo $spm_dtls[0]['caste_description'] ?>
         		</li>
         		<li>
         			<b>Religion:</b><?php echo $spm_dtls[0]['religion_description'] ?>
         		</li>
         		<li>
         			<b>Date of Birth:</b><?php echo date('d/m/Y',strtotime($spm_dtls[0]['spm_dob'])) ?>
         		</li>
         		<li>
         			<b>Age:</b><?php echo $spm_dtls[0]['spm_age'] ?>
         		</li>
         		<li>
         			<b>Gender:</b><?php echo $spm_dtls[0]['gender_description'] ?>
         		</li>
         		<li>
         			<b><?php echo $spm_dtls[0]['pbssd_id_proof_name'] ?>:</b><?php echo $spm_dtls[0]['spm_id_proof_number'] ?>
         		</li>
         		<li>
         			<b>Present Address:</b><?php echo $spm_dtls[0]['spm_address_house_no'].', '.$spm_dtls[0]['spm_address_street'].', '.$spm_dtls[0]['spm_post_office'].', '.$spm_dtls[0]['spm_police_station'].', '.$spm_dtls[0]['district_name'].', '.$spm_dtls[0]['subdiv_name'].', '.$spm_dtls[0]['block_municipality_name'].', '.$spm_dtls[0]['spm_pincode'].', '.$spm_dtls[0]['state_name'] ?>
         		</li>

         		<li>
         			<b>Permanent Address:</b><?php echo $spm_dtls[0]['spm_permanent_address_house_no'].', '.$spm_dtls[0]['spm_permanent_address_street'].', '.$spm_dtls[0]['spm_permanent_post_office'].', '.$spm_dtls[0]['spm_permanent_police_station'].', '.$spm_dtls[0]['per_dist'].', '.$spm_dtls[0]['per_subdiv'].', '.$spm_dtls[0]['per_block'].', '.$spm_dtls[0]['spm_permanent_pincode'].', '.$spm_dtls[0]['per_state'] ?>
         		</li>

         		<li>
         			<b>Primary Contact Number :</b><?php echo $spm_dtls[0]['spm_primary_contact_no'] ?>
         		</li>
         		<li>
         			<b>Secondary Contact Number :</b><?php echo $spm_dtls[0]['spm_secondary_contact_no'] ?>
         		</li>
         		<li>
         			<b>Email ID :</b><?php echo $spm_dtls[0]['spm_email_id'] ?>
         		</li>

         	</ul>
         </div>
         <div style="margin-top: 16%">
         	<h4>Educational Qualification</h4>
         	<table class="table" >
         		 
         		<tbody style="border: 1px solid;">
         			<tr>
         				<th></th>
         				<th>Stream</th>
	         			<th>College / University / Board</th>
	         			<th>CGPA</th>
	         			<th>Year of Passing</th>
         			</tr>
         			<tr>
         				<td>Post Graduation</td>
         				<td><?php echo $spm_dtls[0]['spm_edu_post_stream'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_post_gra_college'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_post_gra_marks'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_post_gra_passing_year'] ?></td>
         			</tr>
         			<tr>
         				<td>Graduation</td>
         				<td><?php echo $spm_dtls[0]['spm_edu_gra_stream'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_gra_college'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_gra_marks'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_gra_passing_year'] ?></td>
         			</tr>
         			<tr>
         				<td>12th / Higher Secondary</td>
         				<td><?php echo $spm_dtls[0]['spm_edu_high_school_stream'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_high_school'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_high_school_marks'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_high_school_passing_year'] ?></td>
         			</tr>
         			<tr>
         				<td>10th / Secondary</td>
         				<td><?php echo $spm_dtls[0]['spm_edu_school_stream'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_school'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_school_marks'] ?></td>
         				<td><?php echo $spm_dtls[0]['spm_edu_school_passing_year'] ?></td>
         			</tr>
         		</tbody>
         	</table>
         </div>
         <div >
         	<h4>Experience</h4>
         	<table class="table" style="margin-top: 3%">
         		
         		<tbody>
         			<tr>
         			<th>SL NO</th>
         			<th>Name of Organization</th>
         			<th>Designation</th>
         			<th>Date of Joining</th>
         			<th>Date of Resigning</th>
         			<th>Current Organization Status</th>
         		</tr>
         	<?php
         		$i = 1;
         		foreach($spm_exp as $spm)
         		{
         	?>
         			<tr>
         				<td><?php echo $i; ?></td>
         				<td>
         					<?php echo $spm['spm_exp_org_name'] ?>
         				</td>
         				<td>
         					<?php echo $spm['spm_exp_designation'] ?>
         				</td>
         				<td>
         					<?php echo date('d/m/Y',strtotime($spm['spm_exp_joining_date'])) ?>
         				</td>
         				<td>
         					<?php echo date('d/m/Y',strtotime($spm['spm_exp_resign_date'])) ?>
         				</td>
         				<td>
         					<?php 
         						if($spm['spm_exp_current_org_status'] == 0) 
         						{
         							echo "NO";
         						}
         						else
         						{
         							echo "YES";
         						}
         					?>
         				</td>
         			</tr>
         	<?php
         	$i++;
         		}
         	?>
         </tbody>
         	</table>
         </div>
         <div style="margin-top: 3%;">
         	<ul>
         		<li>
         			<b>Date: <?php echo date('d/m/Y',strtotime($spm_dtls[0]['entry_time'])) ?></b>
         			<img src="<?php echo base_url() ?>files/public/spm/signature/<?php echo $spm_dtls[0]['spm_sign'] ?>" width="150px" height="150px" style="float: right;margin-left: 40%">
         		</li>
         	</ul>
         </div>

		
		 
</body>
</html>