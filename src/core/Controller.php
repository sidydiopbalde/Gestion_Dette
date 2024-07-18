<?php
namespace App\Core;
// use App\Core\Validator\Validator1;

interface ControllerInterface {
    public function renderView(string $view, array $data = []);
    public function redirect(string $url);
}
class Controller implements ControllerInterface {
    protected $validator;

    public function __construct(){
        // var_dump("sidy");
        // die();
        // $this->validator=new Validator1();
    }
    
    /**
     * Renders a view file.
     *
     * @param string 
     * @param array 
     */
    public function renderView(string $view, array $data = []) {
        // Extract the data array to variables
        extract($data);

        // Generate the path to the view file
        $viewPath = __DIR__ . "/../../Views/$view.php";

       
        if (file_exists($viewPath)) {
       
            require $viewPath;
        } else {
           
            echo "View not found: $viewPath";
        }
    }

    /**
     * Redirects to another URL.
     *
     * @param string $url The URL to redirect to.
     */
    public function redirect(string $url) {
        // Send the HTTP header to redirect
        header("Location: $url");
        exit;
    }
}
?>
