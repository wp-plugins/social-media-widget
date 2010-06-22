=== Social Media Widget ===
Contributors: Brian Freytag
Donate link: http://www.idontlikethisgame.com/code/donate/
Tags: social media, twitter, facebook, myspace, digg, email, rss, reddit, linkedin, orkut, youtube, buzz, social, icons, links, subscribe, follow, follow me, friendfeed
Requires at least: 2.9.1
Tested up to: 3.0
Stable tag: 1.3.1

Adds links to all of your social media and sharing site profiles. Icons come in 3 sizes and 4 different icon styles.

== Description ==

The Social Media Widget is a simple sidebar widget that allows users to input their social media website profile URLs and other subscription options to show an icon on the sidebar to that social media site and more that open up in a separate browser window.

= Features =

* Supports the following social media sites:
	* Facebook
	* Twitter
	* MySpace
	* FriendFeed
	* Orkut
	* LinkedIn
	* YouTube
	* Digg
	* Reddit
	* Buzz
	* RSS
	* E-mail Subscription Info Page (or mailto: address)
	
* Ability to select from 3 different sizes of icons:
	* 16x16
	* 32x32
	* 64x64
	
* Ability to select from 4 different icon packages:
	* Web 2.0 (Default) - Icons from <a href="http://www.iconspedia.com/">various artists</a> 
	* Sketch - <a href="http://www.jankoatwarpspeed.com/post/2008/10/20/handycons-a-free-hand-drawn-social-media-icon-set.aspx">Handycons</a> by Janko At Warp Speed 
	* Heart - <a href="http://thedesignsuperhero.com/2009/03/heart-v2-free-social-iconset-in-heart-shape/">Heart v2</a> by The Design Superhero
	* Cutout - <a href="http://www.iconspedia.com/pack/icontexto-inside-2222/">Icontexto Inside Icons</a>

* Ability to choose starting icon opacity from 50% opacity to 100% opacity
	note: on hover, icons are 100% opaque. Does not work in Internet Explorer due to bad transparent .png support. IE6+ made the buttons look terrible in most cases (black border around the icons) - removed alpha filter to fix this.
	
* Ability to choose whether or not to use the rel="nofollow" tag in your links. (Recommended see http://en.wikipedia.org/wiki/Nofollow)

If you like this plugin, please rate it and click "Works" for your Wordpress version!

== Installation ==

Follow the steps below to install the plugin.

1. Upload the social-widget directory to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Appearance/Widgets and activate the widget to customize

== Screenshots ==
1. Shows all of the 32px icon packs
2. Shows all of the 64px icon packs
3. Shows all of the 16px icon packs
4. Shows the widget control panel

== Frequently Asked Questions ==

1) Can you add [insert social media service] support?
Yes I can. Just e-mail me at <a href="mailto:brifreytag@gmail.com">brifreytag_at_gmail.com</a> or leave a comment at http://www.idontlikethisgame.com/updates/social-media-widget/.

== Help ==

For help, you can send an e-mail to <a href="mailto:brifreytag@gmail.com">brifreytag_at_gmail.com</a> or get ahold of me via twitter at <a href="http://www.twitter.com/brianfreytag">@brianfreytag</a>

== Changelog ==
1.3.1 - Quick changes to make the Readme.txt standardized.

1.3 - Added requested support for FriendFeed

1.2.8 - Fixed an issue with widget not showing up on peoples' websites. There was an errant </form> in the code from when I attempted to use the form method of Paypal donate. Didn't delete this code and it borked the plugin.

1.2.7 - Removed filter: alpha(opacity=x); from both the CSS and inline style (create initial transparency and hover to 100% opacity). This stops Internet Explorer from using opacity, but it also doesn't make the icons look terrible. If you have a problem with this, take it up with Microsoft. I'm not paid enough to hack around a crappy browser that can easily support png transparencies with little-to-no effort by the developers. All other browsers are unaffected.

1.2.6 - Added ability to add rel="nofollow" to icon links. Also added a Donate button due to the massive time commitment of this plugin. 

1.2.5 - Updated readme.txt to improve visibility and adding screenshots

1.2.4 - Trying something else to fix the issues with 1.2.2 and 1.2.3.

1.2.3 - As expected, changes in 1.2.2 broke some peoples' stuff. Made a couple CSS changes to see if this fixes it.

1.2.2 - Some of you were complaining about it breaking your theme because I wasn't using the default arguments to wrap the widget. I decided to give it a try. I'm sure this is going to break more than it's going to fix, but I'm doing it "properly" now. Note: You're going to have to do a lot more CSS hacks to get it to look right in some themes.

1.2.1 -  Fixed an issue with Orkut icon staying on even if the field is blank. Fixed an issue with 32 pixel default icons appearing as 64 pixels.

1.2 - 
* Fixed issue with RSS URL being reset after save in the widget control panel (did not affect functionality, but caused confusion)
* Added support for Orkut
* Added Cutout icon pack
* Changed default image alt and title tags to Widget title (i.e. if widget title is Follow Me, Facebook alt/title tags are "Follow Me on Facebook." If it is Follow Us, alt/title is "Follow Us on Facebook)
* Cleaned up image location code from the WP_CONTENT_URL to the WP_PLUGIN_URL function to attempt to correct some file location issues with Windows servers.

1.1.2 - Fixed an issue with LinkedIn icons not appearing

1.1.1 - Fixed an issue with some users plugin.php breaking at line 339.

1.1 - Added support for LinkedIn

1.0 - Added support for varying sizes, added 2 new icon packages, added support for varying opacities.