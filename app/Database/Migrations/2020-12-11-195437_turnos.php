<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Turnos extends Migration
{
	public function up()
	{
		{
			$this->forge->addField([
					'id_Turno'          => [
							'type'           => 'INT',
							'constraint'     => 5,
							'unsigned'       => true,
							'auto_increment' => true,
					],
					'HraInicio'       	=> [
							'type'           => 'VARCHAR',
							'constraint'     => '5',
						],
					'FechaProceso'		=> [
						'type'           => 'timestamp',
						'constraint'     => 6,
					],
					'HraInicio'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => 2,
					],
					'MinInicio'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => 2,
					],
					'HraTermino'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => 2,
					],
					'MinTermino'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => 2,
					],
					'Descuento'		=> [
						'type'           => 'smallint',
						'constraint'     => 16,
					],
					'Lunes'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Martes'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Miercoles'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Jueves'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Viernes'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Sabado'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
					'Domingo'		=> [
						'type'           => 'VARCHAR',
						'constraint'     => '1',
					],
			]);	
					
			$this->forge->addKey('id_Turno', true);
			$this->forge->createTable('Turnos');
	}
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
