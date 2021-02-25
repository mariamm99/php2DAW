<?php
namespace App\Controllers;
use App\Models\Blog;
use App\Models\Comment;

use Laminas\Diactoros\Response\HtmlResponse as HTMLResponse;

class IndexController extends BaseController{
    public function indexAction(){
        $blog=Blog::all();
        $comment=Comment::all();
       echo $_SESSION["userId"];
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
        return $this->renderHTML("show.twig", [ "blog"=>$blog]);
    
            $em = $this->getDoctrine()->getManager();
    
            $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);
    
            if (!$blog) {
                throw $this->createNotFoundException('Unable to find Blog post.');
            }
            
            $comments = $em->getRepository('BloggerBlogBundle:Comment')
                           ->getCommentsForBlog($blog->getId());
            
            return $this->render('show.twig', array(
                'blog'      => $blog,
                'comments'  => $comments
            ));
        
    }
    

}
