<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Interview Walkins';
?>
<!DOCTYPE html>
<html>

    <!-- Mirrored from jobs.ondrejsvestka.cz/1-2/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2017 09:05:13 GMT -->
    <head>
    <?= $this->element('head');?>
    </head>
    <body>
    <?= $this->element('navbar');?>
    <!-- *** LOGIN MODAL ***_________________________________________________________
    -->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="Login" class="modal-title">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="http://jobs.ondrejsvestka.cz/1-2/customer-orders.html" method="post">
                        <div class="form-group">
                            <input id="email_modal" type="text" placeholder="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input id="password_modal" type="password" placeholder="password" class="form-control">
                        </div>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>
                    </form>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="client-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- *** LOGIN MODAL END ***-->
    <?= $this->fetch('content');?>
    <?= $this->element('footer');?>
    </body>

    <!-- Mirrored from jobs.ondrejsvestka.cz/1-2/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 May 2017 09:06:35 GMT -->
</html>
