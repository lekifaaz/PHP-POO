<?php 

class Form 
{
    protected $data;
    public $surround = 'div';

    public function __construct($data=array()){
        $this->data = $data;
    }

    protected function surround($html) 
    {
        /* dans ce morceau de code, on met des accolades afin que les propriétés soient interprétées par les doubles quotes */
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name)
    {
        return $this->surround('
            <input type="text" name="'. $name .'" value="'. $this->getValue($name) .'">
        ');
    }

    public function inputPS($name)
    {
        return $this->surround('
            <input type="password" name="'. $name .'" value="'. $this->getValue($name) .'">
        ');
    }

    public function submit()
    {
        return $this->surround('<button type="submit">ENVOYER</button>');
    }
}