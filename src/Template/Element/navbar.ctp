<!-- navbar-->
<header class="header">
    <div role="navigation" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <?= $this->Html->link('Interview Walkins', ['prefix' => false, 'controller' => 'Jobs', 'action' => 'index'], ['class' => 'navbar-brand logo']);?>
				<!--                <a href="index.html" class="navbar-brand logo">
                    <img src="img/logo.png" alt="logo" class="hidden-xs hidden-sm">
                    
                    <img src="img/logo-small.png" alt="logo" class="visible-xs visible-sm">
                    <span class="sr-only">Go to homepage</span>
				</a>-->
				<!--                <div class="navbar-buttons">
                    <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
				</div>-->
			</div>
            <?php if($this->request->prefix === 'admin' && $this->request->action !== 'login') :?>
			<div id="navigation" class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<!-- <li class="active"><a href="category.html">Jobs</a></li> -->
					<!-- <li><a href="about.html">About us</a></li> -->
					<!-- <li><a href="contact.html">Contact</a></li> -->
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle client-menu-toggle" aria-expanded="false"> 
							<div class="client-menu-image hidden-sm"> 
								<?= $this->Html->image('airbnb.png', ['class' => 'img-responsive']);?>
								<!-- <img src="img/airbnb.png" alt="" class=""> -->
							</div>Logged Client <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="client-register.html">Login or Register</a></li>
							<li><a href="client-dashboard.html">Dashboard</a></li>
							<li><a href="client-applicants.html">Applicants</a></li>
							<li><a href="client-job.html">Post a new job</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"> <i class="fa fa-sign-out"></i>Log out</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
            <?php endif;?>
		</div>
	</div>
</header>