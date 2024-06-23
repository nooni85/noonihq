<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Usersprofileimg> $usersprofileimg
 */
?>
<div class="usersprofileimg index content">
    <?= $this->Html->link(__('New Usersprofileimg'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usersprofileimg') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('path') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('size') ?></th>
                    <th><?= $this->Paginator->sort('owner_id') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usersprofileimg as $usersprofileimg): ?>
                <tr>
                    <td><?= $this->Number->format($usersprofileimg->id) ?></td>
                    <td><?= h($usersprofileimg->path) ?></td>
                    <td><?= h($usersprofileimg->type) ?></td>
                    <td><?= $this->Number->format($usersprofileimg->size) ?></td>
                    <td><?= $this->Number->format($usersprofileimg->owner_id) ?></td>
                    <td><?= h($usersprofileimg->updated_at) ?></td>
                    <td><?= h($usersprofileimg->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usersprofileimg->no]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersprofileimg->no]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersprofileimg->no], ['confirm' => __('Are you sure you want to delete # {0}?', $usersprofileimg->no)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
