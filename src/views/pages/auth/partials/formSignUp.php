<?php

    use Epitas\App\views\components\input\InputDTO;

    $defaultValues = flash()->get('Auth.SignUp.Fields', []);
    $validations = flash()->get('Auth.SignUp.Validations', []);

    $messageSuccess = flash()->get('Auth.SignUp.Message.Success');
    $messageError = flash()->get('Auth.SignUp.Message.Error');

    $signup_fields = [
        "nome" => [
            "label" => "Nome",
            "name" => "nome",
            "type" => "text",
        ],
        "email" => [
            "label" => "Email",
            "name" => "email",
            "type" => "text"
        ],
        "email_confirm" => [
            "label" => "Confirme o email",
            "name" => "email_confirm",
            "type" => "text"
        ],
        "senha" => [
            "label" => "Senha",
            "name" => "senha",
            "type" => "password"
        ],
    ];
?>

<div >
    <p class="text-xl text-base-100">Bem vindo ao <strong>lock box</strong></p>

    <p class="text-base-100 inline">Já possui cadastro? Faça seu</p> <a href="/signin" class="text-base-100 underline">login</a> <p class="text-base-100 inline">aqui!</p>
</div>

<?php if ($messageError && strlen($messageError)): ?>
    <hr class="w-full my-3 border-stone-800" />

    <div class="m-3 border-2 border-red-400 bg-red-800 text-red-400 p-2 rounded-md">
        <?= $messageError ?>
    </div>

    <hr class="w-full my-3 border-stone-800" />
<?php endif; ?>

<form class="flex flex-col gap-3 mt-3 text-black" method="post" action="/auth/signup">
    <?php
        foreach ($signup_fields as $field => $field_config):
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

        <?= render('components/input/input', [
            "dto" => $dto
        ]) ?>
    <?php endforeach; ?>

    <div class="mt-3 flex items-center gap-3">
        <button type="submit" class="btn">Registrar-me!</button>
    </div>
</form>