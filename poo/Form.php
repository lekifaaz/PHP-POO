<?php 


class Form

{

    private $data;

    public $surround ='p';

    public function __construct($data = array()) // il ya deux underscore(_ _)

    {
        $this->date = $data;
    }

    private function surround($html)

    {

/* Dans ce morceau de code , on mete des accolades afin que les proprétés soient interprétées par les doubles quotes */

    return "<{$this->surround}>{$html} </{$this->surround}>";

}

private function getValue($index)


{

    return isset($this->data[$index])? $this->data[$index] : null;

}

public function input($name)

{

    return $this->surround('
    
<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">

    ');

}

public function inputPS($name)

{

    return $this->surround('
    

<input type="password" name="'.$name.'" value="'.$this->getValue($name).'">

    ');


}
public function submit()

{

return $this->surround('<button type="submit">ENVOYER</button>');

}


}