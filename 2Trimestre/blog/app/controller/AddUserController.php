<?php
namespace App\Controllers;
use App\Models\Users;
use App\Controllers\BaseController;
use Respect\Validation\Validator as v;


class AddUserController extends BaseController{
    public function addAction($request){
        
        $request->getBody();
        $request->getMethod();
        // $request->getParsedBody();

        $responseMessage=null;
        if ($request->getMethod()=="POST") {
            $postData=$request->getParsedBody();

            // $blogValidator=v::key("title", v::stringType()->notEmpty())
            // ->key("blog", v::stringType()->notEmpty());
                // $blogValidator->assert($postData);

                $user = new Users();
                
                $user->email = $postData['email'];
                $user->password = password_hash($postData['password'], PASSWORD_DEFAULT);

              $user->save();
            
        }

     return $this->renderHTML("addUser.twig", ["responseMessage"=>$responseMessage]);

    }
}

?>