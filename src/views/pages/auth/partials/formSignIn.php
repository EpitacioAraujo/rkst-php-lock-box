<?php

    use Epitas\App\views\components\input\InputDTO;

    $error_message = flash()->get(key: 'Auth.SignIn.Message.Error');
    $validations = flash()->get(key: 'Auth.SignIn.Validations', defaultValue: []);
    $defaultValues = flash()->get(key: 'Auth.SignIn.Fields', defaultValue: []);

    $signin_fields = [
        "email" => [
            "label" => "Email",
            "name" => "email",
            "type" => "text"
        ],
        "senha" => [
            "label" => "Senha",
            "name" => "senha",
            "type" => "password"
        ],
    ];
?>

<div class="mb-5" >
    <p class="text-xl font-bold text-base-100">Bem vindo de volta!</strong></p>

    <p class="text-base-100">Favor, informe suas credênciais</p>
</div>

<form class="flex flex-col" method="post" action="/auth/signin">
    <?php if ($error_message && strlen($error_message)): ?>
        <div class="text-red-800">
            <?= $error_message ?>
        </div>
    <?php endif; ?>
    
    <?php
        foreach ($signin_fields as $field => $field_config):
            [
                "name" => $field_name,
                "label" => $field_label,
                "type" => $field_type
            ] = $field_config;

            $error_message = "";
            $input_class = "";
            $value = "";

            if (isset($validations[$field_name]) && sizeof($validations[$field_name]) > 0) {
                $error_message = $validations[$field_name][0];
                $input_class = "input-error";
            }

            if (isset($defaultValues[$field_name])) {
                $value = $defaultValues[$field_name];
            }

            $dto = new InputDTO();
            $dto->id = $field_name;
            $dto->label = $field_label;
            $dto->name = $field_name;
            $dto->type = $field_type;
            $dto->value = $value;
            $dto->css = $input_class;
            $dto->error_message = $error_message;
        ?>

        <div class="flex flex-col gap-2">
            <?= render('components/input/input', compact("dto")) ?>
        </div>
    <?php endforeach; ?>

    <button type="submit" class="mt-3 btn">Entrar</button>
    <p class="mt-1 text-sm text-base-100 text-center">Seus dados estão bem guardados e seguros!</p>

    <hr class="my-5 w-full border-b-1 border-base-100" />

    <p class="text-sm text-base-100 text-center">Não possui uma conta ainda?!</p>
    <a href="/signup" class="mt-1 btn btn-neutral btn-outline">Crie uma conta GRÁTIS!</a>
</form>