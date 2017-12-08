<?php
/**
 * 
 */
class Stack{
    
    private $dataStore = array();
    private $top = 0;
    
    /**
     * 
     */
    public function __construct(){
        // code...
    }
    
    /**
     * 
     */
    public function push($element){
        $this->dataStore[$this->top++] = $element;
    }
    
    public function pop(){
        //여기서 $dataStore[$top]의 값을 안지워주는데 데이터가 남지는 않을까해서 넣어봄
        //unset $dataStore[$top];
        return $this->dataStore[--$this->top];
    }
    
    public function peek(){
        return $this->dataStore[$this->top - 1];
    }
    
    public function length(){
        return $this->top;
    }
    
    function clear(){
        //여기도 $dataStore를 지워주지 않음.. 왜?
        //그리고 top가 0일때에 대한 예외처리가 다들 안되어있음
        //$this->dataStore = array();
        $this->top = 0;
    }
    
}
?>