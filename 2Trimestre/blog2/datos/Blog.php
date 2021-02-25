<?php
include("BDAbstractModel.php");

class Blog extends BDAbstractModel{
    private static  $instancia;
    private $id;
    private $title;
    private $author;
    private $blog;
    private $image;
    private $tags;
    private $created;
    private $updated;
    // private $arrComentarios=array();
   
    public function __construct(){
       
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
       

    }

    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }

        return self::$instancia;
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        // $contador+=1;
        $this->id=$id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }


    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Get the value of blog
     */ 
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set the value of blog
     *
     * @return  self
     */ 
    public function setBlog($blog)
    {
        $this->blog = $blog;
        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


    /**
     * Get the value of tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */ 
    public function setTags($tags)
    {
        $this->tags = $tags;
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
        $this->created = date_format($created,"Y-m-d H:i:s");

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
        $this->updated = $updated;

        return $this;
    }

    public function addComment($comment){
        array_push($this->arrComentarios, $comment);
    }


    /**
     * Get the value of arrComentarios
     */ 
    public function getArrComentarios()
    {
        return $this->arrComentarios;
    }

    /**
     * Set the value of arrComentarios
     *
     * @return  self
     */ 
    public function setArrComentarios($arrComentarios)
    {
        $this->arrComentarios = $arrComentarios;
        return $this;
    }


    public function set($user_data=array()){

    }

    public function guardarBD(){
        $this->query = "INSERT INTO blog(title, author, blog, image, tags, created, updated) VALUE (:title, :author, :blog, :image, :tags, :created, :updated)";

        $this->parametros["title"] =  $this->title;
        $this->parametros["author"] =  $this->author;
        $this->parametros["blog"] =  $this->blog;
        $this->parametros["image"] =  $this->image;
        $this->parametros["tags"] =  $this->tags;
        $this->parametros["created"] =  $this->created;
        $this->parametros["updated"] =  $this->updated;


        $this->get_results_from_query();

        $this->mensaje = "blog agregado correctamente";
    }
}

?>