<?php
//
//
class Calculate {
    //
    //The properties.
    public $operator;
    public $num1;
    public $num2;
    //
    public function __construct(int $num1, int $num2, string $operator){
        //
        //Initialize the properties with the information provided by a user.
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }
    //
    //Do the math.
    public function calc(){
        //
        //
        switch($this->operator){
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'subtract':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'multiply':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            case 'divide':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            default:
                echo 'Error!';
                break; 
        }
    }
}