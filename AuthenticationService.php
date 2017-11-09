class AuthenticationService
{
    private $config;
    //static instance of inself
    public static $instance = null;
    protected function __construct($config) {
        $this->config = $config;
    }

    public static function instantiate($config){
        if (self::$instance == null){
            self::$instance = new AuthenticationService($config);
        }
        return self::$instance;
    }

    public function getAccessToken(){
        $token = "Bearer ".$this->config['token'];
        return $token;
    }
}
