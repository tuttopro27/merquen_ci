<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tables extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_tables'          => [
				'type'           => 'INT',
				'constraint'	 =>5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_puntos'       		 => [
					'type'           => 'VARCHAR',
					'constraint'     => '5',
			],
				'id_mesa'		 => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'cubiertos' 	=> [
				'type'           => 'INT',
				'constraint'     => 4,
			],
			'hora' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '6',
			],
			'status' => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'tipo' => [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'Docto' => [
				'type'           => 'VARCHAR',
				'constraint'     => '7',
			],
			
			'fecha' 	=> [
				'type'           => 'timestamp',
				'constraint'     => 6,
			],
			'folio' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '7',
			],
			'id_Turno' 			=> [
				'type'           => 'int',
				'constraint'     => 11,
			],
			'dscto' 			=> [
				'type'           => 'smallint',
				'constraint'     => 16,
			],
			'cuenta' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'hab' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '4',
			],
			'cliente' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '15',
			],
			'propina' 			=> [
				'type'           => 'DOUBLE',
			],
			'sw' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '1',
			],
			'cuentas' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '2',
			],
			'total' 			=> [
				'type'           => 'DOUBLE',	
			],
			'convenio' 			=> [
				'type'           => 'DOUBLE',	
			],
			'atencion' 			=> [
				'type'           => 'DOUBLE',	
			],
			'habitacion' 			=> [
				'type'           => 'DOUBLE',	
			],
			'foliocnv' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '7',
			],
			'sucursal' 			=> [
				'type'           => 'VARCHAR',
				'constraint'     => '2',
			],
			'paquete' 			=> [
				'type'           => 'DOUBLE',	
			],
			'admin' 			=> [
				'type'           => 'DOUBLE',	
			],
			'ccosto' 			=> [
				'type'           => 'DOUBLE',	
			],
			'personal' 			=> [
				'type'           => 'INT',
				'constraint'     => '32',
			],
			'TotalPersonal' 			=> [
				'type'           => 'DOUBLE',	
			],
			'moneda' 			=> [
				'type'           => 'varchar',
				'constraint'     => '1',
			],



			
		]);
		$this->forge->addKey('id_tables', true);
		$this->forge->createTable('tables');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
