<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'post_name', 'post_title', 'post_desc', 'post_content', 'post_status', 'post_image', 'cate_post_id'
    ];
    protected $primaryKey = 'post_id';
    protected $table = 'tbl_posts';

    public function category_post()
    {
        return $this->belongsTo('App\CategoryPost', 'cate_post_id');
    }
}
