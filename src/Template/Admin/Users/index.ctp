<?php
	/**
		* @var \App\View\AppView $this
	*/
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar"> -->
    <!-- <ul class="side-nav"> -->
        <!-- <li class="heading"><?= __('Actions') ?></li> -->
        <!-- <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li> -->
	<!-- </ul> -->
<!-- </nav> -->

<section>
	<div class="container">
        <div class="row">
			<div class="col-lg-12 text-right margin-bottom--big">
				<?= $this->Html->link('<i class="fa fa-plus"></i>Add new User', ['controller' => 'Users','action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
			</div>
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-client-dashboard"> 
						<thead>
							<tr>
								<th scope="col"><?= $this->Paginator->sort('id') ?></th>
								<th scope="col"><?= $this->Paginator->sort('email') ?></th>
								<th scope="col"><?= $this->Paginator->sort('username') ?></th>
								<th scope="col"><?= $this->Paginator->sort('role') ?></th>
								<th scope="col"><?= $this->Paginator->sort('created') ?></th>
								<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
								<th scope="col" class="actions"><?= __('Actions') ?></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach ($users as $user): ?>
						<tr>
							<td><?= $this->Number->format($user->id) ?></td>
							<td><span class="label label-success"><?= h($user->email) ?></span></td>
							<td><span class="label label-success"><?= h($user->username) ?></span></td>
							<!-- <td><?= h($user->password) ?></td> -->
							<td><span class="label label-success"><?= h($user->role) ?></span></td>
							<td><?= h($user->created) ?></td>
							<td><?= h($user->modified) ?></td>
							<td class="actions">
								<?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-default']) ?>
								<?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-default']) ?>
								<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger']) ?>
							</td>
						</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="paginator">
					<ul class="pagination">
						<?= $this->Paginator->prev('«'); ?>
						<?= $this->Paginator->numbers(); ?>
						<?= $this->Paginator->next('»'); ?>
					</ul>
					<!-- <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p> -->
				</div> 
				<!-- <div class="pages"> -->
					<!-- <ul class="pagination"> -->
						<!-- <li><a href="#">«</a></li> -->
						<!-- <li class="active"><a href="#">1</a></li> -->
						<!-- <li><a href="#">2</a></li> -->
						<!-- <li><a href="#">3</a></li> -->
						<!-- <li><a href="#">4</a></li> -->
						<!-- <li><a href="#">5</a></li> -->
						<!-- <li><a href="#">»</a></li> -->
					<!-- </ul> -->
				<!-- </div> -->
				<!-- <p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p> -->
				<!-- <p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p> -->
			</div>
		</div>
	</div>
</section>