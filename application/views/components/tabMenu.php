<div id="primary-nav">
	<div id="site-navigation" class="main-navigation" role="navigation">
		<h3 class="menu-toggle">Menu</h3>
		<div class="nav-menu">
			<ul>
				<li><a href="<?php echo $this->config->item('base_url');?>">Home</a>
				</li>
				<li><a
					href="<?php echo $this->config->item('base_url');?>scholarships/">Scholarships</a>
					<ul class='children'>
						<li><a
							href="<?php echo $this->config->item('base_url');?>scholarships/search/">Search</a>
						</li>
						<li><a
							href="<?php echo $this->config->item('base_url');?>scholarships/my-scholarships/">My
								Scholarships</a>
						</li>
						<li><a
							href="<?php echo $this->config->item('base_url');?>scholarships/all-scholarships/">All
								Scholarships</a> <?php if(isset($scholarships) && count($scholarships)) { ?>
							<ul class='children'>
							<?php foreach($scholarships as $key => $value) { ?>
								<li><a
									href="<?php echo $this->config->item('base_url');?>scholarships/all-scholarships/<?php echo escapeHtml($value['title']);?>/"><?php echo $value['title'];?>
								</a>
								</li>
								<?php }?>
							</ul> <?php } ?></li>
					</ul></li>
				<li><a href="<?php echo $this->config->item('base_url');?>profile/">My
						Profile</a>
				</li>
				<li><a href="<?php echo $this->config->item('base_url');?>about/">About
						Us</a>
				</li>
				<li><a href="<?php echo $this->config->item('base_url');?>contact/">Contact</a>
				</li>
			</ul>
		</div>

	</div>
</div>
