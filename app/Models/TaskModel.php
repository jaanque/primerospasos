<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model

{
    use HasFactory;
    
    // taula
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'completed',
        'user_id',
    ];

    // relació amb l'usuari (cada tasca pertany a un usuari)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // completat boolean
    protected $casts = [
        'completed' => 'boolean',
    ];
}