<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chats';
    protected $primaryKey = 'chat_id';
    protected $fillable = [
      'medico_id',
      'paciente_id',
      'orl',
      'last_updated'
    ];
    protected $casts = [
        'last_updated' => 'datetime',
    ];


    public function medico()
      {
          return $this->belongsTo(Medico::class, 'medico_id');
      }    
    public function paciente()
      {
          return $this->belongsTo(Paciente::class, 'paciente_id');
      }

}