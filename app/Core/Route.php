<?php 

class Route{

    protected $controller = 'HomeController';
    protected $method     = 'index';
    protected $param      = [];

    public function __construct(){
        // Cek input url user
        if(isset($_GET['url'])){
            // ambil url dan pecah untuk setiap '/' ke dalam array
            $url = explode('/',filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
            // print_r($url);
            $url[0] = $url[0].'Controller'; 
        }else{
            $url[0] = 'home'; 

        }
        
        
        // print_r($url[0]);
        if(file_exists('../app/Controller/'.$url[0].'.php')){
            // die("File tersedia");
            $this->controller = $url[0]; /* Ambil url index ke 0 sebagai Controller dan set properti sebagai controller */
        }else{
            $url[0] = "HomeController";
            $this->controller = "HomeController";
        } 

        // panggil file controller apabila sudah tersedia
        require_once '../app/Controller/'. $this->controller.'.php';
        $this->controller = new $this->controller();
        // print_r($this->controller);


        // Cek ketersediaan metode
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                // die('Terdapat Fungsi Method pada <br>'.$url[1]);
                $this->method = $url[1];
            }else{
                return require_once("../app/Views/404.php");
            }
        }

        // Hapus url pada indeks 0 sebagai controller
        unset($url[0]);
        // Hapus url pada indeks 0 sebagai method
        unset($url[1]);

        // ambil sisa url dan jadikan sebagai parameter
        $this->param = $url;

        call_user_func_array([$this->controller, $this->method],$this->param);
        
    }
}



; ?>