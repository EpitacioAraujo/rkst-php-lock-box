<?php

namespace Epitas\App\views\components\input;

class InputDTO
{
    public ?string $id = null;
    public ?string $label = null;
    public ?string $name = null;
    public ?string $value = null;
    public ?string $type = null;
    public ?string $css = null;
    public ?string $placeholder = null;
    public ?string $error_message = null;
    public ?string $theme = 'dark';
    public ?string $rows = null;
    public ?array $options = [];

    public function __construct($identifyer = null) {
        $this->id = $identifyer;
        $this->name = $identifyer;
    }

    public function id ($value){
        $this->id = $value;
        return $this;
    }
    public function label ($value){
        $this->label = $value;
        return $this;
    }
    public function name ($value){
        $this->name = $value;
        return $this;
    }
    public function value ($value){
        $this->value = $value;
        return $this;
    }
    public function type ($value){
        $this->type = $value;
        return $this;
    }
    public function css ($value){
        $this->css = $value;
        return $this;
    }
    public function placeholder ($value){
        $this->placeholder = $value;
        return $this;
    }
    public function error_message ($value){
        $this->error_message = $value;
        return $this;
    }
    public function options ($value) {
        $this->options = $value;
        return $this;
    }

    public function theme ($value) {
        $this->theme = $value;
        return $this;
    }

    public function rows ($value) {
        $this->rows = $value;
        return $this;
    }
}