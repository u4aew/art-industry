<div class="camera_wrap" <?php if ($height > 0): ?> data-height= <?= $height; ?><?php endif; ?>>
    <?php foreach ($items as $item): ?>
        <div data-thumb="<?= $item["image"] ?>" data-src="<?= $item["image"] ?>">
            <div class="camera_caption fadeFromBottom">
                <em><?= $item["caption"] ?></em> <?= $item["label"] ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>