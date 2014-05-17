<div id="primary-nav">
	<div class="wrap nav">
		<nav id="site-navigation" class="main-navigation" role="navigation">
		<h3 class="menu-toggle">Menu</h3>
		<a class="assistive-text" href="#content" title="Skip to content">Skip
			to content</a>
		<div class="nav-menu">
			<ul>
				<li class="page_item page-item-28 current_page_item"><a
					href="<?php echo $this->config->item('base_url');?>">Home</a>
				</li>
				<li class="page_item page-item-38 page_item_has_children"><a
					href="<?php echo $this->config->item('base_url');?>scholarships/">Scholarships</a>
					<ul class='children'>
						<li class="page_item page-item-12"><a
							href="<?php echo $this->config->item('base_url');?>scholarships/search/">Search</a>
						</li>
						<li class="page_item page-item-16"><a
							href="<?php echo $this->config->item('base_url');?>scholarships/my-scholarships/">My
								Scholarships</a>
						</li>
						<li class="page_item page-item-46 page_item_has_children"><a
							href="<?php echo $this->config->item('base_url');?>scholarships/all-scholarships/">All
								Scholarships</a> <?php if(isset($scholarships) && count($scholarships)) { ?>
							<ul class='children'>
							<?php foreach($scholarships as $key => $value) { ?>
								<li class="page_item page-item-147"><a
									href="<?php echo $this->config->item('base_url');?>scholarships/all-scholarships/<?php echo escapeHtml($value['title']);?>/"><?php echo $value['title'];?>
								</a>
								</li>
								<?php }?>
							</ul> <?php } ?></li>
					</ul></li>
				<li class="page_item page-item-36"><a
					href="<?php echo $this->config->item('base_url');?>profile/">My
						Profile</a>
				</li>
				<li class="page_item page-item-30"><a
					href="<?php echo $this->config->item('base_url');?>aboutus/">About
						Us</a>
				</li>
				<li class="page_item page-item-32"><a
					href="<?php echo $this->config->item('base_url');?>contact/">Contact</a>
				</li>
			</ul>
		</div>
		</nav>
	</div>
</div>
