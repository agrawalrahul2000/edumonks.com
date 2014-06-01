
<!-- start breadcrumbs -->
<div id="breadcrumbs">
	<a href="<?php echo $this->config->item('base_url');?>"> Home </a>&raquo;&raquo;&nbsp;
	My ProfileEdumonks
</div>
<div id="post-36">
	<h1 class="page-title">My Profile</h1>
	<div class="entry entry-content"></div>
</div>
<div id="respond">
	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">
			Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link"
				href="/myprofile/#respond" style="display: none;">Cancel reply</a> </small>
		</h3>
		<form
			action="<?php echo $this->config->item('base_url');?>/wp-comments-post.php"
			method="post" id="commentform" class="comment-form">
			<p class="comment-notes">
				Your email address will not be published. Required fields are marked
				<span class="required">*</span>
			</p>
			<p class="comment-form-author">
				<input id="author" name="author" type="text" value="" size="30"><label
					for="author">Name</label> <span class="required">(Required)</span>
			</p>
			<p class="comment-form-email">
				<input id="email" name="email" type="text" value="" size="30"><label
					for="email">E-Mail</label> <span class="required">(Required)</span>
			</p>
			<p class="comment-form-url">
				<input id="url" name="url" type="text" value="" size="30"><label
					for="url">Website</label>
			</p>
			<p class="comment-form-comment">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" cols="45" rows="8"
					aria-required="true"></textarea>
			</p>
			<p class="form-allowed-tags">
				You may use these <abbr title="HyperText Markup Language">HTML</abbr>
				tags and attributes:
				<code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym
					title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt;
					&lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q
					cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code>
			</p>
			<p class="form-submit">
				<input name="submit" type="submit" id="submit" value="Post Comment">
				<input type="hidden" name="comment_post_ID" value="36"
					id="comment_post_ID"> <input type="hidden" name="comment_parent"
					id="comment_parent" value="0">
			</p>
		</form>
	</div>
</div>
