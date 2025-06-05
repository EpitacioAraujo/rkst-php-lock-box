<?php

use Epitas\App\views\components\input\InputDTO;

$title_input_dto = new InputDTO("title")
    ->label("Titulo");

$content_input_dto = new InputDTO("content")
    ->label('Conteudo')
    ->type("textarea")
    ->rows(10);
?>

<form action="" class="h-full flex flex-col gap-5">
    <?= render('components/input/input', ["dto" => $title_input_dto]) ?>

    <div class="flex-1">
        <?= render('components/input/input', ["dto" => $content_input_dto]) ?>
    </div>

    <div class="flex justify-between">
        <button class="btn btn-error">Deletar</button>
        <button class="btn btn-primary">Atualizar</button>
    </div>
</form>