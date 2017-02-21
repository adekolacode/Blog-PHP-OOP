<?php require_once 'shared/header.php' ?>

<!-- content -->
<div class="content">
	<div class="container">
	 <div class="load_more">	
		<h3></h2>
			<ul id="myList">
				<!-- If no blog posts are found we ask the user to create his first post -->
				<?php if (empty($this->posts)): ?>
					<li>
						<div class="l_g">
							<div class="col-md-12 praesent">
								<div class="l_g_r">
									<div class="dapibus">
										<h2>&iexcl;&iexcl; No blog posts found !!</h2>
										<br/>
										<h2><button type="button" onclick="window.location='<?=ROOT_URL?>?p=blogController&amp;a=add'" class="bold addFirstPost">Add your first blog post here.</button></h2>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
				<?php else: ?>
					<?php foreach ($this->posts as $post): ?>
						<li>
								<div class="l_g">
									<div class="col-md-12 praesent">
										<div class="l_g_r">
											<div class="dapibus">
												<h2><a href="<?=ROOT_URL?>?p=blogController&amp;a=post&amp;id=<?=$post->id?>"><?=htmlspecialchars($post->title)?></a></h2>
												<br/>
												<p><?=nl2br(htmlspecialchars($post->small_desc))?> </p>
												<p class="adm">Posted by <?=$post->author?> | <?=$post->date?></p>
												<a href="<?=ROOT_URL?>?p=blogController&amp;a=post&amp;id=<?=$post->id?>" class="link">Read More</a>
												<a href="<?=ROOT_URL?>?p=blogController&amp;a=edit&amp;id=<?=$post->id?>" class="link">Edit</a>
												<form name="delete" action="<?=ROOT_URL?>?p=blogController&amp;a=delete&amp;id=<?=$post->id?>" method="post" class="link">
													<button type="submit" name="delete" value="1" class="bold">
														Delete
													</button>
												</form>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
						</li>
					<?php endforeach ?>
				<?php endif ?>
			</ul>
	 </div>
	</div>
</div>
<!-- content -->	

<?php require_once 'shared/footer.php' ?>