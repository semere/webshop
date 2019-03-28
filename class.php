<?php

class User {
    public $string = '';

    private function test_private(){
        echo 'private';
    }
    public function test_public(){
        echo 'public';
    }
}

class test extends User {
    public function test_child(){
        var_dump($this->string);
        
    }
}
$test = new test();
$test->test_child();

?>