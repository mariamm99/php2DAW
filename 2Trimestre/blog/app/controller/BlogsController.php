<?php
namespace App\Controllers;
use App\Models\Blog;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;


class BlogsController extends BaseController{
    public function getAddBlogAction($request){
        
        $request->getBody();
        $request->getMethod();
        // $request->getParsedBody();

        $responseMessage=null;
        if ($request->getMethod()=="POST") {
            $postData=$request->getParsedBody();

            $blogValidator=v::key("title", v::stringType()->notEmpty())
            ->key("blog", v::stringType()->notEmpty());

            try{
            
                $blogValidator->assert($postData);
                $blog = new Blog();
                $blog->title = $postData['title'];
                $blog->blog = $postData['blog'];
                $blog->tags = $postData['tags'];
                $blog->author = $postData['author'];
            
                $files=$request->getUploadedFiles();
                $image=$files["image"];
               
                if($image->getError()==UPLOAD_ERR_OK){
                    $fileName=$image->getClientFilename();
                    $fileName=uniqid().$fileName;
                    $image->moveTo("img/$fileName");
                    $blog->image = $fileName;
                }
           
            $blog->save();
            $responseMessage="Saved";
        }catch(Respect\Validation\Exceptions\ValidationException $e) {
            $responseMessage=$e->getMessage();

        }
            
        }

     return $this->renderHTML("addblog.twig", ["responseMessage"=>$responseMessage]);

    }
}


?>