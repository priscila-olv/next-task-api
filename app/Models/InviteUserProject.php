<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InviteUserProject extends Model
{
    use HasFactory;
    
    protected $table = 'invite_projects';
    public $timestamps = false;
    protected $fillable = ['project_id', 'user_email', 'token_invite'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}
