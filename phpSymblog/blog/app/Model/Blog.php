<?php
    namespace App\Models;
    
    use Illuminate\Database\Eloquent\Model;

class Blog extends Model{

  protected $table = "blog";
  
  public function getComments(){
    //blog_id
    return $this->hasMany(Comment::class);
  }

}
?>