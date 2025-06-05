<?php
    $color = $dto->theme === 'light' ? 'base' : 'gray';

    $text = "text-{$color}-100";
?>

<?php if ($dto->type === "select"): ?>
    <fieldset class="fieldset">
        <?php if($dto->label): ?>
            <legend class="fieldset-legend <?= $text ?>">
                <?= $dto->label ?? null ?>
                <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
            </legend>
        <?php endif ?>
        
        <select
            id="<?= $dto->name ?>"
            name="<?= $dto->name ?>"
            class="h-[35px] input <?= $dto->css ?>">
            <?php foreach ($dto->options as $option_value => $option_label): ?>
                <option value="<?= $option_value ?>" <?= $value == $option_value ? 'selected' : '' ?>>
                    <?= $option_label ?>
                </option>
            <?php endforeach; ?>
        </select>
    </fieldset>
<?php elseif ($dto->type === "textarea"): ?>
    <fieldset class="fieldset h-auto">
        <?php if($dto->label): ?>
            <legend class="fieldset-legend <?= $text ?>">
                <?= $dto->label ?? null ?>
                <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
            </legend>
        <?php endif ?>
        
        <textarea
            id="<?= $dto->name ?>"
            name="<?= $dto->name ?>"
            class="
                input input-neutral bg-transparent w-full h-auto placeholder-gray-700 <?= $text ?> <?= $dto->css ?>
            "
            rows="<?= $dto->rows ?>"
        >
            <?= $dto->value ?>
        </textarea>
    </fieldset>
<?php else: ?>
    <fieldset class="fieldset p-0">
        <?php if($dto->label): ?>
            <legend class="fieldset-legend <?= $text ?>">
                <?= $dto->label ?? null ?>
                <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
            </legend>
        <?php endif ?>

        <input 
            id="<?= $dto->name ?>"
            type="<?= $dto->type ?>"
            name="<?= $dto->name ?>"
            value="<?= $dto->value ?>"
            class="input input-neutral bg-transparent w-full placeholder-gray-700 <?= $text ?> <?= $dto->css ?>"
            placeholder="<?= $dto->placeholder ?? null ?>" 
        />
    </fieldset>
<?php endif; ?>