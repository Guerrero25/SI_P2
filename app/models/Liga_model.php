<?php
	class Liga_model extends ActiveRecord\Model{

		function ver_partidos(){
	    return $this->find_by_sql('SELECT * FROM partido_models');
	  }

		function ver_posiciones(){
			return $this->find_by_sql('SELECT * FROM equipo_models ORDER BY p_win DESC, p_loss ASC');
		}

		function ver_divisiones(){
			return $this->find_by_sql('SELECT * FROM equipo_models ORDER BY p_win DESC, p_loss ASC');
		}

		public function equipos_division($id_div)
		{
			return $this->find_by_sql('SELECT * FROM equipo_models WHERE e_div = '.$id_div.' ORDER BY p_win DESC, p_loss ASC');
		}

		public function todos_equipos()
		{
			return $this->find_by_sql('SELECT * FROM equipo_models ORDER BY p_win DESC, p_loss ASC');
		}

	}
?>
