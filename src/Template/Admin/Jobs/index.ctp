<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs index large-9 medium-8 columns content">
    <h3><?= __('Jobs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tags') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_post') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apply_url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_twitter_handle') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= h($job->id) ?></td>
                <td><?= h($job->title) ?></td>
                <td><?= h($job->description) ?></td>
                <td><?= h($job->location) ?></td>
                <td><?= h($job->type) ?></td>
                <td><?= h($job->category) ?></td>
                <td><?= h($job->tags) ?></td>
                <td><?= h($job->type_post) ?></td>
                <td><?= h($job->apply_url) ?></td>
                <td><?= h($job->validity) ?></td>
                <td><?= h($job->company_name) ?></td>
                <td><?= h($job->company_description) ?></td>
                <td><?= h($job->company_website) ?></td>
                <td><?= h($job->company_logo) ?></td>
                <td><?= h($job->company_twitter_handle) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
