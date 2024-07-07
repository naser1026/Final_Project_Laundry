<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        "invoice",
        "list_id_package",
        "list_count",
        "id_parfum",
        "created_by",
        "payment_status",
        "payment_type",
        "id_customer",
        "id_discount",
        "total_price",
        "information",

    ];
}
