<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="level_0">
		<div id="box-l0-left">
			<img src="/wp-content/themes/ccjdev_at/assets/img/elements/splash.jpg" width="595" height="312" alt="Around Town w/ Dallas & RaeJ" />
			<div>
				<div>
					<h4>Latest News:</h4>
					<p>
						The contact form, which was broken, is now able to send messages. 
						<br />
						To send a message, click the yellow button to the right.
					</p>
				</div>
			</div>
		</div>
		<div id="box-l0-right">
		<iframe width="363" height="210" src="https://www.youtube.com/embed/zERCjuFPts0" frameborder="0" allowfullscreen></iframe>
			<div></div>
			<div>
				<h3>If you want to be a featured guest, or have a comment or suggestion for &quot;Around Town&quot;</h3>
				<div></div>
				<input type="button" value="Contact Around Town" id="button-l0-contact_us" onclick="window.location.hash = 'contact_a-t';" />
			</div>
		</div>
	</div>
	
	<a name="about_a-t"></a>
	<div id="level_1">
		<h1>About Around Town</h1>
		<img src="/wp-content/themes/ccjdev_at/assets/img/elements/about_at-dallas_raej.jpg" width="960" height="374" alt="Around Town is hosted by Dallas Jamison & RaeJ Johnson" />
		<p>
			Dallas Jamison and RaeJ Johnson are your Co-Hosts and Executive Producers of &quot;Around Town&quot;; a TV talk show that highlights people, 
			places and events &quot;Around Town,&quot; but not limited to the St. Louis and surrounding metropolitan areas. 
		</p>
		<p>
			The purpose of the show is to highlight entrepreneurs and share human interest stories in addition to showing off 
			the small business men and women in our communities!
		</p>
		<p>
			Keep watching because you'll never know where we'll be &quot;Around Town!&quot;
		</p>
		<p>
			Airing on KDNL ABC 30, Wednesday, August 3, 2016 from 1:36 am- 2:07 am.
		</p>
		<p>
			<strong>Set your DVR!</strong>
		</p>
	</div>
	<a name="recent_shows"></a>
	<div id="level_2">
		<h1>Recent Shows</h1>
		<div id="box-l2-left">
			<iframe width="520" height="280" src="https://www.youtube.com/embed/VjHQymB95TQ" frameborder="0" allowfullscreen></iframe>
			<a href="https://youtu.be/VjHQymB95TQ" title="Around Town witih Dallas & RaeJ -- Angela Alexander at Financial Love Affair" target="_blank">Around Town witih Dallas & RaeJ -- Angela Alexander at Financial Love Affair</a>
			<p>
				A Night with Football Greats
			</p>
			<div></div>
			<p><strong>First Aired: </strong>July 20, 2016</p>
			<div></div>
			<a href="https://www.youtube.com/channel/UC6Q3i7XY9-dg5tJxEKwgJ5g">View More Shows</a>
		</div>
		<div id="box-l2-mid"></div>
		<div id="box-l2-right">
			<h4>Discussions with Dallas &amp; RaeJ</h4>
			<p>Monday - Friday</p>
			<p>5 pm - 7 pm (CST)</p>
			<a href="http://fergusonusahottalkradio.com" title="Click to listen to Discussions with Dallas &amp; RaeJ" target="_blank">Click to listen to Discussions with Dallas &amp; RaeJ</a>
			<div></div>
			<iframe width="220" height="120" src="https://www.youtube.com/embed/6lk0aYXgyfQ" frameborder="0" allowfullscreen></iframe>
			<a href="https://www.youtube.com/embed/6lk0aYXgyfQ" title="Men and their insecurities" target="_blank">Men and Their Insecurities</a>
			<p><strong>First Aired: </strong>July 20, 2016</p>
			<div></div>
			<iframe width="220" height="120" src="https://www.youtube.com/embed/K-jx4CQHohk" frameborder="0" allowfullscreen></iframe>
			<a href="https://www.youtube.com/embed/K-jx4CQHohk" title="1st Couple of Counseling" target="_blank">1st Couple of Counseling</a>
			<p><strong>First Aired: </strong>July 20, 2016</p>
		</div>
	</div>
	<a name="contact_a-t"></a>
	<div id="level_3">
		<h1>Contact Around Town</h1>
		<p>
			If you are a viewer of &quot;Around Town&quot; and would like to give some feedback about this show 
			or let Dallas and RaeJ know how much you like &quot;Around Town&quot; please enter your name, 
			email address, and your message below.
		</p>
		<p>
			Or if you are interested to appear as a featured guest on &quot;Around Town&quot; with the 
			aim of furthering your brand or company, please enter your information into the form below.
		</p>
		<p>
			Keep watching &quot;Around Town!&quot;
		</p>
		<p>
			A copy of the message you have sent will also be sent to you.
			<br /><br />
			Some email providers route email messages sent from this website to their users&#39; Spam folder. 
			If you do not notice an email send from <em>admin[at]aroundtown.com</em>, please check your Spam folder 
			for a confirmation message from <em>aroundtown30.com</em>.
		</p>
		<form name="contact_at" method="POST" action="/wp-content/themes/ccjdev_at/assets/php/contact_a-t.php">
		<div>
			<input type="text" size="38" maxlength="50" value="Enter your name" name="name" />
			<input type="text" size="55" maxlength="75" value="Enter your email address" name="email" />
			<textarea cols="100" rows="7" name="message">Enter your message</textarea>
		</div>
		<input type="submit" value="Send Message" id="input-submit_contact" />
		</form>      
	</div>
	<a name="social_media"></a>
	<div id="level_4">
		<h1>Social Media</h1>
		<div id="social_media-facebook">
			<span>Facebook</span>
			<a href="https://www.facebook.com/wearefergusonusa/" title="Visit our group page" target="_blank">Visit our group page</a>
		</div>
		<div id="social_media-periscope">
			<span>Periscope</span>
			<a href="http://www.periscope.tv/" title="Click to launch app" target="_blank">Click to launch app</a>
		</div>
		<div id="social_media-instagram">
			<span>Instagram</span>
			<a href="https://www.instagram.com/discussionswithdallas/" title="Visit our page" target="_blank">Visit our page</a>
		</div>
		<div id="social_media-twitter">
			<span>Twitter</span>
			<a href="http://www.twitter.com/1raejohnson" title="Read our tweets" target="_blank">Read our tweets</a>
		</div>
		<div id="social_media-youtube">
			<span>YouTube</span>
			<a href="https://www.youtube.com/channel/UC6Q3i7XY9-dg5tJxEKwgJ5g" title="Visit our channel" target="_blank">Visit our channel</a>
		</div>
	</div>
<?php get_footer(); ?>
