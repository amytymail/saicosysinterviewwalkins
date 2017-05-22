<section style="background: #fafafa;">
	<div class="container">
        <div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="breadcrumbs">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="client-dashboard.html">Dashboard</a></li>
						<li>Add a new position</li>
					</ul>
				</div>
				<h1 class="heading">Add a new position</h1>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
        <div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form id="job-main-form" method="get" action="#" class="job-add-form">
					<div class="row">
						<div class="col-md-12">
							<h4>Job details</h4>
							<p class="text-muted text-small">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="title">Job Title</label>
							<input id="title" type="text" class="form-control">
							<p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="text">Job Description</label>
							<textarea id="text" rows="5" class="form-control"></textarea>
							<p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label for="location">Location</label>
							<input id="location" type="text" placeholder="e.g. Rio de Janeiro" class="form-control">
						</div>
						<div class="col-md-6 form-group">
							<label for="type">Type</label>
							<select id="type" placeholder="Choose job type" class="form-control select2">
								<option>Full-time</option>
								<option>Part-time</option>
								<option>Internship</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="category">Category</label>
							<select id="category" multiple="multiple" placeholder="Choose category" class="form-control select2"> 
								<option>Web design  </option>
								<option>Human Resources</option>
								<option>Support</option>
								<option>Logistics</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="tag">Tags</label>
							<select id="tag" multiple="multiple" placeholder="Choose tags" class="form-control select2">
								<option>HTML</option>
								<option>CSS</option>
								<option>Ruby on Rails</option>
								<option>PHP</option>
								<option>Python</option>
								<option>React</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="post_type">Type of the post</label>
							<select id="post_type" data-placeholder="Choose type of the post" class="form-control select2">
								<option>Featured ($100) </option>
								<option>Standard ($30)</option>
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label for="apply_url">Apply URL <span class="note">(users will apply on your website)</span></label>
							<input id="apply_url" type="url" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="validity">Validity of the post</label>
							<input id="validity" type="date" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">                           
							<hr class="margin-bottom--big">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<h4>Company details</h4>
							<p class="text-muted text-small">Some additional info for this screen about validity of the ads, etc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.     </p>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="company_name">Company name</label>
							<input id="company_name" type="text" class="form-control">
							<p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label for="company_description">Company Description</label>
							<textarea id="company_description" rows="3" class="form-control"></textarea>
							<p class="help-block text-small">Example block-level help text here. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 form-group">
							<label for="company_website">Website</label>
							<input id="company_website" type="url" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="company_logo">Logo</label>
							<input id="company_logo" type="file" class="form-control">
						</div>
						<div class="col-md-4 form-group">
							<label for="company_twitter">Twitter</label>
							<input id="company_twitter" placeholder="@getbootstrap" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr>
							<div class="checkbox text-center">
								<label>
									<input type="checkbox"> I agree with the <a href="#">Terms and conditions</a>.
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<hr>
							<button type="submit" class="btn btn-primary"> <i class="fa fa-magic"></i> Save and publish</button>
							<button type="submit" class="btn btn-default"> <i class="fa fa-save"></i> Save draft</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>