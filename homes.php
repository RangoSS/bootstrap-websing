<?php

 include "hedds.php";
?>
<link rel="stylesheet" type="text/css" href="css/footStyle.css">
<link rel="stylesheet" type="text/css" href="css/tabsd.css">

<style>
.mySlides {display:none;}

 .morecontent span {
    display: none;
}
.morelink {
    display: block;
}
</style>
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
<link rel="stylesheet" href="css/w3schhols.css">

	
	<div class="container" >
		<div class="row">
			<div class="col-sm-3">
				<h1>what can we do for you</h1>
				<p class="more">Architecture - the ]project-open[ blueprints 
Data Model Cookbook - guide to writing your own detailed reports to extract data from the ]project-open[ database 
Data-Model - the object-oriented database structure of ]project-open[
Development Methodology - advice and a practical guide on how to go about making additions and extending ]project-open[ by yourself
Development Guide - ]project-open[ 101
[Package Code Example] - All of the source code for the "Expense" package with commentary and mark-up
OpenACS High-level Tutorial - An architectural explanation of OpenACS, the platform program on which ]project-open[ is built 
[Extreme Programming] - Using XP practices to develop ]project-open[</p>
			</div>
	<div class="col-sm-6">
		<h2 class="w3-center">MUgumo DevHub</h2>

<div class="w3-content w3-display-container" >
  <img class="mySlides" src="images/m1.png" style="width:100%">
  <img class="mySlides" src="images/m3.jpg" style="width:100%">
  <img class="mySlides" src="images/m4.jpg" style="width:100%">
  <img class="mySlides" src="images/m5.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
	</div>
	<div class="col-sm-3">
    
		<h1>A story to share</h1>
		<p class="more">As many other students, at university I used mostly Java or .Net. But my first job I got thanks to PHP, which I worked with during my free time. We were creating online book store on 1C-Bitrix. My salary was something like 10k roubles for a part-time job. I could work from home and at any convenient time; the main requirement was to do everything well and in due course. But there were some disadvantages as well: I had nobody to teach me. Nobody could check my code, explain how to implement some feature or what book to read.

After a year working with PHP, I was fed up with it. I wanted something more ‘serious’ (as I thought at that moment), so I combined my work with learning Ruby. I also had some notion about Java SE/EE, so I set a goal to find a Ruby or Java job by the time I’d have finished my third year.

As it turned out, no Java company wanted to have a trainee/Junior developer that summer, they all advised to wait till autumn. But I was absolutely crazy about working in a ‘serious’ company and wanted to be educated by professionals so much, that I started as a trainee in Evrone.com. So that’s how it happened and since then I never came back to Java :)</p>
	</div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <h3></h3>
         <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">what we do</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Projecs</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Share holders</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Offer</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      New Zealand mockumentary horror comedy film written, directed by, and starring Jemaine Clement and Taika Waititi. The screenplay concerns a group of vampires who live together in Wellington. ... The film earned $6.9 million on a $1.6 million budget
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      A project developer has many roles and responsibilities and works with a team to bring an idea from concept to completed construction. ... The project developer is tasked with completing the project in a timely matter and on budget.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      The retail redevelopments are a primary component of the strategy to unlock value in the retail portfolio. The Company has a pipeline of R840.9 million of retail redevelopments. These projects are combined forecast to achieve an initial yield of 9.5%. The eight retail redevelopments detailed below showcase SA Corporate’s retail development skill which is essential to 
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                      In addition to benefits required by law, other benefits are provided by companies because they feel socially responsible to their employees and opt to offer them more than is required by law.Depending on the company
                    </div>
                  </div>
                
                </div>
                <div class="col-sm-6">
                  <marquee width="100%" direction="up" height="100px" scrollamount="2">
                 We often leave easter eggs and such in the games, but sometimes we do more. Sometimes we leave messages in the final products. Sometimes a warning, other times a joke, and other times a series of well publicized rants that were never meant to ever be seen. I figured I'd share a few of them here for anyone like me interested in such things.
                 </marquee>
                 <marquee width="100%" direction="down" height="100px" scrollamount="2">
                Why not try doing something constructive with your Amiga, like writing a game for example ??? 
                It may be a lot more complex than protection removal and perhaps a little above your 
                understanding but with a little patience, a lot of practice and months of hard work you may 
                 create something of which you can be proud and that people will admire you for
                </marquee>
                </div>
              </div>
    </div>
    <h1><center>Mugumo Foundation</center></h1>
</div>


	</body>
  <div class="">
    <?php include "foot.php"; ?>
  </div>
</html>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
///////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 500;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

</script>
<script type="text/javascript" src="js/loginScript.js"></script>



