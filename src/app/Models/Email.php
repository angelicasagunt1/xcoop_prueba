<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Ticket as Ticket;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'email'
        ];

    public function ticket() {
        return $this->hasMany(Ticket::class);
    }
}
