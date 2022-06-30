<?php 

class BootstrapForm extends Form
{
    protected function surround($html)
    {
        return "<div class=\"mb-3\">{$html}</div>";
    }

    public function input($name)
    {
        return $this->surround(
            '<label>'. $name .'</label>'.
            '<input type="text" name="'. $name .'" value="'. $this->getValue($name) .'" class="form-control">
        ');
    }

    public function inputPS($name)
    {
        return $this->surround(
            '<label>'. $name .'</label>'.
            '<input type="password" name="'. $name .'" value="'. $this->getValue($name) .'" class="form-control">
        ');
    }

    public function submit()
    {
        return $this->surround(
            '<button type="submit" class="btn btn-primary">ENVOYER</button>'
        );
    }
}