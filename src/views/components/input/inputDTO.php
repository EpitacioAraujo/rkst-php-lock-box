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
    public ?array $options = [];
}