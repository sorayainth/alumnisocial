<?php 

class Main_model extends CI_Model
{

	public function get_user()
	{
		$this->db->select('*')
				 ->from('data_student')
				 ->join('student_info', 'student_info.Student_id=data_student.Student_id');
		$query = $this->db->get();

		return $query;

	}

	public function get_student_info()
	{
		$query = $this->db->get('student_info');

		return $query;
	}

	public function checkform()
	{
		$this->db->select('Student_id')
				 ->from('data_student')
				 ->where('Student_id', $this->session->userdata('username'));
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function numstudentall()
	{
		$query = $this->db->get('student_info');
		$num = $query->num_rows();

		return $num;
		
	}

	public function num_addform()
	{
		$this->db->select('Student_id')
				 ->from('data_student')
				 ->group_by('Student_id');
		$query = $this->db->get();
		$num = $query->num_rows();

		return $num;
		
	}

	public function num_job()
	{
		$this->db->select('Student_id,Typejob')
				 ->from('data_student')
				 ->where('Typejob', 'ทำงาน')
				 ->group_by('Student_id');
		$query = $this->db->get();
		$num = $query->num_rows();

		return $num;
		
	}

	public function num_study()
	{
		$this->db->select('Student_id,Typejob')
				 ->from('data_student')
				 ->where('Typejob', 'ศึกษาต่อ')
				 ->group_by('Student_id');
		$query = $this->db->get();
		$num = $query->num_rows();

		return $num;
		
	}

	public function num_business()
	{
		$this->db->select('Student_id,Typejob')
				 ->from('data_student')
				 ->where('Typejob', 'ธุรกิจส่วนตัว')
				 ->group_by('Student_id');
		$query = $this->db->get();
		$num = $query->num_rows();

		return $num;
		
	}

	public function num_nulljob()
	{
		$this->db->select('Student_id,Typejob')
				 ->from('data_student')
				 ->where('Typejob', 'ยังไม่ได้ทำงาน')
				 ->group_by('Student_id');
		$query = $this->db->get();
		$num = $query->num_rows();

		return $num;
		
	}
}