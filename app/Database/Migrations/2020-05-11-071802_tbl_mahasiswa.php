<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblMahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 10,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
				'null' => FALSE
			],
			'mahasiswa_nim' => [
				'type' => 'VARCHAR',
				'constraint' => 20,
				'null' => FALSE,
			],
			'mahasiswa_nama' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
				'null' => FALSE,
			],
			'id_fakultas' => [
				'type' => 'INT',
				'constraint' => 10,
				'null' => FALSE,
			],
			'id_jurusan' => [
				'type' => 'INT',
				'constraint' => 10,
				'null' => FALSE,
			],
			'mahasiswa_jk' => [
				'type' => 'BOOL',
				'null' => FALSE,
			],
			'mahasiswa_alamat' => [
				'type' => 'VARCHAR',
				'constraint' => 150,
				'null' => FALSE,
			],
			'mahasiswa_telepon' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
				'null' => FALSE,
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tbl_mahasiswa');
		$data = [
			[
				'mahasiswa_nim' => "170111",
				'mahasiswa_nama' => "Adam",
				'id_fakultas' => 1,
				'id_jurusan' => 1,
				'mahasiswa_jk' => 1,
				'mahasiswa_alamat' => "Jalan Sumbersari Gg. 3",
				'mahasiswa_telepon' => "085151617171",
			],
			[
				'mahasiswa_nim' => "170222",
				'mahasiswa_nama' => "Siti",
				'id_fakultas' => 1,
				'id_jurusan' => 1,
				'mahasiswa_jk' => 0,
				'mahasiswa_alamat' => "Jalan Sumbersari Gg. 5",
				'mahasiswa_telepon' => "085151618181",
			]
		];
		$this->db->table('tbl_mahasiswa')->insertBatch($data);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tbl_mahasiswa');
	}
}
