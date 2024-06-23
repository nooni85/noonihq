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
            <?= $this->Html->link(__('List Usersprofileimg'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usersprofileimg form content">
            <?= $this->Form->create($usersprofileimg) ?>
            <fieldset>
                <legend><?= __('Add Usersprofileimg') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('path');
                    echo $this->Form->control('type');
                    echo $this->Form->control('size');
                    echo $this->Form->control('owner_id');
                    echo $this->Form->control('updated_at');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
