<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        //'content',
        'cover',
    ];

    public function getCoverUrl(): string
    {
        return Storage::disk('public')->url($this->cover);
    }
}
