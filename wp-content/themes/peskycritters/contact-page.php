<?php
/*
Template Name: Contact Page
*/

if(isset($_POST['submit'])){
	if(trim($_POST['contactFirstName']) == '') {
		$firstNameError = "Please enter your first name.";
		$hasError = true;
	}
	else {
		$firstName = trim($_POST['contactFirstName']);
	}
	if(trim($_POST['contactLastName']) == '') {
		$lastNameError = "Please enter your last name.";
		$hasError = true;
	}
	else {
		$lastName = trim($_POST['contactLastName']);
	}
	
	if (trim($_POST['contactEmail']) == '' ){
		$emailError = "Please enter your e-mail.";
		$hasError = true;
	}
	else if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", trim($_POST['contactEmail']))) {
		$emailError = 'You entered an invalid email address.';
		$hasError = true;
		
	} else {
		$email = trim($_POST['contactEmail']);
	}
	if(trim($_POST['contactSubject']) == '--') {
		$subjectError = "Please input a subject.";
		$hasError = true;
	}
	else {
		$lastName = trim($_POST['contactSubject']);
	}
	if(trim($_POST['message']) === '') {
		$messageError = 'Please enter a message.';
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$message = stripslashes(trim($_POST['message']));
		} else {
			$message = trim($_POST['message']);
		}
	}
	//Send out our message to the admin email or one when is specified in tz_email.
	if(!isset($hasError)) {
		$emailTo = get_option('tz_email');
		if (!isset($emailTo) || ($emailTo == '') ){
			$emailTo = get_option('admin_email');
		}
		$name = $firstName.' '.$lastName;
		$subject = '[Pesky Critters] From '.$name;
		$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
		$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
		
		wp_mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}

}

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header col-md-12">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="page-title"><?php the_title(); ?></h1>
						<hr/>
					</header><!-- .entry-header -->
					<form class="col-md-12" action="<?php the_permalink(); ?>" method=post enctype="multipart/form-data">
						<div class="col-sm-12">
							<div class="col-xs-6">
								<p>First Name *</p>
							</div>
							<div class="col-xs-6">
								<p>Last Name *</p>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-xs-6">
								<!-- First Name field -->
								<input placeholder="First Name" name="contactFirstName" type="text" id="field"/>
								<?php if(isset($firstNameError) && $firstNameError != '') { ?>
									<span class="error"><?=$firstNameError;?></span>
								<?php } ?>
							</div>
							<div class="col-xs-6">
								<!-- Last Name field -->
								<input placeholder="Last Name" name="contactLastName" type="text" id="field"/>
								<?php if(isset($lastNameError) && $lastNameError != '') { ?>
									<span class="error"><?=$lastNameError;?></span>
								<?php } ?>
							</div>
						</div>
						<div class="col-sm-12 form-block">
							<div class="col-xs-6">
								<p>E-Mail Address *</p>
							</div>
							<div class="col-xs-6">
								<p>Phone Number</p>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="col-xs-6">
								<!-- Email field -->
								<input placeholder="E-mail" name="contactEmail" type="text" id="field"/>
								<?php if(isset($emailError) && $emailError != '') { ?>
									<span class="error"><?=$emailError;?></span>
								<?php } ?>
							</div>
							<div class="col-xs-6">
								<!-- Phone Number field -->
								<input placeholder="Phone Number" name="contactNumber" type="text" id="field"/>
							</div>
						</div>
						
						<div class="col-sm-12 form-block">
							<div class="col-xs-11">
								<p>Subject *</p>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="col-xs-11">
								<!-- Subject field -->
								<select placeholder="Subject" name="contactSubject" id="dropdown-field">
									<option value="-- --" class="drop-down-subject">--</option>
									<option value="optionOne" class="drop-down-subject">Option One</option>
									<option value="optionTwo" class="drop-down-subject">Option Two</option>
									<option value="optionThree" class="drop-down-subject">Option Three</option>
								</select>
								<?php if(isset($subjectError) && $subjectError != '') { ?>
								<span class="error"><?=$subjectError;?></span>
								<?php } ?>
							</div>
							
						</div>
						<div class="col-sm-12">
							<div class="col-xs-11">
								<p>Message *</p>
							</div>
						</div>
						
						<div class="col-sm-12">
							<div class="col-xs-11">
								<!-- Message field -->
									<textarea rows="10" cols="29" maxlength="500" placeholder="Send us your message" name="message" id="message-field"></textarea>
								<?php if(isset($messageError) && $messageError != '') { ?>
									<span class="error"><?=$messageError;?></span>
								<?php } ?>
							</div>
							
						</div>
						<div class="col-sm-11">
							<div class="col-sm-12">
								<input class="submit-style" name="submit" type="submit" value="Send" />
							</div>
						</div>
					</form>
				</article><!-- #post -->
				<hr/>
				<!-- Add Address details from the post and google map info -->
				<div class="row">
					<div class="entry-content col-xs-4">
						<div class="col-md-12">
							<?php
							$matches = array();
							$iframe = preg_match('(<[/]?iframe.*>)', get_the_content(), $matches);
							$content = preg_replace('(<[/]?iframe.*>)', '', get_the_content());
							// Since format has been destroyed, we need to re-apply the format from the post using apply_filters
							$content = apply_filters('the_content', $content);
							echo $content;
							wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div>
					</div><!-- .entry-content -->
					<div class="col-xs-7 col-xs-offset-1">
						<div class="col-md-12 portrait-box">
							<?php echo $matches[0]; ?>
						</div>
					</div> 
					
				</div>
			<?php endwhile; ?>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>