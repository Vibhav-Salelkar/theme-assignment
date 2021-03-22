<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Initial_Theme
 */

?>

<div class="blog-custom">
	<div>
		<header class="individual_post">
			<h1>Going to the place & making a case!</h1>
			<br>
			<div class="single_post-meta">
				<div class="single_post-meta-author">
					<h4 style="margin:0px; font-weight:normal;">by <span>Robin Sen</span></h4>
					<p style="margin:0px 0.8rem;">On 21 Dec 2020</p>
				</div>
				<p class="post-comments">12 comments</a></p>
			</div>
			<hr class="post-divider">
		</header>

		<div class="individual_post-content">
			<p style="margin-top: 1rem;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<br>
			<div class="individual_post-imgbox">
				<img class="individual_post-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/mountain.jpg" alt="mountain picture">
			</div>
			<br>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<br>
			<div class="individual_post-imgbox">
				<img class="individual_post-img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/river.jpg" alt="river picture">
			</div>
			<br>
			<p style="margin:0px; color: #333;">Lorem ipsum tutle</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<br>
			<p class="individual_post-tags">TAGS: <span>HTML, CSS, Javascript</span> </p>
		</div>
		<br>
		<hr style='margin:0 0 0.2rem 0;'>
		<p style="margin:0px; font-size:1.125rem;">Comments</p>
		<hr>
		<div>
			<div class="comment_card">
				<p class='comment_card-meta'><i class="fa fa-comment" aria-hidden="true"></i><span class="comment_card-author"> John Richards</span> said on October 12, 2020 at 11:49 am</p>
				<p class="comment_card-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="comment_card-reply">
					<p><i class="fa fa-reply fa-flip-horizontal	" aria-hidden="true"></i> reply</p>
				</div>
			</div>
		</div>
		<div>
			<div class="comment_card">
				<p class='comment_card-meta'><i class="fa fa-comment" aria-hidden="true"></i><span class="comment_card-author"> John Richards</span> said on October 12, 2020 at 11:49 am</p>
				<p class="comment_card-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="comment_card-reply">
					<p><i class="fa fa-reply fa-flip-horizontal	" aria-hidden="true"></i> reply</p>
				</div>
			</div>
		</div>
		<div>
			<div class="comment_card">
				<p class='comment_card-meta'><i class="fa fa-comment" aria-hidden="true"></i><span class="comment_card-author"> John Richards</span> said on October 12, 2020 at 11:49 am</p>
				<p class="comment_card-comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="comment_card-reply">
					<p><i class="fa fa-reply fa-flip-horizontal	" aria-hidden="true"></i> reply</p>
				</div>
			</div>
		</div>
		<br>
		<hr>
		<p style="margin:0px; font-size:1.125rem;">Post your comment</p>
		<textarea class="individual_post-textarea" name="comment" rows="8" cols="80"></textarea>
		<br>
		<div class="individual_post-form">
			<div>
				<label style="font-size:0.875rem; margin-bottom: 0.5rem; display: block;" for="name">Name</label><input type="text" class="form-i" name="name" value="">
			</div>
			<div>
				<label style="font-size:0.875rem; margin-bottom: 0.5rem; display: block;" for="email">Email</label><input type="text" class="form-i" name="email" value="">
			</div>
			<div>
				<label style="font-size:0.875rem; margin-bottom: 0.5rem; display: block;" for="website">Website</label><input type="text" class="form-i" name="website" value="">
			</div>
		</div>
		<br>
		<div class="btnbox">
			<button class="form-btn" type="submit" name="button">Submit</button>
  	</div>
 </div>
 <div class="blog-sidebar">
		<?php get_sidebar(); ?>
 </div>

</div>
<br>
<hr class="line-break">
