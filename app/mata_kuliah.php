<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\mahasiswa;
class mata_kuliah extends Model
{
    
      protected $table = 'mata_kuliahs';

	protected $fillable = array('nama_matkul','kkm');

	public function mahasiswa() {
		return $this->belongsToMany('App\mahasiswa', 'matkul_mahasiswas','id_matakuliah','id_mahasiswa');
}
}	
