<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div> -->

<div role="alert" class="alert relative border rounded-md px-5 mb-3 py-4 bg-danger border-danger bg-opacity-20 border-opacity-5 text-danger dark:border-danger dark:border-opacity-20 flex items-center"><i data-tw-merge data-lucide="alert-octagon" class="stroke-[1] w-5 h-5 mr-2 h-6 w-6 mr-2 h-6 w-6"></i>
<?= $message ?>
</div>