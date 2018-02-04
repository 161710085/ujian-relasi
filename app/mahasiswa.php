<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\wali;
use App\dosen;
use App\jurusan;
use App\mata_kuliah;
class mahasiswa extends Model
{
      protected $table = 'mahasiswas';

	protected $fillable = array('nama','nis','id_dosen','id_jurusan');

	public function wali() {
		return $this->hasOne('App\wali', 'id_mahasiswa');
}
	public function dosen() {
		return $this->belongsTo('App\dosen', 'id_dosen');
}
	public function jurusan() {
		return $this->belongsTo('App\jurusan', 'id_jurusan');
}
	public function mata_kuliah() {
		return $this->belongsToMany('App\mata_kuliah', 'matkul_mahasiswas','id_mahasiswa','id_matakuliah');
}
}
