<?php
class search{
login/search()
function search(){
		$data['main_content'] ='searchitem';
		$this->load->view('includes/template',$data);
		
	}

login/execute_search()

function execute_search()
    {
		 // Retrieve the posted search term.
        $search_term = $this->input->post('movie_name');
		$select_option = $_POST['formCat'];
		$this->load->model('membership_model');
				$data['results'] =	$this->membership_model->get_results($search_term,$select_option);

        // Pass the results to the view.
        $this->load->view('searchResult',$data);
		
	}
	
 
}
?>