
	<h1>Welcome to MUVIDB ! </h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically </p>

		<p>Data Base Information </p>
		<code>
			
			<?php 
		echo $data['extract_result'];
		echo "<table border =1 >";
		echo "<hr>";
		echo "<tr><td>Total Movie :</td><td>".$data['movie']."</td></tr>";
		echo "<tr><td>Total genre :</td><td>".$data['main_genre']."</td></tr>";
		echo "<tr><td>Total Movie url :</td><td>".$data['main_movieurl']."</td></tr>";
		echo "<tr><td>Total movie_akas: </td><td>".$data['movie_akas_id']."</td></tr>";
		echo "<tr><td>Total Animation Dept :</td><td>".$data['movie_animation_department']."</td></tr>";
		echo "<tr><td>Toatl Art Dept :</td><td>".$data['movie_art_department']."</td></tr>";
		echo "<tr><td>Total Atr Direction :</td><td>".$data['movie_art_direction']."</td></tr>";
		echo "<tr><td>Total Movie Assistant Director :</td><td>".$data['movie_assistant_director'] ."</td></tr>";
		echo "<tr><td>Total movie_camera_and_electrical_department :</td><td>".$data['movie_camera_and_electrical_department']."</td></tr>";
		echo "<tr><td>Total movie_cast :</td><td>".$data['movie_cast']."</td></tr>";
		echo "<tr><td>Total movie_casting_department :</td><td>".$data['movie_casting_department']."</td></tr>";
		echo "<tr><td>Total movie_casting_director</td><td>".$data['movie_casting_director']."</td></tr>";
		echo "<tr><td>Total  movie_certificates: </td><td>".$data['movie_certificates']."</td></tr>";
		echo "<tr><td>Total movie_cinematographer:</td><td>".$data['movie_cinematographer']."</td></tr>";
		echo "<tr><td>Total movie_color_info :</td><td> ".$data['movie_color_info']."</td></tr>";
		echo "<tr><td>Total movie_costume_department : </td><td>".$data['movie_costume_department']."</td></tr>";
		echo "<tr><td>Toatl movie_costume_designer: </td><td>".$data['movie_costume_designer']."</td></tr>";
		echo "<tr><td>Total movie_countries: </td><td>".$data['movie_countries']."</td></tr>";
		echo "<tr><td>Total movie_director : </td><td>".$data['movie_director']."</td></tr>";
		echo "<tr><td>Total movie_distributors:</td><td> ".$data['movie_distributors']."</td></tr>";
		echo "<tr><td>Total movie_editor: </td><td>".$data['movie_editor']."</td></tr>";
		echo "<tr><td>Total movie_genres : </td><td>".$data['movie_genres']."</td></tr>";
		echo "<tr><td>Total movie_languages :</td><td> ".$data['movie_languages']."</td></tr>";
		echo "<tr><td>Total movie_make_up : </td><td>".$data['movie_make_up']."</td></tr>";
		echo "<tr><td>Total movie_miscellaneous_companies</td><td>".$data['movie_miscellaneous_companies']."</td></tr>";
		echo "<tr><td>Total movie_miscellaneous_crew: </td><td>".$data['movie_miscellaneous_crew']."</td></tr>";
		echo "<tr><td>Total movie_music_department : </td><td>".$data['movie_music_department']."</td></tr>";
		echo "<tr><td>Total movie_original_music :</td><td>".$data['movie_original_music']."</td></tr>";
		echo "<tr><td>Total movie_plot : </td><td>". $data['movie_plot']."</td></tr>";
		echo "<tr><td>Total movie_production_companies :</td><td> ".$data['movie_production_companies']."</td></tr>";
		echo "<tr><td>Total movie_production_manager</td><td>".$data['movie_production_manager']."</td></tr>";
		echo "<tr><td>total movie_set_decoration : </td><td>".$data['movie_set_decoration']."</td></tr>";
		echo "<tr><td>Total movie_sound_crew: </td><td>".$data['movie_sound_crew']."</td></tr>";
		echo "<tr><td>Total movie_sound_mix : </td><td>".$data['movie_sound_mix']."</td></tr>";
		echo "<tr><td>Total movie_special_effects_companies : </td><td>".$data['movie_special_effects_companies']."</td></tr>";
		echo "<tr><td>Total movie_special_effects_department :</td><td> ".$data['movie_special_effects_department']."</td></tr>";
		echo "<tr><td>Total movie_stunt_performer :</td><td> ".$data['movie_stunt_performer']."</td></tr>";
		echo "<tr><td>Total movie_transportation_department : </td><td>".$data['movie_transportation_department']."</td></tr>";
		echo "<tr><td>Total movie_writer : </td><td>".$data['movie_writer']."</td></tr>";
		echo "<tr><td>Total plot : </td><td>".$data['plot']."</td></tr>";
		?>
		</table>
		</code>
		

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds on <?php echo date("H m s"); ?></p>
