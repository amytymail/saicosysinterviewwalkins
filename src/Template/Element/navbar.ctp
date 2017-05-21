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
                        <li class="active"><a href="category.html">Jobs</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Client zone <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="client-register.html">Login or Register</a></li>
                                <li><a href="client-dashboard.html">Dashboard</a></li>
                                <li><a href="client-applicants.html">Applicants</a></li>
                                <li><a href="client-job.html">Post a new job</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="category.html">Jobs Listing</a></li>
                                <li><a href="detail.html">Job detail</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.html">Blog listing</a></li>
                                <li><a href="post.html">Blog Post</a></li>
                                <li><a href="packages.html">Pricing packages</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="text.html">Text page</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul><a href="#" data-toggle="modal" data-target="#login-modal" class="btn navbar-btn btn-white"><i class="fa fa-sign-in"></i>Log in</a>
                </div>
            <?php endif;?>
        </div>
    </div>
</header>