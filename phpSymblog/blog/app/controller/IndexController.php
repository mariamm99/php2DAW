<?php
namespace App\Controllers;
use App\Models\Blog;
use App\Models\Comment;

use Laminas\Diactoros\Response\HtmlResponse as HTMLResponse;

class IndexController extends BaseController{
    public function indexAction(){
        $blog=Blog::all();
        $comment=Comment::all();
       
        return $this->renderHTML("index.twig", [ "blogs"=>$blog], ["latestComments"=>$comment] );
        // require_once "../view/index.twig";
    }

    
    public function aboutAction(){
        return $this->renderHTML("about.twig");
    }
    public function contactAction(){
        return $this->renderHTML("contact.twig");
    }

    public function showAction($request){
        $getData=$request->getParsedBody();
        var_dump($getData["id"]);
        $blog=Blog::find($getData["id"]);
        return $this->renderHTML("show.twig", [ "blogs"=>$blog]);
    }

}

?>