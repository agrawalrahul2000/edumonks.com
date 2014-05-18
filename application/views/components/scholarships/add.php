<div id="content" class="left">
	<!-- start breadcrumbs -->
	<div id="breadcrumbs">
		<a href="<?php echo $this->config->item('base_url');?>"> Home </a>
		&raquo;&raquo;&nbsp; Scholarship Addition
	</div>
	<div id="post-32" class="post-32 page type-page status-publish hentry">
		<h1 class="page-title">Scholarships Addition</h1>
		<div class="entry entry-content"></div>
		<div class="clear"></div>
	</div>
	<div>
	<?php if(isset($result_msg)) { echo $result_msg;  } ?>
	</div>
	<div>
		<form
			action="<?php echo $this->config->item('base_url');?>scholarships/post"
			method="post">
			<p>
				Title : <input type="text" name="title" /><br /> Applicable For : <input
					type="text" name="applicable_for" /><br /> Application Deadline : <input
					type="text" name="application_deadline" /><br /> Benifits Summary :
				<input type="text" name="benifits_summary" /><br /> Scholarships
				Number : <input type="text" name="scholarships_number" /><br />
				Purpose : <input type="text" name="purpose" /><br /> Description : <input
					type="text" name="description" /><br /> Award Type : <input
					type="text" name="award_type" /><br /> Award Purpose : <input
					type="text" name="award_purpose" /><br /> Benifit Summary : <input
					type="text" name="benifit_summary" /><br /> Best Prize : <input
					type="text" name="best_prize" /><br /> Awards Number : <input
					type="text" name="awards_number" /><br /> Award Duration : <input
					type="text" name="award_duration" /><br /> Education Level : <input
					type="text" name="education_level" /><br /> Academic Performance :
				<input type="text" name="academic_performance" /><br />
				Qualification Level : <input type="text" name="qualification_level" /><br />
				Discipline : <input type="text" name="discipline" /><br />
				Application Method : <input type="text" name="application_method" /><br />
				Selection Criteria : <input type="text" name="selection_criteria" /><br />
				Mode Of selection : <input type="text" name="mode_of_selection" /><br />
				Application Form : <input type="text" name="application_form" /><br />


			</p>
			<p>
				<input type="submit" value="Send it!">
			</p>
		</form>
	</div>
</div>
