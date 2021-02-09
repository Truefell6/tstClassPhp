<?php

final class Item
{
    private int $id;
    private string $name = "smthn";
    private int $status = 123;
    private bool $changed;

    function __construct($id = 0) {
        $this -> init();
    }

    private function init() {
        $name = $this -> name = "asdasdasd"; //"asdasdasd" типа логика работы с БД
        $status = $this -> status = 456456; //456456 типа логика работы с БД
    }

    public function save($name, $changed) {
        var_dump($this);

        if ($changed == true) {
            $this -> saved = array($this -> name => old_name, $this -> status => old_status);;
        }
    }

    public function __get($name) {
        //var_dump($name);
        return $this -> $name;
    }

    public function __set($name, $value) {
        //var_dump($name, $value);
        if (!empty($value) and gettype($value)===gettype($this -> $name) and $name != 'id') {
           $this -> save($name,true);
           $this -> $name = $value;
        } else echo 'false';
    }
}

$a = new Item();
//var_dump($a);
print "<pre>";
//print ($a->init());
print ($a->save());
echo '<br>';
$a->status = 1234;
echo '<br>';
print ($a->save());