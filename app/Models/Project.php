<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "projects";

    protected $fillable = [
        'name',
        'description',
        'status',
        'categories',
        'start_date',
        'end_date',
    ];

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function categories() {
        return $this->belongsTo(Categories::class);
    }
}
