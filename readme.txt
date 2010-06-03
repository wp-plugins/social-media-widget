=== Social Media Widget ===
Contributors: Brian Freytag
Tags: social media, twitter, facebook, myspace, digg, email 
Requires at least: 2.9.1
Tested up to: 3.0 beta 2
Stable tag: 1.2.2

== Description ==

The Social Media Widget is a simple sidebar widget that allows users to input their social media website profile URLs and other subscription options to show an icon on the sidebar to that social media site and more that open up in a separate browser window.

= Features =

* Supports the following social media sites:
	* Facebook
	* Twitter
	* MySpace
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
	* Web 2.0 (Default) - Icons from various artists at: http://www.iconspedia.com/
	* Sketch - Handycons by Janko At Warp Speed at: http://www.jankoatwarpspeed.com/post/2008/10/20/handycons-a-free-hand-drawn-social-media-icon-set.aspx
	* Heart - Heart v2 by The Design Superhero at: http://thedesignsuperhero.com/2009/03/heart-v2-free-social-iconset-in-heart-shape/
	* Cutout - Icontexto Inside Icons at: http://www.iconspedia.com/pack/icontexto-inside-2222/

* Ability to choose starting icon opacity from 50% opacity to 100% opacity
	note: on hover, icons are 100% opaque 
	
== Installation ==

Follow the steps below to install the plugin.

1. Upload the social-widget directory to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Appearance/Widgets and activate the widget to customize

== Screenshots ==
1. Shows the various icon sizes and icon packs and their appearance in the sidebar.

== Help ==

For help, you can send an e-mail to brifreytag_at_gmail.com or get ahold of me via twitter at @brianfreytag

== Changelog ==
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
