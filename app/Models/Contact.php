<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the fields that are mass assignable
    protected $fillable = [
        'nom',       // Add 'nom' to the fillable property
        'telephone', // Ensure 'telephone' is also fillable
        'email'      // Ensure 'email' is also fillable
    ];
}

