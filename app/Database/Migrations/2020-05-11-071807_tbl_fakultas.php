<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblFakultas extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'fakultas_id' => [
				'type' => 'INT',
				'constraint' => 10,
				'unique' => TRUE
			],
			'fakultas_nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_fakultas');
		$data = [
			[
				'fakultas_id' => "1",
				'fakultas_nama' => "Teknik"
			],
			[
				'fakultas_id' => "2",
				'fakultas_nama' => "Ekonomi dan Bisnis"
			],
			[
				'fakultas_id' => "3",
				'fakultas_nama' => "Ilmu Sosial dan Ilmu Politik"
			],
			[
				'fakultas_id' => "4",
				'fakultas_nama' => "Seni Rupa dan Desain"
			],
			[
				'fakultas_id' => "5",
				'fakultas_nama' => "Sekolah Vokasi"
			]
		];
		$this->db->table('tbl_fakultas')->insertBatch($data);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_fakultas');
	}
}
