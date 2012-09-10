<?php
class Model_main extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function welcome_page()
    {
		$data['movie'] = $this->db->count_all('movie');
		$data['main_genre'] = $this->db->count_all('main_genre');
		$data['main_movieurl'] = $this->db->count_all('main_movieurl');
		$data['movie_akas_id'] = $this->db->count_all('movie_akas_id');
		$data['movie_animation_department'] = $this->db->count_all('movie_animation_department');
		$data['movie_art_department'] = $this->db->count_all('movie_art_department');
		$data['movie_art_direction'] = $this->db->count_all('movie_art_direction');
		$data['movie_assistant_director'] = $this->db->count_all('movie_assistant_director');
		$data['movie_camera_and_electrical_department'] = $this->db->count_all('movie_camera_and_electrical_department');
		$data['movie_cast'] = $this->db->count_all('movie_cast');
		$data['movie_casting_department'] = $this->db->count_all('movie_casting_department');
		$data['movie_casting_director'] = $this->db->count_all('movie_casting_director');
		$data['movie_certificates'] = $this->db->count_all('movie_certificates');
		$data['movie_cinematographer'] = $this->db->count_all('movie_cinematographer');
		$data['movie_color_info'] = $this->db->count_all('movie_color_info');
		$data['movie_costume_department'] = $this->db->count_all('movie_costume_department');
		$data['movie_costume_designer'] = $this->db->count_all('movie_costume_designer');
		$data['movie_countries'] = $this->db->count_all('Countries');
		$data['movie_director'] = $this->db->count_all('movie_director');
		$data['movie_distributors'] = $this->db->count_all('movie_distributors');
		$data['movie_editor'] = $this->db->count_all('movie_editor');
		$data['movie_genres'] = $this->db->count_all('movie_genres');
		$data['movie_languages'] = $this->db->count_all('Languages');
		$data['movie_make_up'] = $this->db->count_all('movie_make_up');
		$data['movie_miscellaneous_companies'] = $this->db->count_all('movie_miscellaneous_companies');
		$data['movie_miscellaneous_crew'] = $this->db->count_all('movie_miscellaneous_crew');
		$data['movie_music_department'] = $this->db->count_all('movie_music_department');
		$data['movie_original_music'] = $this->db->count_all('movie_original_music');
		$data['movie_plot'] = $this->db->count_all('movie_plot');
		$data['movie_production_companies'] = $this->db->count_all('movie_production_companies');
		$data['movie_production_manager'] = $this->db->count_all('movie_production_manager');
		$data['movie_set_decoration'] = $this->db->count_all('movie_set_decoration');
		$data['movie_sound_crew'] = $this->db->count_all('movie_sound_crew');
		$data['movie_sound_mix'] = $this->db->count_all('movie_sound_mix');
		$data['movie_special_effects_companies'] = $this->db->count_all('movie_special_effects_companies');
		$data['movie_special_effects_department'] = $this->db->count_all('movie_special_effects_department');
		$data['movie_stunt_performer'] = $this->db->count_all('movie_stunt_performer');
		$data['movie_transportation_department'] = $this->db->count_all('movie_transportation_department');
		$data['movie_writer'] = $this->db->count_all('movie_writer');
		$data['plot'] = $this->db->count_all('plot');
		 
		
		$this->load->library('table');
		$query = $this->db->query("SELECT * FROM main_movie_fetch_statistics");

		$data['extract_result'] = $this->table->generate($query);
		return $data;
	}
	
}
