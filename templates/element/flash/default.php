<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div> -->

<div role="alert" class="<?= h($class) ?> alert relative border rounded-md px-5 py-4 bg-slate-300 border-secondary bg-opacity-10 text-slate-500 dark:bg-darkmode-100/20 dark:border-darkmode-100/30 dark:text-slate-300 flex items-center"><i data-tw-merge data-lucide="alert-octagon" class="stroke-[1] w-5 h-5 mr-2 h-6 w-6 mr-2 h-6 w-6"></i>
<?= $message ?>
</div>