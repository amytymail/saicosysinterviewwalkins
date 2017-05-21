<section style="background: #fafafa;">
	<div class="container">
        <div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="breadcrumbs">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Client dashboard</li>
					</ul>
				</div>
				<h1 class="heading">Client dashboard</h1>
				<p class="lead text-center">This is the lead paragraph of the article. Pellentesque habitant morbi tristique.</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
        <div class="row">
			<div class="col-lg-12 text-right margin-bottom--big">
				<?= $this->Html->link(
						 $this->Html->tag('i', '', array('class' => 'fa fa-plus')) . 'Add new position', [
						'prefix' => 'admin', 'controller' => 'Dashboard', 'action' => 'addPost'], [
						'class' => 'btn btn-primary', 'escape' => false
					]);
				?>
			</div>
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-client-dashboard"> 
						<thead>
							<tr>
								<th>Job title</th>
								<th>Position filled</th>
								<th>Date posted</th>
								<th>Date expiring</th>
								<th>Applicants</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th><a href="client-job.html">Webdesigner</a>
								</th>
								<td> <span class="label label-success">Filled</span>
								</td>
								<td>21/10/2017</td>
								<td>31/12/2017</td>
								<td> <a href="client-applicants.html" class="btn btn-success"> <i class="fa fa-users"></i>4 <span class="hidden-xs hidden-sm">Applicants</span></a>
								</td>
								<td> <a href="client-job.html" class="btn btn-default"> <i class="fa fa-edit"></i>Edit</a><br><a href="#" class="btn btn-default"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br><a href="#" class="btn btn-default"> <i class="fa fa-times-circle-o"></i>Delete</a></td>
							</tr>
							<tr>
								<th><a href="client-job.html">Front End developer</a><br /><span class="label label-info">Featured</span>
								</th>
								<td> <span class="label label-default">Not Filled</span>
								</td>
								<td>10/10/2017</td>
								<td>16/11/2017</td>
								<td> 
								</td>
								<td> <a href="client-job.html" class="btn btn-default"> <i class="fa fa-edit"></i>Edit</a><br><a href="#" class="btn btn-default"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br><a href="#" class="btn btn-default"> <i class="fa fa-times-circle-o"></i>Delete</a></td>
							</tr>
							<tr>
								<th><a href="client-job.html">Webdesigner</a>
								</th>
								<td> <span class="label label-default">Not Filled</span>
								</td>
								<td>30/10/2017</td>
								<td>30/11/2017</td>
								<td> <a href="client-applicants.html" class="btn btn-success"> <i class="fa fa-users"></i>4 <span class="hidden-xs hidden-sm">Applicants</span></a>
								</td>
								<td> <a href="client-job.html" class="btn btn-default"> <i class="fa fa-edit"></i>Edit</a><br><a href="#" class="btn btn-default"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br><a href="#" class="btn btn-default"> <i class="fa fa-times-circle-o"></i>Delete</a></td>
							</tr>
							<tr>
								<th><a href="client-job.html">Team Leader</a><br /><span class="label label-info">Featured</span>
								</th>
								<td> <span class="label label-default">Not Filled</span>
								</td>
								<td>19/02/2017</td>
								<td>31/10/2017</td>
								<td> <a href="client-applicants.html" class="btn btn-success"> <i class="fa fa-users"></i>4 <span class="hidden-xs hidden-sm">Applicants</span></a>
								</td>
								<td> <a href="client-job.html" class="btn btn-default"> <i class="fa fa-edit"></i>Edit</a><br><a href="#" class="btn btn-default"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br><a href="#" class="btn btn-default"> <i class="fa fa-times-circle-o"></i>Delete</a></td>
							</tr>
							<tr>
								<th><a href="client-job.html">Software Engineer</a>
								</th>
								<td> <span class="label label-default">Not Filled</span>
								</td>
								<td>21/10/2017</td>
								<td>31/11/2017</td>
								<td> 
								</td>
								<td> <a href="client-job.html" class="btn btn-default"> <i class="fa fa-edit"></i>Edit</a><br><a href="#" class="btn btn-default"> <i class="fa fa-check-circle-o"></i><span class="hidden-xs hidden-sm">Mark as </span>filled</a><br><a href="#" class="btn btn-default"> <i class="fa fa-times-circle-o"></i>Delete</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="pages">
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>
				<p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
				<p class="text-small text-muted">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
			</div>
		</div>
	</div>
</section>	