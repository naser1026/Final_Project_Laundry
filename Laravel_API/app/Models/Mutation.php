<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    use HasFactory;

    protected $table = 'mutations';

    protected $fillable = [
        'mutation_type',
        'payment_type',
        'cash_flow'
    ];
}
