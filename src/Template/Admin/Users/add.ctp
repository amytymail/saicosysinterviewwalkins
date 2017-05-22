<?php 
    $this->Form->templates( [
        'input'             => '<input type="{{type}}" name="{{name}}" {{attrs}} class="form-control"/>',
		'inputContainer' 	=> '<div class="form-group">{{label}}{{content}}</div>',
        'checkbox'          => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',
        'radio'             => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
        'radioWrapper'      => '<div class="radio">{{label}}</div>',
        'textarea'          => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
        'submitContainer'   => '{{content}}'
    ]);    
?>
<section>
	<div class="container">
        <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="box">
					<h3 class="heading">New account</h3>
					<p class="lead">Not our registered customer yet?</p>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					<p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
					<hr>
					<?= $this->Form->create($user) ?>
					<?= $this->Form->control('email');?>
					<?= $this->Form->control('username');?>
					<?= $this->Form->control('password');?>
					<?= $this->Form->control('role');?>
					<?= $this->Form->button(__('Submit')) ?>
					<?= $this->Form->end() ?>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>