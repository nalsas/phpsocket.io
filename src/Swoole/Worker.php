<?php
namespace PHPSocketIO\Swoole;

class Worker
{
    public $name='';
    public $transport='';
    public $onConnect=null;
    private $serv=null;
    
    public function __Construct($addr, $port, $opt){
        $this->serv = new swoole_server($addr, $port, SWOOLE_BASE, SWOOLE_SOCK_TCP);
    }
    
    public function onConnect(){
        
    }
    
    public function run(){
        $this->serv->start();
    }
}
