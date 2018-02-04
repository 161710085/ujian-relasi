<?php

use Illuminate\Database\Seeder;
use App\dosen;
use App\jurusan;
use App\mahasiswa;
use App\wali;
use App\mata_kuliah;
class relasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           	DB::table('dosens')->delete();
		DB::table('jurusans')->delete();
		DB::table('mahasiswas')->delete();
		DB::table('walis')->delete();
		DB::table('mata_kuliahs')->delete();
			DB::table('matkul_mahasiswas')->delete();

			$dosen=dosen::create(array(
				'nama' =>'ahmad',	
				'nipd'=>'1933',
				'alamat'=>'tarate',
				'mata_kuliah'=>'RPL'));
					$this->command->info('Data dosen telah diisi!');

			$RPL=jurusan::create(array(
				'nama' =>'Rekayasa Perangkat Lunak'));
					$this->command->info('Data jurusan telah diisi!');

						$adit = mahasiswa::create(array(
			'nama' => 'Aditthiajanwar',
			'nis' => '01',
			'id_dosen'=>$dosen->id,
			'id_jurusan'=>$RPL->id));

						$jarwo = mahasiswa::create(array(
			'nama' => 'Aditthia Jarwo',
			'nis' => '02',
			'id_dosen'=>$dosen->id,
			'id_jurusan'=>$RPL->id));
$this->command->info('Data mahasiswa telah diisi!');

						wali::create(array(
			'nama'  => 'Sultan',
			'alamat'=>'Bojong Banjir',
			'id_mahasiswa' => $adit->id));

						wali::create(array(
			'nama'  => 'ale',
			'alamat'=>'Gempa',
			'id_mahasiswa' => $jarwo->id));
						$this->command->info('Data wali telah diisi!');

						$ips=mata_kuliah::create(array('nama_matkul'=>'Ilmu Pengetahuan Sosial','kkm'=>'98'));
						$tkr=mata_kuliah::create(array('nama_matkul'=>'Teknik Kendaraan Ringan','kkm'=>'98'));

						$adit->mata_kuliah()->attach($tkr->id);
						$jarwo->mata_kuliah()->attach($ips->id);
						$this->command->info('Data matakuliah telah diisi!');
            }
        }