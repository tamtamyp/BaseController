<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueModel extends Model
{
    use HasFactory;
    protected $fillable = ['user_uuid','summary','tag','description','due_date'];
    protected $table = 'issues';
    public $timestamps = false;
    
    public function users(){
        return $this->belongsTo('App\Models\User','user_uuid','id');
    }

    public function comments(){
        return $this->belongsTo('App\Models\CommentModel','issue_id','id');
    }
}
