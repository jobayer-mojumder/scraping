<?php
/**
 * @Author: Jobayer Mojumder
 * @Date:   2018-07-29
 * @Last Modified by:   jobayermojumder
 * @Last Modified time: 2018-07-30 10:41:50
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

	private $table = array('Title','Original_text','Lead_Tags','Source','Reference_URL','Project_Start','Project_deadline','Work_Type','Lead_Value','Value_Type','CMS','Website','Website_Built','Website_Information','Mobile_Responsive','Google_Desktop_score','Google_Mobile_score','SEO_Score','Website_Speed','Website_Performance_Grade','Google_Sandbox','Schema','Domain_Age','Website_Create','Website_Last_Update','Status_Code','Contact_title','First_Name','Last_Name','Position','Company_Name','Nature_of_Business_SIC','Company_Registration_Number','linkedin','google_plus','facebook','skype','Personal_email','Email','Mailto','Phone_Number','Mobile_Number','Lead_Class','Email_Subject','Status','Note','Instagram','Professional_Email','Contact_Number','Experince','Reference','Why_are_you_leaving_current_job','How_many_Years_Experince','Internal_Grade','CV','Salary_Expectation','Category');

	function __construct() {
		parent::__construct();
		$this->load->model('Welcome_model');
		$this->load->library('form_validation');
		$this->load->library('email');
		//error_reporting(1);
	}

	public function data($range_start=0){
		if ($range_start=='' || $range_start==0 ) {
			echo "Range not valid";
			exit();
		}else{

			$this->load->library('Simple_html_dom');
			$html = new Simple_html_dom();

			$tag = array();
			$content = array();
			$postdata = array();
			$range_end = $range_start + 50;
			for ($k=$range_start; $k<$range_end;$k++) {
				reset($tag);
				reset($content);
				reset($postdata);

				$postdata['job_id'] = $k;
				$url = 'https://ggtaskers.co.uk/node/'.$k;
				$html->load_file($url);


				foreach ($html->find('h1[class=page-header]') as $element) {
					$postdata['Job_Title'] = $element->plaintext;
				}

				foreach ($html->find('div[class=field-label]') as $element) {
					array_push($tag, $element->plaintext);
				}

				foreach ($html->find('div[class=field-item even]') as $element) {
					array_push($content, $element->plaintext);
				}

				for($i=0; $i<count($tag); $i++) {
					$new_tag = str_replace(':&nbsp;', '', $tag[$i]);
					$new_tag = str_replace(' ', '_', $new_tag);
					$new_tag = str_replace('(', '', $new_tag);
					$new_tag = str_replace(')', '', $new_tag);

					if (in_array($new_tag, $this->table)){
						if ($new_tag == 'Schema') {
							$postdata["Schema_text"] = $content[$i];
						}else{
							$postdata[$new_tag] = $content[$i];
						}
					}
				}
				$query = $this->db->insert('job',$postdata);

				if ($query) {
					echo "Inserted into table, job page id = ". $k."<br>";
				}else{
					echo "<span color=red>Insertion failed, job page id = ". $k."<span><br>";
				}

			}

			$nextUrl = base_url().'welcome/data/'.$range_end;
			echo "<br><br>Next url = <a href=".$nextUrl."> CLick Here</a><br><br><br>";
		}
	}

}