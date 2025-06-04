<?php if ($dto->type === "select"): ?>
    <fieldset class="fieldset">
        <legend class="fieldset-legend text-base-100">
            <?= $dto->label ?? null ?>
            <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
        </legend>
        
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
    <fieldset class="fieldset">
        <legend class="fieldset-legend text-base-100">
            <?= $dto->label ?? null ?>
            <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
        </legend>
        
        <textarea
            id="<?= $dto->name ?>"
            name="<?= $dto->name ?>"
            class="input <?= $dto->css ?>"
            rows="4"
        >
            <?= $dto->value ?>
        </textarea>
    </fieldset>
<?php else: ?>
    <fieldset class="fieldset">
        <legend class="fieldset-legend text-base-100">
            <?= $dto->label ?? null ?>
            <span class="label text-red-500"><?= $dto->error_message ?? null ?></span>
        </legend>

        <input 
            id="<?= $dto->name ?>"
            type="<?= $dto->type ?>"
            name="<?= $dto->name ?>"
            value="<?= $dto->value ?>"
            class="input input-neutral bg-transparent text-base-100 w-full <?= $dto->css ?>" placeholder="<?= $dto->placeholder ?? null ?>" 
        />
    </fieldset>
<?php endif; ?>