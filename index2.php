<!DOCTYPE html>
<head>
<title>Thomas P. Horton</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	button = $(".button")
	button.click(function() {
		target=$(this).attr("id")
		$('html, body').animate({
         	scrollTop: $("div#"+target).offset().top-130
     	}, 1000);

	});
	
	socialIcons = $(".socialIcon")
	socialIcons.hover(function(){
		$(this).children().children('.activeSocial').fadeToggle(500);
	})
	
});
 </script>
 
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28026409-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<header>
	<ul id=nav>
    	<li id=who class=button><h2>Who</h2><h3>am i?</h3></li>
        <li id=what class=button><h2>What</h2><h3>do i do?</h3></li>
        <li id=when class=button><h2>When</h2><h3>have i done it?</h3></li>
        <li id=where class=button><h2>Where</h2><h3>is the work?</h3></li>
        <li id=why class=button><h2>Why</h2><h3>do i do it?</h3></li>
    </ul>  
</header>
<div id=socialMedia>
	<div class=socialIcon>
    	<a href="https://twitter.com/#!/thomasphorton">
            <img src="images/socialMedia/twitter_grey.png">
            <img src="images/socialMedia/twitter_pink.png" class=activeSocial>
       	</a>
    </div>
    <div class=socialIcon>
    	<a href="https://facebook.com/th77409">
            <img src="images/socialMedia/facebook_grey.png">
            <img src="images/socialMedia/facebook_pink.png" class=activeSocial>
      	</a>
    </div>
    <div class=socialIcon>
    	<a href="http://www.linkedin.com/profile/view?id=95691161&trk=tab_pro">
            <img src="images/socialMedia/linkedin_grey.png">
            <img src="images/socialMedia/linkedin_pink.png" class=activeSocial>    
        </a>    
    </div>
    <div class=socialIcon>
    	<a href="https://plus.google.com/u/0/116480337220567269199/posts">
            <img src="images/socialMedia/google_grey.png">
            <img src="images/socialMedia/google_pink.png" class=activeSocial>
        </a>
    </div>
    <div class=socialIcon>
    	<a href="http://www.youtube.com/channel/UCMCfocJsbxj52MSa1-x-NaQ?feature=mhee">
            <img src="images/socialMedia/youtube_grey.png">
            <img src="images/socialMedia/youtube_pink.png" class=activeSocial>
        </a>
    </div>
</div>

<div id=navBumper>
</div>
<div id=who class=page>
	<h2 class=title>about me</h2>
	<p>I'm <em>Thomas Patrick Horton</em>. I'm a huge nerd with a love for anything internet- design, development, programming, gaming, you name it.</p>
</div>
<div id=what class=page>
	<h2 class=title>skills that kill</h2>
    <p>Everyone knows that web design and development are constantly evolving artforms. In my work, I have had the opportunity to explore the following languages:</p>
    <ul>
    	<li>HTML5</li>
        <li>CSS3</li>
        <li>PHP (WordPress, Joomla, and Drupal)</li>
        <li>JavaScript (jQuery)</li>
        <li>Ruby (on Rails)</li>
    </ul>
    <p>I'm always looking for new solutions to old problems- my experience with multitudes of scripting and markup languages allow me to dynamically address client needs (and it's fun!)</p>
    <p>In addition to design and development, I've had the opportunity to work in a variety of Social Media Marketing, Search Engine Marketing, and Search Engine Optimization environments. Want examples?</p>
    <ul>
    	<li>Google Analytics</li>
        <li>Google AdWords</li>
        <li>Google Webmaster Tools</li>
        <li>Facebook Advertising</li>
        <li>Facebook Insights</li>
  	</ul>
</div>
<div id=when class=page>
	<h2 class=title>experience</h2>
	<p>I started out as a freelancing, devil-may-care developer that messed around with ideas more than execution. As I've grown in my craft, I've become more detail oriented, and concerned with seeing projects through from start to finish.</p>
	
	<p>I am currently employed as the Director of Interactive Media at <a href="http://pinckneymarketing.com" title="Charlotte SEO" target="blank">Pinckney Marketing, Inc.</a> At Pinckney, we manage the advertising and marketing needs of dozens of clients. I'm proud to support our local business friends with all of their digital needs- web design, PPC, SEO, you name it and I've done it!</p>
</div>
<div id=where class=page>
	<h2 class=title>ch-check it out</h2>
	<a href="http://mystz.com" title="Wake and Skate Apparel" target="blank"><img src="images/portfolio/mystz.png" alt="Website for Businesses" title="MYSTZ Website Design"></a>
	<a href="http://safecollegefunding.org" title="Save Money on College" target="blank"><img src="images/portfolio/safe.png" alt="Small Business Website" title="SAFE College Funding Website Design"></a>
</div>
<div id=why class=page>
	<h2 class=title>the blog</h2>
    <article>
    	<h2>Check One Two</h2>
<h3>August 1, 2012 - 18:57</h3>

<p>Forcing myself to write 3-4 times a day just to do it. Wrote an entry for <a href="http://tipsforurbangardening.com">Tips for Urban Gardening</a>, a silly little blog that I threw up because I built a garden on my secret patio. It's my first foray into blogging for bucks, I figure such a low cash investment is worth a shot at picking up just because it'd be cool to have an extra $20-$30 a week if I can build it up enough to start paying out. <a href="http://swagandsurf.com">Swag and Surf</a> is another case like that, but I'm not really trying to get paid as much as get on <a href="http://hypem.com">the Hype Machine</a> and support some local artists.</p>

<p>Got a lot of work done yesterday on the new CMS- login stuff is figured out and secure, admin functions are up and running. Next step is building a photoblogging function- both of the projects that I'm working on right now will be using it in one way or another. It's cool working on two projects like this at once, because it forces me to think about code reusability. I'm trying to develop a nice code base that I can redeploy, and it isn't going to work out too well if I have to spend hours customizing the code to each individual case.</p>

<p>Not sure how much I'll get done today, I'm in the weird time between getting a bunch done and waiting to hear back for revisions. And not getting a check in the mail isnt' exactly motivating me to keep working. </p>

<h2>New CMS</h2>
<h3>July 31, 2012 - 19:08</h3>

<p>Classic me. Start a blog and leave it after one post.</p>

<p>I've been working on and off on three projects that are all based around the idea of developing my own CMS. WordPress is good, but it's so bloated that I'd like to take a crack at putting something together that's lightweight. Knowing me though, there's going to be a little bit of code bloat, and hopefully nothing wide open as far as security. It's a lesson in best practices I suppose.</p>

<h2>Ruby on Rails Introduction- The Hard Way</h2>
<h3>May 8, 2012 - 22:10</h3>

<p>I was presented a problem late last week- a website that was displaying database records on individual pages. This information was important for a client who didn't have backend access to the site. Having seen The Social Network a couple too many times, I knew that it was possible. This would require new knowledge, so I set out on my quest.</p>

<p>I landed on Ruby as the language for my solution. I had already played with the basics (pretty much just helloworld.rb). I found a slightly dated but still great <a href="http://danwin.com/2010/04/coding-for-journalists-go-from-a-know-nothing-to-web-scraper-in-an-hour-hopefully/#topic_writing_your_script" title="Danwin.com">resource on scraping websites</a> that had me running my test scripts in minutes. At the guide's suggestion I installed the <a href="http://nokogiri.org">Nokogiri Gem</a> to allow for page parsing.</p>

<p>There wasn't much of a hard part to the process at all- once I was able to figure out where the information I needed was within the DOM, I built my XML queries and ran the script on a single record. The hardest part, honestly, was remembering the syntax for output- like I said, I have almost no Ruby experience.</p>

<p>I ended up with something like this:</p>

<p class=code>
raw_data = Nokogiri::HTML(open('http://www.example_website.com/?record=1')) <br> 
<br>
first_name = raw_data.xpath('//td/div/span')[1].content<br>
last_name = raw_data.xpath('//td/div/span[2]')[1].content<br>
#etc...<br>
<br>
puts "First Name: "+first_name<br>
puts "Last Name: "+last_name<br>
#etc...
</p>

<p>The next step was introducing a variable to the URL.</p>

<p class=code>
active = 1<br>
active_page = 'http://www.example_website.com/?record='+active.to_s()</p>

<p>The hangup here came from not setting active's type to string- you can't concantenate strings with ints (Is this right?)
<br>
Now that there's a variable involved, we can wrap the whole function in a for.. loop.</p>

<p class=code>
for i in 1..100 #whatever the endpoint is<br>
  active = i<br>
<br>
  active_record = "http://www.example_website.com/?record="+active.to_s()<br>
<br>  
  raw_data = Nokogiri::HTML(open(active_record)) <br>
 <br> 
  first_name = raw_data.xpath('//td/div/span')[1].content<br>
  last_name = raw_data.xpath('//td/div/span[2]')[1].content<br>
  #etc...<br>
<br>
  puts i.to_s()+" of 2218....."<br>
  puts "First Name: "+first_name<br>
  puts "Last Name: "+last_name<br>
  #etc...<br>
<br>
end</p>

<p>What's the point of running this scraper if we can't store the data? I found a pretty cool gem that allows <a href="http://fastercsv.rubyforge.org/" title="FasterCSV.rubyforge.org">Ruby to export to CSV</a> called FasterCSV. Call open the .csv before the loop initializes, and then add to the .csv on each loop iteration. Easy as pie.</p>

<p class=code>
require 'rubygems'<br>  
require 'nokogiri'  <br>
require 'open-uri'  <br>
require 'fastercsv'<br>
  <br>
FasterCSV.open("temp.csv","w") do |csv|<br>
  <br>
for i in 1..100 #or whatever<br>  
active = i<br>
<br>
active_record = "http://www.example_website.com/?record="+active.to_s()<br>
<br>  
raw_data = Nokogiri::HTML(open(active_record))<br>
<br>
first_name = raw_data.xpath('//td/div/span')[1].content<br>
last_name = raw_data.xpath('//td/div/span[2]')[1].content<br>
#etc...<br>
<br>
puts i.to_s()+" of 2218....."<br>
puts "First Name: "+first_name<br>
puts "Last Name: "+last_name<br>
#etc...<br>
<br>
csv<< [first_name,last_name,etc]<br>
<br>
end<br>
<br>
end</p>

<p>And that's how I got my data. All in all, a pretty quick foray into some new (to me) functions of Ruby. As usual, by the time I got around to doing this the client had already change their minds on the information.</p>    </article>
</div>


</body>
</html>