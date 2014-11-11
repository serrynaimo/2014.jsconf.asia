<!doctype html>
<!--

	From the team that brought you JSCamp.Asia 2012 and JSConf.Asia 2013.
	More info is on its way. Spread the word. Follow us on Twitter @jsconfasia!

	If you want to help us out, drop thomas@jsconf.asia an email! ;)

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>JSConf.Asia Singapore 2014</title>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One|Open+Sans:200,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="stylesheet" type="text/css" href="css/colours.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500, user-scalable=no" />
	<?php } ?>
	<meta property="og:title" content="JSConf.Asia Singapore 2014"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://jsconf.asia/"/>
	<meta property="og:image" content="http://jsconf.asia/assets/og_jsconfasia.jpg"/>
	<meta property="og:site_name" content="JSConf.Asia"/>
	<meta property="og:description" content="The web can do that? Asia’s most influential web developer conference. Spread the word. Follow us on Twitter @jsconfasia"/>
	<meta name="title" content="JSConf.Asia Singapore 2014"/>
	<meta name="description" content="The web can do that? Asia’s most influential web developer conference. Spread the word. Follow us on Twitter @jsconfasia"/>
</head>
<body>
	<h1>JSConf.Asia 2014</h1>
	<section id="intro">
	<div>
		<div class="date"><span>20 + 21 Nov 2014</span></div>
		<div class="singapore"><span>Singapore</span></div>
		<div class="venue"><a href="http://sentosa.amarahotels.com/" target="_blank">Amara Sanctuary</a></div>
		<div class="js"><a class="logo" href="http://facebook.com/jsconfasia"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 630 630">
		<g id="logo">
		  <rect id="background" x="0" y="0" width="630" height="630" fill="none" />
		  <path id="j" fill="#ffffff" d="m 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13" />
		  <path id="s" fill="#ffffff" d="m 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375" />
		</g>
		</svg></a></div>
	</div>
	</section>
	<section id="body">
		<section id="info">
			<p class="desc">Asia’s most influential web developer conference</div>
			<p>
				sponsored by<br/>
				<a href="http://www.pocketmath.com" target="_blank"><img src="img/sponsors/pocketmath.svg"  height="40" /></a>
			</p>
			<a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
				Last tickets on sale!
				<span>2 days - S$550</span>
			</a>
		</section>
		<span id="schedule"></span>
		<section id="speakers" class="thursday">
			<h2>Schedule</h2>
			<p>
				20 speakers, 2 parties and 5 workshops including our NodeBoats hardware workshop with Spark.io and iDA wait for you this year, hosted by these amazing people.
			</p>
			<div class="day thursday">
			    <h4>Thursday 20th</h4>
                <div class="speaker break">
    				<span>8 AM</span>
                    <h3>Registration</h3>
    			</div>
                <div class="speaker break">
    				<span>9 AM</span>
                    <h3>Oh, hai!</h3>
                    <h4>Sayanee Basu <a href="https://twitter.com/sayanee_" target="_blank">@sayanee_</a></h4>
    			</div>
    			<div class="speaker">
    				<span>9:15 AM</span>
    				<img src="img/speakers/spike.jpg" />
                    <h3>Building Isomorphic Apps</h3>
    				<h4>Spike Brehm, Airbnb <a href="https://twitter.com/spikebrehm" target="_blank">@spikebrehm</a></h4>
    				<p>
                        Over the past year or so, we’ve seen the emergence of a new way of building JavaScript web apps that share code between the web browser and the server, using Node.js — a technique that has come to be known as "isomorphic JavaScript.” There are a variety of use cases for isomorphic JavaScript; some apps render HTML on both the server and the client, some apps share just a few small bits of application logic, while others share the entire application runtime between client and server to provide advanced offline and realtime features. Why go isomorphic? The main benefits are performance, maintainability, reusability, and SEO.
                        <br/>
                        This talk will share examples of isomorphic JavaScript apps running in the wild, explore the exploding ecosystem of asset building tools, such as Browserify, Webpack, and Gulp, that allow developers to build their own isomorphic JavaScript apps with open-source libraries, demonstrate how to build an isomorphic JavaScript module from scratch, and explore how libraries like React and Flux can be used to build a single-page app that renders on the server.
    				</p>
    				<p>
    					Spike is a web engineer at Airbnb. He’s currently prototyping the next generation of Airbnb’s front end
    					stack, tackling the problem of &quot;isomorphic JavaScript&quot; – building apps that have the flexibility to run
    					on both the client and server using the same codebase.
    				</p>
    			</div>
    			<div class="speaker workshop">
    				<span>FULL DAY</span>
    				<img src="img/speakers/chinmay.jpg" />
                    <h3>NodeBoats Builder with spark.io and IDA</h3>
    				<h4>Chinmay Pendharkar, Sonoport <a href="https://twitter.com/ntt" target="_blank">@ntt</a></h4>
                    <p>
                        <b>Up to 24 attendees will be able to sign-up for this workshop online short before the event. Watch your inbox!
                            It’s first come, first serve!</b>
                        <br><br/>
                        Throughout one entire Thursday we’re going to dive into the mysteries of hardware programming with JavaScript. You’ll get all the
                        parts and tools necessary to build your own kick-ass boat with a Spark Core at its connected heart. We’ll throw you in a team
                        of two and your creativity and craftsmanship is key to come up with, build and program the best boat of the conference.
                        The Amara Sanctuary’s swimming pool will be hosting our competition on Thursday evening and we’ll have prices
                        for the winning team.<br/>
                        A big thank you for the great people at <a href="http://spark.io" target="_blank">spark.io</a> for providing the Spark Core Maker
                        Kits and <a href="http://www.ida.gov.sg/Collaboration-and-Initiatives/Initiatives/Store/IDA-Labs" target="_blank">Singapore’s IDA</a> for lending us hardware and their lab tools!
                    </p>
    				<p>
    					Chinmay is a geek who works with web based audio tech. His background is in embedded systems and engineering
    					acoustics, and he spent 6 months helping to build an autonomous robotic submarine. He is the organizer of
    					a bunch of cool local geek/developer/hacker meetups in Singapore.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>10 AM</span>
    				<img src="img/speakers/vince.jpg" />
                    <h3>Pixel Art and Complex Systems</h3>
    				<h4>Vince Allen, Spotify <a href="https://twitter.com/vinceallenvince" target="_blank">@vinceallenvince</a></h4>
                    <p>
                        Once defined by its limitations, pixel art has evolved into a highly expressive visual style. Illustrators, product designers and artists continually challenge the conventional pixel art sensibility to produce beautiful work for the street, our homes and museums.
                        <br/>
                        Working in abstraction, pixel artists manipulate a simple set of design priniciples. This talk will focus on techniques to render pixel art in a web browser using JavaScript and the DOM. We’ll start by drawing characters and scenes in the traditional 8-bit style. We’ll also set them in motion and create framed-based pixel art animation.
                        <br/>
                        Next, we’ll focus on pixels themselves and how to transform them into autonomous agents. Using the same rendering techniques, we’ll create complex systems out of simple rules. As we try to balance these systems, we’ll observe interesting emergent behaviors. Finally, we’ll learn how to render these systems to HD video using Node.js and Photoshop.
                    </p>
    				<p>
    					Vince is a software engineering manager at Spotify in New York. He’s been designing and programming
    					for almost 20 years and devotes most of his spare time to FloraJS, a JavaScript framework for creating
    					natural simulations in a web browser. Listen to Vince on Spotify (search for Vince Allen or his alias,
    					DJ Monkey Pants) or find him at <a href="http://vinceallen.com" target="_blank">vinceallen.com</a>.
    				</p>
    			</div>
    			<div class="speaker break">
        			<span>10:30 AM</span>
    			    <h3>No script, all coffee</h3>
    			</div>
    			<div class="speaker">
    				<span>11:15 AM</span>
    				<img src="img/speakers/chris.jpg" />
                    <h3>Bad Form</h3>
    				<h4>Chris Lienert, Jardine Lloyd Thompson <a href="https://twitter.com/cliener" target="_blank">@cliener</a></h4>
                    <p>
                        At any given time and place, if you listen carefully, you can hear the screams of frustration from people trying to fill out a form on the web. We web developers are the ones who can fix that and I’ll show you how.
                    </p>
    				<p>
    					Chris has been doing all sorts of things to innocent web sites for 17 years and is also responsible for unleashing web
    					forms library Quaid-JS upon the world. He is currently working in the in-house web team at insurance broker Jardine Lloyd
    					Thompson in Perth, Australia Aside from musical distractions and earning frequent flyer points, Chris and his wife Sarah
    					can often be found in the company of their very small human.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>12 PM</span>
    				<img src="img/speakers/weilu.jpg" />
                    <h3>HTTP Headers – the simplest security</h3>
    				<h4>Wei Lu<a href="https://twitter.com/luweidewei" target="_blank">@luweidewei</a></h4>
                    <p>
                        Not sure what Content-Security-Policy and Strict-Transport-Security are about? Your web apps are at risk! Security is crucial but can be hard
                        to get right. Luckily for web developers, the HTTP protocol comes with well-thought-out security specifications. Modern browsers implementing
                        those security features are capable of doing much of the heavy lifting for us. It is our responsibility to put the browsers on guard. This
                        talk explores which security headers are especially useful along with when and how to use them.
                    </p>
    				<p>
                        Wei is a full-time open source software developer, passionate about beautiful code and
                        cryptocurrencies. She’s currently leading the development effort of Hive web wallet -
                        an elegant cryptocurrency wallet.
                        She’s also a core maintainer of bitcoinjs-lib and co-organizes SingaporeJS meetups and
                        local NodeSchool workshops.
    				</p>
    			</div>
    			<div class="speaker break">
        			<span>12:45 PM</span>
    			    <h3>Lunch delicousness</h3>
    			</div>
    			<div class="speaker">
    				<span>1:45 PM</span>
    				<img src="img/speakers/jan.jpg" />
                    <h3>Fun with JavaScript and sensors</h3>
    				<h4>Jan Jongboom, Telenor <a href="https://twitter.com/janjongboom" target="_blank">@janjongboom</a></h4>
                    <p>
                        As web developers we treat mobile phones as scaled down desktops. We like responsive design and nice looking buttons. But we can do so much more! That little device in your pocket is equipped with a gazillion sensors, and thus able to connect with the real life. Why not exploit that? It’s time to do crazy stuff with phones!
                        <br/>
                        In a talk that is filled with demo’s Jan Jongboom will throw phones in the air, create a theremin, build a security cam, rip some phones apart, play with the gyroscope and maybe even do some juggling (he’s practicing). And all of that... with JavaScript.
                    </p>
    				<p>
    					Jan Jongboom is a battle-hardened mobile developer who currently works as a Firefox OS Contributor & Evangelist for Telenor, which allows him to take apart phones for a living.
                        He is the author of Firefox OS in Action, and his first ever published article credited him as working for the Parks Department.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>2:30 PM</span>
    				<img src="img/speakers/martin.jpg" />
                    <h3>The Art of Less</h3>
    				<h4>Martin Kleppe, Ubilabs <a href="https://twitter.com/aemkei" target="_blank">@aemkei</a></h4>
                    <p>
                        Focussing on the smallest scale will sometimes lead to new worlds: As a developer you will discover beautiful aspects of the language you use every day. In this talk, Martin will teach you magic tricks how to create handsome code in as few characters as possible. He will showcase mind-bending hacks and introduce you to the incredible art of code golfing.
                    </p>
    				<p>
    					Martin is the organizer of HHJS and &quot;Head of Development&quot; at Ubilabs. His company develops
    					applications based on the Google Maps API for an international client base.
    					He is the maniac who built the spinning globe in 1K of JavaScript and hacked Tetris in less than 140
    					bytes. He is an active speaker at conferences and loves to share the latest insights with the community.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>3:15 PM</span>
    				<img src="img/speakers/soares.jpg" />
                    <h3>Quiver.js: Rethinking Web Frameworks</h3>
    				<h4>Soares Chen <a href="https://twitter.com/soareschen" target="_blank">@soareschen</a></h4>
                    <p>
                        The web has vastly evolved since it was first invented. However, the way we write web applications has not changed much from the way we wrote the first MVC web frameworks running on a single server. Today’s web applications run in the cloud with a myriad combination of distributed subsystems. Yet we still write web applications as a monolithic piece of software that runs the same on every server.<br/>
                        Quiver is a new approach to tame the modern web architecture. It learns from best practices including the Unix Philosophy, REST architecture, microservices, and combines them into an elegant component system. With Quiver, a web application is organized as a set of loosely coupled components that are connected declaratively. Quiver makes it possible to create reusable subsystems such that the same application logic can run on vastly different environments.
                    </p>
    				<p>
    					Soares Chen is an independent web developer from Penang, Malaysia. He work mostly on server backend using
    					Node since 2011, and is passionate about web technologies. He currently stays in Singapore and is active in
    					the SingaporeJS and HackerspaceSG community. Soares is the creator of Quiver, with it he has the ambition
    					to make building web applications as easy as combining lego bricks.
    				</p>
    			</div>
    			<div class="speaker break">
        			<span>3:45 PM</span>
    			    <h3>Tea Timeout</h3>
    			</div>
    			<div class="speaker">
    				<span>4:30 PM</span>
    				<img src="img/speakers/tingan.jpg" />
                    <h3>Translation workflow and formatting complex translations</h3>
    				<h4>Tingan Ho, P1.cn <a href="https://twitter.com/tingan87" target="_blank">@tingan87</a></h4>
                    <p>
                        Supporting a multilingual application has been a difficult for a very long time and we are now in a brink of
                        entering a new state where we can do it more easily. Data such as CLDR and technologies such ICU’s MessageFormat is
                        unheard for most people. Yet they are used by global companies such as Google, IBM and Apple. These technologies
                        is now included in a project I have been working on called <a href="http://l10ns.org" target="_blank">L10ns()</a>. In addition to solving complex
                        translation formatting with the help of ICU’s MessageFormat and CLDR, L10ns also solves a very difficult workflow
                        problem associated with translation. My session will focus on all the mayor problems in internationalizing applications
                        and help people use efficient industry best practices and solutions for producing multilingual applications.
                    </p>
    				<p>
    					Tingan is a designer, coder & thinker from China and loves innovation in web, design, and OOS.
    					He is the author of SASS-Inspector and get-translation and contributes to many other open-source projects.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>5:15 PM</span>
                    <img src="img/speakers/dexter.jpg" />
    				<img src="img/speakers/laurence.jpg" />
                    <h3>Preparing your NodeJS Application for scale</h3>
    				<h4>Dexter Tan &amp; Laurence Franslay, PayPal</h4>
                    <p>
                        Let’s say you’ve built a brand spanking new Node app. The Internets smile upon you and it becomes super popular! Suddenly
                        people all around the world want to use it too. And naturally, some of them might want to abuse it for nefarious reasons
                        (think stolen private data and leaked selfies). Now you’re thinking to yourself: How do I solve these problems?<br/>
                        With a sample Express app and some help from PayPal’s open-sourced KrakenJS suite, we’ll show you how!
                    </p>
    				<p>
                        Dexter is an application developer at PayPal. When not working on Node-based KrakenJS projects, he’s out rock
                        climbing, diving and building reusable UI components and widgets, often at the same time.
                        <br/><br/>
    					Laurence is a PayPal engineer on the SWAT team, and enjoys moving up and down the stack. His core interests lies in
                        security and distributed systems, and enjoys looking at performance data to make things faster.
    				</p>
    			</div>

    			<div class="speaker workshop">
    				<span>5:15 PM</span>
    				<h3>NodeBoats competition</h3>
    			</div>
    			<div class="speaker break">
    				<span>6 PM</span>
    				<h3>Beer.js with Nonstop Games</h3>
    				<h4>Stick around, have a drink, enjoy the music</h4>
    			</div>
			</div>
			<div class="day friday">
                <h4>Friday 21st</h4>
                    <div class="speaker break">
        				<span>8 AM</span>
                        <h3>Eyes open. We have coffee!</h3>
        			</div>
                    <div class="speaker">
        				<span>9 AM</span>
        				<img src="img/speakers/feross.jpg" />
                        <h3>WebTorrent</h3>
        				<h4>Feross Aboukhadijeh <a href="https://twitter.com/feross" target="_blank">@feross</a></h4>
                        <p>
                            This talk will look at WebTorrent, a BitTorrent client for the browser that fully-interoperates with the regular BitTorrent network. WebTorrent uses WebRTC Data Channels and special "hybrid clients" to connect to the wider BitTorrent network. It’s insane to try this.
                        </p>
        				<p>
        					Feross is currently building WebTorrent, a streaming BitTorrent client for the browser, powered by WebRTC.
        					Before that, he built PeerCDN, a peer-to-peer content delivery network to makes sites faster and cheaper.<br/>
        					He’s a graduate of Stanford and has worked at Quora, Facebook, and Intel and loves "mad science" projects!
        				</p>
        			</div>
                    <div class="speaker workshop">
                        <span>9 AM</span>
                        <img src="img/speakers/tim.jpg" />
                        <h3>NodeSchool Singapore III</h3>
                        <h4>Tim Oxley, NodeSource <a href="https://twitter.com/secoif" target="_blank">@secoif</a></h4>
                        <p>
                        	<b>Up to 24 attendees will be able to sign-up for this workshop online short before the event. Watch your inbox!
                                It’s first come, first serve!</b>
                            <br><br/>
                            NodeSchool is an international phenomenon of volunteer educators bringing essential Node.JS &amp; JavaScript skills.
                            <br/>
                            NodeSchool is made from a number of interactive lessons written by various individuals on topics ranging from Core Node
                            to WebGL. This will be the third such event held in Singapore, and we’ll be covering the introductory workshops:
                            "learn you node" and "functional javascript workshop" - the quickest way to get a taste for real-world node programming.
                            In addition, for those who have already completed these challenges we will cover "count to six" and "Kick off Koa" which teach some of the interesting aspects of next generation JavaScript programming in ES6.
                            <br/>
                            This session is suitable for beginners to advanced JavaScript developers with little to no Node experience.
                            <br/>
                            Please bring a laptop with node installed and expect to learn something.
                        </p>
                        <p>
                            Tim is a community-centric Node.js engineer with NodeSource. Tim organises
                            the SingaporeJS meetup, nodeschool events, occasionally hosts the NodeUp podcast and is
                            creator of CampJS.
                        </p>
                    </div>
        			<div class="speaker">
        				<span>9:45 AM</span>
        				<img src="img/speakers/peggy.jpg" />
                        <h3>There and Back Again - A Game Dev’s Tale</h3>
        				<h4>Peggy Kuo, Atlassian <a href="https://twitter.com/pyko" target="_blank">@pyko</a></h4>
                        <p>
                            There are two main challenges in creating a game: starting, and finishing. With the plethora of tools at our disposal, it’s quite easy to embark on our pet projects. But sooner or later, we come across problems. Scope creep, unknown unknowns, fragile code and just life in general. It’s at this point that many games falter by the wayside and are eventually shelved.
                            <br/>
                            In this talk, I’ll take you through my journey of creating my game Trichroma, and share both the technical and non-technical lessons I learned along the way that enabled me to pull it over the finish line and bring it home.
                        </p>
        				<p>
        					Peggy is a full stack developer at Atlassian who loves creating things.
        					She makes everything from stuffed toys to Android apps, and her latest project is a
        					little game called Trichroma. She co-organises the Girl Geek Dinner and Women Who Code.
        					But if you really want to know the way to her heart... that would be food!
        				</p>
        			</div>
        			<div class="speaker break">
            		    <span>10:30 AM</span>
        			    <h3>Have a break</h3>
        			</div>
        			<div class="speaker">
        				<span>11 AM</span>
        				<img src="img/speakers/jacob.jpg" />
                        <h3>Extra Full Stack JS: a node-os talk</h3>
        				<h4>Jacob Groundwater, New Relic <a href="https://twitter.com/0x604" target="_blank">@0x604</a></h4>
                        <p>
                            Building an operating system should be as easy as building an express app. JavaScript alone is not enough, but when combined with node and npm something amazing happens. Together these three form one of the most flexible and powerful programming platforms that exists today.
                            <br/><br/>
                            You can build a server.<br/>
                            You can build an operating system.<br/>
                            You can even build a kernel!<br/>
                            <br/>
                            Let’s explore how.
                        </p>
        				<p>
        					Jacob is a senior engineer on New Relic’s product research team. Originally from Vancouver,
        					but living in the bay area, Jacob is a polite, but strongly opinionated people lover who asks tough questions,
        					loves to learn, hack, or discuss wild ideas with friends. He’s the original author of the node-os project
        					and is also actively working on runtimejs, an operating system kernel built on the V8 JavaScript engine.
        				</p>
        			</div>
                    <div class="speaker workshop">
                        <span>11 AM</span>
                        <img src="img/speakers/chris-frederick.jpg" />
                        <h3>Intermediate Git and GitHub workshop</h3>
                        <h4>Chris Frederick, GitHub <a href="https://twitter.com/kansaichris" target="_blank">@kansaichris</a></h4>
                        <p>
                        	<b>Up to 24 attendees will be able to sign-up for this workshop online short before the event. Watch your inbox!
                                It’s first come, first serve!</b>
                            <br><br/>
                            You know that version control systems are important. You probably use one every day! But are you using it as effectively as you can?
                            <br/>
                            In this workshop, you will learn essential techniques for collaborating with Git and GitHub. These cover working locally—interacting with branches, diffs, stashes, commit history, the staging area, and the reflog—as well as distributed workflow patterns—using forks and pull requests. Come to refresh your Git knowledge or learn about any of these topics for the first time!
                        </p>
                        <p>
                            Chris lives and breathes software documentation. He used to work in the games industry translating
                            Japanese SDK materials into English, but more recently he has been writing Help articles for GitHub.
                            When he’s not busy reading or writing, Chris loves to share stories over a good espresso!
                        </p>
                    </div>
        			<div class="speaker">
        				<span>11:45 AM</span>
        				<img src="img/speakers/yangbin.jpg" />
                        <h3>IPCluster – Scaling Zopim’s frontend node servers</h3>
        				<h4>Yang Bin Kwok, Zopim <a href="https://twitter.com/zopim" target="_blank">@zopim</a></h4>
                        <p>
                            Realtime applications are easy with Node, but how do you scale out when the load hits? Zopim shares the lessons learnt at scale, as well as their approach to enterprise class software of a simplified network topology eschewing dedicated load balancers and firewalls.
                        </p>
        				<p>
        					Yang Bin is a co-founder of Zopim and currently works on simplifying the distribution of
        					realtime data across their POPs and the frontend. One day, he hopes to open source Zopim’s web
        					application framework, but in the meantime he dabbles in image processing, visualizations and chinchillas.
        				</p>
        			</div>
        			<div class="speaker">
        				<span>12:15 PM</span>
        				<img src="img/speakers/slava.jpg" />
                        <h3>Reactive Programming made simple</h3>
        				<h4>Slava Kim, Meteor <a href="https://twitter.com/imslavko" target="_blank">@imslavko</a></h4>
                        <p>
                            Reactive Programming is very useful for building complex user interface and interactions. Unfortunately the most popular form of it is FRP (Functional Reactive Programming) which is not an easy paradigm to learn and use for newcomers. In this talk we will present you a much simpler approach that still preserves all the Reactive Programming properties usually required on day-by-day basis but allows you to use the usual imperative style just in a 1Kb library of pure JS.
                            <br/>
                            This talk is suitable for medium-above average programmers who are interested in building user interfaces (although Reactive Programming might appear useful in other parts of a typical application as well). But it can also be useful for novices as this talk has no prerequisites (unlike the mentioned FRP). There will be a pretty simple code examples with a lot of interactivity on the screen. I promise, it will be a good balance between concepts, examples and fun!
                        </p>
        				<p>
                            Slava is a core developer at the open-source full-stack JS framework Meteor.
                            His work includes Meteor’s real-time data updates from databases, client-side caches, packaging
                            system, Phonegap support and other exciting things. In his free time Slava
                            constantly tries to educate himself on different fascinating topics of Computer Science.
        				</p>
        			</div>
        			<div class="speaker break">
            			<span>12:45 PM</span>
        			    <h3>Lunch cravings</h3>
        			</div>
        			<div class="speaker">
        				<span>1:45 PM</span>
        				<img src="img/speakers/charlie.jpg" />
                        <h3>Gibbering at Algoraves: JS in Live Audiovisual Performances</h3>
        				<h4>Charlie Roberts, UCLA</h4>
                        <p>
                            In electronic music, a live coding performance consists of a performer improvising a piece of music by coding it in front of an audience, while projecting their code for the audience to see. People get together and dance to these performances at events called Algoraves.<br/>
                            Gibber is a creative coding environment that I originally designed for live coding performances, and it’s created entirely in JavaScript. In my talk I’ll share the audiovisual capabilities of Gibber, what it’s like to perform with it, and how it’s used to teach kids to create electronic music. Along the way I’ll show off some libraries I’ve created that might be useful to creative coders. And finally, I’ll live code some music and visuals that you may or may not dance to.
                        </p>
        				<p>
        					Charlie is a Postdoctoral Fellow in the AlloSphere Research Group at the California NanoSystems Institute,
        					where his research explores computer human interaction in virtual reality environments. He is the primary
        					author of <a href="http://gibber.mat.ucsb.edu" target="_blank">Gibber</a>, a creative coding environment for the browser, and has given
        					over a dozen performances in the US, Europe and Asia improvising audiovisual art through live coded JavaScript.
        				</p>
        			</div>
                    <div class="speaker workshop">
                        <span>1:45 PM</span>
                        <img src="img/speakers/tamaspiros.jpg" />
                        <h3>Creating a geospatial MEAN application</h3>
                        <h4>Tamas Piros, MarkLogic <a href="https://twitter.com/tpiros" target="_blank">@tpiros</a></h4>
                        <p>
                        	<b>Up to 24 attendees will be able to sign-up for this workshop online short before the event. Watch your inbox!
                                It’s first come, first serve!</b>
                            <br><br/>
                            Heard about the MEAN stack? In this workshop you’ll get a practical example on building out a GeoSpatial application using this technology stack. We will extract GPS data out from JPEG and store those as documents in a NoSQL data
                            storage. We will write a RESTful backend using node.js and server that to a frontend created using ExpressJS and AngularJS.
                        </p>
                        <p>
                            Tamas is a web advocate, author, teacher & preacher of super-heroic web technologies from England.
                            His technology dish of choice is the MEAN stack with a side of Polymer that he serves regularly
                            during his London MEAN stack meetup group to curious developers.
                        </p>
                    </div>
                    <div class="speaker">
        				<span>2:30 PM</span>
        				<img src="img/speakers/gabe.jpg" />
                        <h3>Let’s make a game with Phaser</h3>
        				<h4>Gabe Hollombe, Neo <a href="https://twitter.com/gabehollombe" target="_blank">@gabehollombe</a></h4>
                        <p>
                            These days, we’re spoiled for choice when it comes to HTML5 game frameworks. But with so many frameworks out there, it’s easy to feel like you might be picking the wrong one for your next (or first) project. Each framework has their own way of doing things, and it can feel like a big commitment to spend time learning a framework before you know everything it’s capable of and if you like its API enough to stick with it.
                            <br/>
                            I’ve used many of the popular HTML5 frameworks over the last few years, and Phaser is my favorite. It’s got everything you’re likely to need (sprites, tilemaps, sound, animation, canvas/webgl, mobile support), a very active community and an extensive suite of online examples (over 320 playable demos).
                            <br/>
                            A conference talk isn’t enough time to show off everything, but I’ll give you a tour of Phaser’s features that you’re most likely to care about. I’ll give you enough familiarity that you’ll feel comfortable getting started with Phaser, and excited by the possibilities.
                        </p>
        				<p>
        					Gabe is a full-stack senior engineer at Neo Innovation, with a thirst for knowledge and a passion for
        					sharing what he’s learned. He has spoken in on four different continents on topics including JavaScript,
        					Ruby, Vim, and HTML5 Game development.
        				</p>
        			</div>
        			<div class="speaker">
        				<span>3:00 PM</span>
        				<img src="img/speakers/ritesh.jpg" />
                        <h3>Lightning branches - A way to supercharge delivery of features</h3>
        				<h4>Ritesh Angural, Redmart <a href="https://twitter.com/ringular" target="_blank">@ringular</a></h4>
                        <p>
                            I will be talking about the "No talk all action" approach we take at RedMart for feature development. You’ll learn how we supercharge development and get code in production fast with an opinionated and automated development workflow. Hint: It’s a cocktail of Git, JS (of course), Chef, Devops & killing pointless meetings.
                        </p>
        				<p>
        					Ritesh is an Engineer working on the next generation Ecommerce platform at RedMart, currently working on the frontend and continuous delivery.
        					Apart from coding in JavaScript & Ruby, he loves extracting a perfect espresso & scoring goals while wearing the Juventus jersey!
        				</p>
        			</div>
        			<div class="speaker break">
            			<span>3:30 PM</span>
        			    <h3>Moah foood</h3>
        			</div>
        			<div class="speaker">
        				<span>4 PM</span>
        				<img src="img/speakers/simon.jpg" />
                        <h3>Deep Space - A simulation drama</h3>
        				<h4>Simon Swain, Modus Interactive <a href="https://twitter.com/simon_swain" target="_blank">@simon_swain</a></h4>
                        <p>
                            Starting from bacteria and moving up the food chain, we’ll look at the uncanny way simple rules can create complex results. Along the way we’ll try and conquer the universe. Expect spaceships, explosions, mass extinction and some Javascript.
                        </p>
        				<p>
        					Simon has been building the web since way back, seeing it evolve from obscure novelty to mainstream dominance.
        					 Currently he is designing and building realtime cloud solutions for connected devices. Simon created the
        					 Straw library and is a regular presenter at SydJS. On the side, he’s still trying to work out how to do
        					 Wing Chun properly.
        				</p>
        			</div>
                    <div class="speaker workshop">
                        <span>4 PM</span>
                        <img src="img/speakers/chunsiong.jpg" />
                        <img src="img/speakers/riza.jpg" />
                        <h3>Building real-time multiplayer games with SignalR and JS</h3>
                        <h4>Riza Marhaban &amp; Chun Siong Tan, Microsoft <a href="https://twitter.com/tanchunsiong" target="_blank">@tanchunsiong</a></h4>
                        <p>
                        	<b>Up to 24 attendees will be able to sign-up for this workshop online short before the event. Watch your inbox!
                                It’s first come, first serve!</b>
                            <br><br/>
                            SignalR is a library for the .NET Web Server Stack. In this workshop, we would be looking at building/architecting a massive scalable game with JS front and SignalR + Cloud backend.
                        </p>
                        <p>
                            Riza is a Technical Evangelist in Microsoft Singapore. In his past experience, he was a Software Development Engineer working on Microsoft and Open Web Technologies.
                            <br/><br/>
                            Chun Siong is a Technical Evangelist in Microsoft Singapore. He manages the developer community for the Windows platform. In his free time, he codes and codes.
                        </p>
                    </div>

        			<div class="speaker">
        				<span>4:45 PM</span>
        				<img src="img/speakers/mikeal.jpg" />
                        <h3>Future of Node</h3>
        				<h4>Mikeal Rogers, Digital Ocean <a href="https://twitter.com/mikeal" target="_blank">@mikeal</a></h4>
                        <p>
                            The node community has change tremendously as it has evolved over the last 5 years. Some of the most modern and progressive practices in open source are being tested to great success in this relatively new and dynamic community. While the core project has struggled to release and attract new contributors perhaps the future of node lies not in its central project but in the community that is continuing to grow and flourish.
                        </p>
        				<p>
        					Mikeal is the Director of Evangelism at DigitalOcean and the creator of request, NodeConf and JSFest.
        				</p>
        			</div>
        			<div class="speaker break">
        				<span>6 PM</span>
                        <h3>Beach.JS AfterParty with Paypal</h3>
                        <h4>Mambo Beach Club, Sentosa Beach</h4>
        			</div>
                </div>
			</div>
			<p></p>
            <a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
				Last tickets on sale!
				<span>2 days - S$550</span>
			</a>
		</section>
		<section id="about">
			<h2>About</h2>
			<p align="center">JSConf.Asia, 20 + 21 Nov 2014 in Singapore<br/><a href="http://sentosa.amarahotels.com/" target="_blank">Amara Sanctuary, Sentosa</a></p>
			<h3>The web can do THAT?</h3>
			<p>
			JSConf has in the past been showcasing the potential of the web more than any other event and this year will be no different. Loads of demos, wows and how-to’s are gonna be accompanied by hands-on workshops and our code-café.
			</p>
			<h3>The rest is just the ordinary...</h3>
			<p>
			...you know, amazing people, great food, fast Wi-Fi, gorgeous venue, free booze, beach-parties ... just JSConf as usual.
			</p>
			<p>
			<a href="http://www.jimmymonkey.com/" target="_blank" style="border-radius: 90px; width: 170px; height: 140px; padding: 15px 0; background: #fff; text-align: center; float: right; margin: -5px -25px 0 15px;"><img src="img/jimmy.png" height="128" /></a>
			Oh, about the code-café: Yes, Jimmy Monkey is back! They upgraded their gear and invited some of Singapore’s best baristas over to deliver you competitive shot pulling and latte art. Pro-tip: Come to the venue early to skip some of the morning queue. They’ll be at your service both days full-time!
			</p>
			<h3>It’s for you!</h3>
			<p>
			Together with <a href="http://2014.cssconf.asia">CSSConf</a>, we want to make community events that bring Southeast-Asia’s best web developers together in a playful and informal environment. It’s gonna be a great setting for learning and exchange and we can’t wait to see you there!
			</p>
			<p align="right">
				<a href="https://twitter.com/serrynaimo" target="_blank"><img src="img/thomas.png" alt="Thomas" height="40" /></a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<a href="https://twitter.com/thedesignnomad" target="_blank"><img src="img/melissa.png" alt="Melissa" height="37" valign="top" /></a> &nbsp; &nbsp; &nbsp;
                <a href="https://twitter.com/ramanshalupau" target="_blank"><img src="img/raman.png" alt="Raman" height="35" valign="top" /></a>
			</p>
			<br/>
			<form id="subscribeForm" action="http://2012.jsconf.asia/addsubscriber.php" method="get">
				<div class="input"><span><input type="email" name="email" placeholder="E-Mail Address" /><input type="submit" value="Subscribe" /></span></div>
				<div class="msg"><span></span></div>
			</form>
		</section>
		<section id="sponsors">
			<h2>Sponsors</h2>
			<div class="sponsor">
				<h3>The boss</h3>
				<p>
					<a href="http://www.pocketmath.com" target="_blank" style="background: #fff; display: inline-block; padding: 12px 12px 5px; width: 262px;"><img src="img/sponsors/pocketmath.svg"  height="40" /></a>
				</p>
				<p>
					PocketMath makes it easy to buy media, real time, across mobile website, apps and games. We’re found in Singapore and San Francisco, with a presence in Australia and India! Check us out at <a href="http://www.pocketmath.com" target="_blank">www.pocketmath.com</a>
                    <br/><br/>
                    PocketMath brings the world’s mobile inventory to your fingertips.
				</p>
			</div>
            <div>
				<h3>The Sponsors</h3>
				<p>
					<a href="http://www.nonstop-games.com" target="_blank" style="background: #fff; display: inline-block; padding: 5px 12px 0;"><img src="img/sponsors/nsg_king.png"  height="50" /></a>
				</p>
				<p>
					Nonstop Games, a King Studio, is Singapore’s coolest social mobile gaming company and the creator of the tablet hit &quot;Heroes of Honor&quot;. They’re going to treat our attendees with a little surprise on Thursday evening...
				</p>
				<p>
					<br/><a href="http://www.palantir.com" target="_blank" style="background: #fff; display: inline-block; padding: 11px 11px 5px;"><img src="img/sponsors/palantir.png"  height="36" /></a>
				</p>
				<p>
					Palantir Technologies builds software platforms that help human experts perform powerful,
					collaborative analysis of data at scale. Palantir’s software is deployed at public institutions,
					private enterprises, and in the non-profit sector to address the challenges of responsibly making
					sense of complex, diverse data.
				</p>
				<p>
					<br/><a href="http://www.microsoft.com/en-sg/default.aspx" target="_blank" style="background: #fff; display: inline-block; padding: 5px 8px 0;"><img src="img/sponsors/microsoft.png"  height="47" /></a>
				</p>
				<p>
                    We all know Microsoft and we have to thank it for many of the web technologies that we use today. In Singapore Microsoft has an open door for web developers and hosts many user-group meetups in their space.
				</p>
			</div>
			<div class="supporter">
				<h3>The Supporters</h3>
				<p>
					<a href="http://about.redmart.com" target="_blank" style="background: #fff; display: inline-block; padding: 7px 0 4px; width: 177px;"><img src="img/sponsors/redmart.svg" height="40" /></a>
				</p>
				<p>
					<a href="https://www.github.com" target="_blank" style="background: #fff; display: inline-block; padding: 4px 3px 0;"><img src="img/sponsors/github.png"  height="50" /></a>
				</p>
                <p>
                    <a href="https://temasys.github.io" target="_blank" style="background: #fff; display: inline-block; padding: 2px 7px 1px 10px;"><img src="img/sponsors/temasys.png"  height="54" /></a>
                </p>
				<p>
					<a href="http://www.meteor.com" target="_blank" style="background: #fff; display: inline-block; padding: 5px 9px;" class="meteor"><img src="img/sponsors/meteor.png" style="margin: 0 6px 3px 6px" height="40" /></a>
				</p>
				<p>
					<a href="https://www.digitalocean.com" target="_blank" style="background: #fff; display: inline-block; padding: 12px 12px 8px;"><img src="img/sponsors/digitalocean.png"  height="40" /></a>
				</p>
                <p>
                    <a href="https://www.mozilla.com" target="_blank" style="background: #fff; display: inline-block; padding: 6px 8px 4px;"><img src="img/sponsors/mozilla.png"  height="42" /></a>
                </p>
				<p>
					<a href="https://www.paypal.com" target="_blank" style="background: #fff; display: inline-block; padding: 9px 13px 8px;"><img src="img/sponsors/paypal.png"  height="40" /></a>
				</p>
				<p>
					<a href="http://www.dot.asia/" target="_blank" style="background: #fff; display: inline-block; padding: 8px 10px 2px;"><img src="img/sponsors/asia.png" height="44" /></a>
				</p>
				<p>
					<a href="http://www.piktochart.com" target="_blank" style="background: #fff; display: inline-block; padding: 4px 12px 0;"><img src="img/sponsors/piktochart.png" style="margin: 7px 0;" height="42" /></a>
				</p>
				<p>
					<br/>
					If you’re interested in supporting the web developer community as well, please <a href="mailto:sponsors@jsconf.asia?subject=JSConf Sponsorship">write us a mail</a>!
				</p>
			</div>
			<a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
				Last tickets on sale!
				<span>2 days - S$550</span>
			</a>
			<br/>
		</section>
		<footer>
			<p>
				<a href="http://2014.devfest.asia"><img src="img/devfest.png" height="100" alt="Singapore DevFest.Asia 2014"/></a>
			</p>
			<p>
				JSConf.Asia 2014 Singapore is part of Asia’s<br/> first community organized web developer festival.<br/><br/>
				<a href="http://jsconf.com">JSConf around the world</a><br/><br/>
				Checkout what we did in the past:<br/><a href="http://2012.jsconf.asia" target="_blank">JSCamp.Asia 2012 in Singapore</a>
				 | <a href="http://2013.jsconf.asia" target="_blank">JSConf.Asia 2013 in Manila</a><br/><br/><br/>
				A Nerdherd Pte. Ltd. event<br/>
				<a href="terms.html">Terms &amp; Conditions</a><br/><br/>
			</p>
		</footer>
	</section>
	<nav>
		<div class="js"><a class="logo" href="http://twitter.com/jsconfasia"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 630 630">
		<g id="logo">
		  <rect id="background" x="0" y="0" width="630" height="630" fill="none" />
		  <path id="j" fill="#ffffff" d="m 165.65,526.47375 48.2125,-29.1775 C 223.16375,513.7875 231.625,527.74 251.92,527.74 c 19.45375,0 31.71875,-7.60975 31.71875,-37.21 l 0,-201.3 59.20375,0 0,202.1375 c 0,61.32 -35.94375,89.23125 -88.385,89.23125 -47.36125,0 -74.8525,-24.52875 -88.8075,-54.13" />
		  <path id="s" fill="#ffffff" d="m 375,520.13 48.20625,-27.91125 c 12.69,20.72375 29.1825,35.9475 58.36125,35.9475 24.53125,0 40.17375,-12.26475 40.17375,-29.18125 0,-20.29875 -16.06875,-27.48875 -43.135,-39.32625 l -14.7975,-6.3475 c -42.715,-18.18125 -71.05,-41.0175 -71.05,-89.2275 0,-44.40375 33.83125,-78.2375 86.695,-78.2375 37.6375,0 64.7025,13.11125 84.15375,47.36625 l -46.09625,29.60125 c -10.15,-18.1825 -21.1425,-25.37125 -38.0575,-25.37125 -17.33875,0 -28.335,10.995 -28.335,25.37125 0,17.7625 10.99625,24.9525 36.3675,35.94875 l 14.8,6.3425 c 50.325,21.56875 78.66,43.5575 78.66,93.03375 0,53.2875 -41.86625,82.465 -98.11,82.465 -54.97625,0 -90.5,-26.2175 -107.83625,-60.47375" />
		</g>
		</svg></a></div>
		<a href="#schedule">Schedule</a> &nbsp; &nbsp;
		<a href="#about">About</a> &nbsp; &nbsp;
		<a href="#sponsors">Sponsors</a> &nbsp; &nbsp;
		<a href="http://facebook.com/jsconfasia">Updates</a> &nbsp; &nbsp;
		<a href="https://eventnook.com/event/register/22634" target="_blank" class="buy">Get Tickets</a>
	</nav>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script src="js/app.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31025490-4', 'jsconf.asia');
	  ga('send', 'pageview');

	</script>
<script type="text/javascript">
(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
})();
window._fbq = window._fbq || [];
$("a[href='https://eventnook.com/event/register/22634']").click(function(){  window._fbq.push(['track', '6021415110904', {'value':'1','currency':'USD'}]); })

</script>
</body>
</html>
