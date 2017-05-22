<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($job->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($job->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($job->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($job->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= h($job->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($job->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tags') ?></th>
            <td><?= h($job->tags) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Post') ?></th>
            <td><?= h($job->type_post) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apply Url') ?></th>
            <td><?= h($job->apply_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($job->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Description') ?></th>
            <td><?= h($job->company_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Website') ?></th>
            <td><?= h($job->company_website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Logo') ?></th>
            <td><?= h($job->company_logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Twitter Handle') ?></th>
            <td><?= h($job->company_twitter_handle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validity') ?></th>
            <td><?= h($job->validity) ?></td>
        </tr>
    </table>
</div>
