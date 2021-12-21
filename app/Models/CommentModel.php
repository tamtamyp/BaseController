<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    // protected $fillable = ['user_uuid','summary','tag','description','due_date'];
    protected $table = 'comments';
    public $timestamps = false;

    public function comments(){
        return $this->belongsTo('App\Models\IssueModel','issue_id','id');
    }

    public function users(){
        return $this->belongsTo('App\Models\User','user_uuid','id');
    }
}
