<?php 

class Insert_model extends CI_Model
{
	

	public function insert_form()
	{

		$data =  array(

			// 'Firstname'  	=> $this->input->post('firstname'),
			// 'Lastname'  	=> $this->input->post('lastname'),
			// 'Firstnameeng'  => $this->input->post('firstnameeng'),
			// 'Lastnameeng'  	=> $this->input->post('lastnameeng'),
			// 'Sex'  			=> $this->input->post('sex'),
			// 'Cardid'  		=> $this->input->post('cardid'),
			'Student_id'	=> $this->session->userdata('username'),
			'Citizen_id'	=> $this->session->userdata('citizen_id'),
			'Province'  	=> $this->input->post('province'),
			'District'  	=> $this->input->post('district'),
			'Subdistrict'  	=> $this->input->post('subdistrict'),
			'Address'  		=> $this->input->post('address'),
			'Zipcode'		=> $this->input->post('zipcode'),
			'Telephone'  	=> $this->input->post('telephone'),
			'Email'  		=> $this->input->post('email'),
			'Lineid'  		=> $this->input->post('lineid'),
			'Facebook'  	=> $this->input->post('facebook'),
			'Education'  	=> $this->input->post('education'),
			'Year_success'  => $this->input->post('year_success'),
			'Department'  	=> $this->input->post('department'),
			'Major'  		=> $this->input->post('major'),
			'Typejob'		=> $this->input->post('typejob'),

		);

		$data_company = array(

			'Company'  			=> $this->input->post('company'),
			'Position'  		=> $this->input->post('position'),
			'Jobdescription'  	=> $this->input->post('jobdescription'),
			'Jobyear'  			=> $this->input->post('jobyear'),
			'Address_company'  	=> $this->input->post('address_company'),
			'County_company'  	=> $this->input->post('county_company'),
			'Subdistrict_company'  	=> $this->input->post('subdistrict_company'),
			'District_company'  	=> $this->input->post('district_company'),
			'Province_company'  	=> $this->input->post('province_company'),
			'Zipcode_company'  		=> $this->input->post('zipcode_company'),
		);

		$data_education = array(

			'University'	=> $this->input->post('university'),
			'Level_next'	=> $this->input->post('level_next'),
			'Faculty_next'	=> $this->input->post('faculty_next'),
			'Major_next'	=> $this->input->post('major_next'),
			'Year_next'		=> $this->input->post('year_next'),
			'County_next'	=> $this->input->post('county_next')

		);

		$data_business = array(

			'Company_owner'		=> $this->input->post('company_owner'),
			'Format_owner'		=> $this->input->post('format_owner'),
			'Address_owner'		=> $this->input->post('address_owner'),
			'Subdistrict_owner'	=> $this->input->post('subdistrict_owner'),
			'District_owner'	=> $this->input->post('district_owner'),
			'Province_owner'	=> $this->input->post('province_owner'),
			'Zipcode_owner'		=> $this->input->post('zipcode_owner')

		);

		$data_null = array(

			'Plan'		=> $this->input->post('plan'),
			'Other'		=> $this->input->post('other')

		);

		if ($this->input->post('typejob') == 'ทำงาน') {
			$this->db->insert('job', $data_company);

		}elseif ($this->input->post('typejob') == 'ศึกษาต่อ') {
			$this->db->insert('study', $data_education);

		}elseif ($this->input->post('typejob') == 'ธุรกิจส่วนตัว') {
			$this->db->insert('business', $data_business);

		}elseif ($this->input->post('typejob') == 'ยังไม่ได้ทำงาน') {
			$this->db->insert('nulljob', $data_null);

		}

		$query = $this->db->insert('data_student', $data);

		if ($query) {
			return true;
		}else{
			return false;
		}
	}	







// end
}