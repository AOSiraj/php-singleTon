# php-singleTon
## Example Implementation in Module.php (zend 2)
``public function getServiceConfig()
 {
     return array(
         "factories" => array(

             "MyPackage\Service\AuthenticationService" => function ($sm) {
                  return AuthenticationService::instantiate($sm->get("config")["messaging_server"]);
              }
          )
      );
  }``
