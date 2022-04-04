<?php

namespace App\Http\Controllers;
use App\Library\class_library;
use Illuminate\Http\Request;
use App\Library\test_1;

class Test extends Controller
{
    public function Test_sample(){

        $a = new sample_class();
        $b = $a->test1(3);
        $c = sample_func(3);
        $d = sample_static_class::test2(10);
        $e = new sample_static_class();
        $f = $e->test2(100);

        $next_class = new continue_class(10);

        $result = $next_class -> class_sample();
        $result2 = $next_class -> class_sample2();


        return view('test',['result' => $result]);




    }

    public function Test_sample2(){
        $next_class = new continue_class(80);
        $a=$next_class->class_value_2;
        //$next_class->class_value = 1000;
        $b = $next_class->class_value;
        $c = $next_class->class_sample2();
        $next_class->chage_date();

        //自作クラスからの呼び出し,関連した設定ファイルはcomposer.jsonのclassmap。設定後にdump_autoload -oを実行。
        $x = new test_1();
        $p = $x->test_next();

        dd($a,$b,$c,$next_class->class_value,$p);

    }

}


class sample_class{

    public function test1($a){
        $b = $a+1;
        return $b;
    }

}


function sample_func($check){
    $check = $check * 3;
    return $check+1;
}


class sample_static_class{

    public static function test2($a){
        $b = $a*10;
        return $b;
    }

}


class continue_class{

    public $class_value;
    public $class_value2;

    function __construct($class_value)
    {
        $this->class_value = $class_value;
        $this->class_value_2 = $class_value*2;
    }


    public function class_sample(){
        $b = $this->class_value *100;
        return $b;
    }

    public function class_sample2(){
        $c = $this->class_value *1000;
        return $c;
    }

    public function chage_date(){
        $this->class_value =1914;
    }

}


