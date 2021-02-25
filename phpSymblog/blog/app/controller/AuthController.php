<?php
namespace App\Controllers;
use App\Models\Users;
use App\Controllers\BaseController;
// use Respect\Validation\Validator as v;
use Laminas\Diactoros\Response\RedirectResponse;


class AuthController extends BaseController{
    public function getLogin(){
        return $this->renderHTML("login.twig");
    
    }

    public function postLogin($request){
        $postData=$request->getParsedBody();
        $responseMessage=null;

            $user = Users::where("email", $postData["email"])->first();
            // echo $user;
            if ($user) {
                echo $postData["password"];
                if(password_verify($postData["password"], $user->password)){
                    $_SESSION["userId"]= $user->id;
                    $responseMessage="ok credential";
                    return new RedirectResponse("/2Trimestre/blog/admin");

                }else{
                    $responseMessage="bad credentials";
                    
                }
            }else{
                $responseMessage="bad credential";
            }
               
            return $this->renderHTML("/login.twig", ["responseMessage"=>$responseMessage]);
        

    }

    public function getLogout(){
        unset($_SESSION["userId"]);
        return new RedirectResponse("/2Trimestre/blog/login");
    }
}

?>