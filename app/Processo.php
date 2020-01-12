<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo extends Model {

    protected $table = 'processo';

    protected $fillable = ['dtInicio', 'dtConclusao', 'status'];

}
