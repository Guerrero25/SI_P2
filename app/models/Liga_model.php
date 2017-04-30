<?php
	class Liga_model extends ActiveRecord\Model{

		function ver_partidos(){
	    return $this->find_by_sql('SELECT * FROM partidos');
	  }

		function ver_posiciones(){
			return $this->find_by_sql('SELECT * FROM equipos ORDER BY p_win DESC, p_loss ASC');
		}

		function ver_divisiones(){
			return $this->find_by_sql('SELECT * FROM equipos ORDER BY p_win DESC, p_loss ASC');
		}

		function estadisticas($id_div){
			return $this->find_by_sql('SELECT * FROM equipos WHERE e_div = '.$id_div.' ORDER BY p_win DESC, p_loss ASC');
		}

		function datos_jugador(){
			return 0;
		}

		function datos_equipo(){
			return 0;
		}

		public function equipos_division($id_div)
		{
			return $this->find_by_sql('SELECT * FROM equipos WHERE e_div = '.$id_div.' ORDER BY p_win DESC, p_loss ASC');
		}

		public function todos_equipos()
		{
			return $this->find_by_sql('SELECT * FROM equipos ORDER BY p_win DESC, p_loss ASC');
		}
		function estadisticasEquipo(){
			return 0;
		}

	}
?>
