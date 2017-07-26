<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $function->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $function->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Functions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="functions form large-9 medium-8 columns content">
    <?= $this->Form->create($function) ?>
    <fieldset>
        <legend><?= __('Edit Function') ?></legend>
        <?php
            echo $this->Form->control('function_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
