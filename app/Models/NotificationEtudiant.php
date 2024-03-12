<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class NotificationEtudiant extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['title', 'contenu', 'link', 'image'];
}