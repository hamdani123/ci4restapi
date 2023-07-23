<?php
namespace App\Models;

use CodeIgniter\Model;

class ModelPegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $allowedFields = ['nama','email'];
    protected $validationRules = [
        'nama'=>'required',
        'email'=>'required|valid_email'
    ];
    protected $validationMessages = [
        'nama'=>[
            'required'=>'silahkan masukkan nama'
        ],
        'email'=>[
            'required'=>'silahkan masukkan email',
            'valid_email'=>'email yang dimasukkan tidak valid'
        ]
    ];
}