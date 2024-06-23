<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usersprofileimg $usersprofileimg
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usersprofileimg'), ['action' => 'edit', $usersprofileimg->no], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usersprofileimg'), ['action' => 'delete', $usersprofileimg->no], ['confirm' => __('Are you sure you want to delete # {0}?', $usersprofileimg->no), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usersprofileimg'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usersprofileimg'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usersprofileimg view content">
            <h3><?= h($usersprofileimg->path) ?></h3>
            <table>
                <tr>
                    <th><?= __('Path') ?></th>
                    <td><?= h($usersprofileimg->path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($usersprofileimg->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($usersprofileimg->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Size') ?></th>
                    <td><?= $this->Number->format($usersprofileimg->size) ?></td>
                </tr>
                <tr>
                    <th><?= __('Owner Id') ?></th>
                    <td><?= $this->Number->format($usersprofileimg->owner_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($usersprofileimg->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($usersprofileimg->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
