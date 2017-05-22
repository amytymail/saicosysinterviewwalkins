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
                ['action' => 'delete', $job->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jobs form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('location');
            echo $this->Form->control('type');
            echo $this->Form->control('category');
            echo $this->Form->control('tags');
            echo $this->Form->control('type_post');
            echo $this->Form->control('apply_url');
            echo $this->Form->control('validity', ['empty' => true]);
            echo $this->Form->control('company_name');
            echo $this->Form->control('company_description');
            echo $this->Form->control('company_website');
            echo $this->Form->control('company_logo');
            echo $this->Form->control('company_twitter_handle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
