class AuthenticationService
{
    private $config;
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

    public function getSurveyMonkeyAccessToken(){
        $token = "Bearer ".$this->config['survey_monkey_token'];
        return $token;
    }
}