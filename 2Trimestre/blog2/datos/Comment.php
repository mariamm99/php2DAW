<?php
// include("Blog.php");
// include("BDAbstractModel.php");

class Comment extends BDAbstractModel{
    // $this -> _id = $id;
    private static  $instancia;
  private $id;
  private $id_blog;
  private $user;
  private $comment;
  private $approved;
  private $created;
  private $updated;

  public static function getInstancia()
  {
      if (!isset(self::$instancia)) {
          $miclase = __CLASS__;
          self::$instancia = new $miclase;
      }

      return self::$instancia;
  }


  /**
   * Get the value of id_blog
   */ 
  public function getBlog()
  {
    return $this->id_blog;
  }

  /**
   * Set the value of id_blog
   *
   * @return  self
   */ 
  public function setBlog($id_blog)
  {
    $this->id_blog = $id_blog;

    return $this;
  }

  /**
   * Get the value of user
   */ 
  public function getUser()
  {
    return $this->user;
  }

  /**
   * Set the value of user
   *
   * @return  self
   */ 
  public function setUser($user)
  {
    $this->user = $user;

    return $this;
  }

  /**
   * Get the value of comment
   */ 
  public function getComment()
  {
    return $this->comment;
  }

  /**
   * Set the value of comment
   *
   * @return  self
   */ 
  public function setComment($comment)
  {
    $this->comment = $comment;

    return $this;
  }

  /**
   * Get the value of approved
   */ 
  public function getApproved()
  {
    return $this->approved;
  }

  /**
   * Set the value of approved
   *
   * @return  self
   */ 
  public function setApproved($approved)
  {
    $this->approved = $approved;

    return $this;
  }

  /**
   * Get the value of created
   */ 
  public function getCreated()
  {
    return $this->created;
  }

  /**
   * Set the value of created
   *
   * @return  self
   */ 
  public function setCreated($created)
  {
    $this->created = date_format($created,"Y-m-d H:i:s");;

    return $this;
  }

  /**
   * Get the value of updated
   */ 
  public function getUpdated()
  {
    return $this->updated;
  }

  /**
   * Set the value of updated
   *
   * @return  self
   */ 
  public function setUpdated($updated)
  {
    $this->updated = date_format($created,"Y-m-d H:i:s");;

    return $this;
  }

  public function set($user_data = array())
  {
     
  }



  public function guardarBD(){


    $this->query = "INSERT INTO comment(user, comment, approved, id_blog, created, updated) VALUE (:user, :comment, :approved, :id_blog, :created, :updated)";

    $this->parametros["user"] =  $this->user;
    $this->parametros["comment"] =  $this->comment;
    $this->parametros["approved"] =  $this->approved;
    $this->parametros["id_blog"] =  $this->id_blog;
    $this->parametros["created"] =  $this->created;
    $this->parametros["updated"] =  $this->updated;

    $this->get_results_from_query();

    $this->mensaje = "blog agregado correctamente";
  }

}

?>