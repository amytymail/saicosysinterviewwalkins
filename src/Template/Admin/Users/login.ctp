<?php 
    $this->Form->templates( [
		'button' 			=> '<div class="text-center"><button{{attrs}}>{{text}}</button></div>',
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
                <?= $this->Flash->render() ?>
                <div class="box">
                    <h3 class="heading">Admin Login</h3>
                    <p class="lead">Already our customer?</p>
                    <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <hr>
					<?= $this->Form->create($user); ?>
					<?= $this->Form->control('username');?>
					<?= $this->Form->control('password');?>
					<?= $this->Form->button('<i class="fa fa-sign-in"></i> Log in', ['type' => 'submit', 'class' => 'btn btn-primary']) ?>
					<?= $this->Form->end() ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>