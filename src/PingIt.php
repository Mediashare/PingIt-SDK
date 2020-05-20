<?php
namespace Mediashare\PingIt;

Class PingIt {
    public $url = "http://pingit.marquand.pro";
    public $apikey;
    private $request;
    public function __construct(string $apikey) {
        $this->apikey = $apikey;
        $kernel = new Kernel();
        $this->request = $kernel->get('Curl');
    }

    public function send(?string $name = 'Ping!', ?string $message = null, ?string $icon = 'feather icon-radio', ?string $color = 'primary') {
        $url = $this->url.'/api/ping/'.$this->apikey;
        $response = $this->request->post($url, [
            'name' => $name,
            'message' => $message,
            'icon' => $icon,
            'color' => $color,
        ]);
        $response = \json_decode($response);
        return $response;
    }
}