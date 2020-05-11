<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblJurusan extends Migration
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
			'jurusan_id' => [
				'type' => 'INT',
				'constraint' => 10,
				'unique' => TRUE
			],
			'jurusan_nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_jurusan');

		$data = [
			[
				'jurusan_id' => 1,
				'jurusan_nama' => 'Teknik Mesin'
			],
			[
				'jurusan_id' => 2,
				'jurusan_nama' => 'Akuntansi'
			],
			[
				'jurusan_id' => 3,
				'jurusan_nama' => 'Sosiologi'
			],
			[
				'jurusan_id' => 4,
				'jurusan_nama' => 'Desain Komunikasi Visual'
			],
			[
				'jurusan_id' => 5,
				'jurusan_nama' => 'Akuntansi Manajerial'
			],
		];
		$this->db->table('tbl_jurusan')->insertBatch($data);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_jurusan');
	}
}
