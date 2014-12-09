<?php 

require 'inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
$config->titleTag = THIS_PAGE; #Fills <title> tag. If left empty will fallback to $config->titleTag in config_inc.php  
$config->nav1 = $config->nav1; 
/*
$config->metaDescription = 'Web Database ITC281 class website.'; #Fills <meta> tags.
$config->metaKeywords = 'SCCC,Seattle Central,ITC281,database,mysql,php';
$config->metaRobots = 'no index, no follow';
$config->loadhead = ''; #load page specific JS
$config->banner = ''; #goes inside header
$config->copyright = ''; #goes inside footer
$config->sidebar1 = ''; #goes inside left side of page
$config->sidebar2 = ''; #goes inside right side of page
$config->nav1["page.php"] = "New Page!"; #add a new page to end of nav1 (viewable this page only)!!
$config->nav1 = array("page.php"=>"New Page!") + $config->nav1; #add a new page to beginning of nav1 (viewable this page only)!!
*/

# END CONFIG AREA ---------------------------------------------------------- 


get_header(); #defaults to theme header or header_inc.php
// index.php 
?>
<div id="contentwrap"> 

<div id="content">

<h2>Recommended Resources for Numerology Report Interpretation</h2>

<p>Here are some resources to help you get started in interpreting your numerology report:</p>
<ul>
	<li><a href="http://www.amazon.com/Numerology-Made-Easy-Introduction-Chaldean/dp/1465368760">Numerology Made Easy</a> by William Mykian</li>
	<li><a href="http://www.rahmgroup.org/Chaldean%20Numerology_July%2018%20V3%20.pdf">Professional Numerology</a> by Joanne Justis & William Mykian</li>
	<li><a href="http://www.amazon.com/Numerology-Divine-Triangle-Faith-Javane/dp/0914918109">Numerology and the Divine Triangle</a> by Faith Javane and Dusty Bunker</li>
	<li><a href="http://www.thereadingroom101.com/">An Interpretation of the Meanings of Individual Letters</a></li>
</ul>

</ br>
<p>
	When you selected this page, you "drew" the letter:
</p>
<?php
//benchmarkNote("Test from index file!");
$config->benchNote = "Test From Index File!";

//echo $config->benchNote;die;

//dumpDie($config);
?>

<?php

	// Name: Thomas Bonin
	
	
	$letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Z');
	$letter = $letters[array_rand($letters)]; 
	
	echo '<p class="three"><font size="7" color="red">' . $letter. '</font></p>';
	echo '<p class="three">According to <a href="http://www.thereadingroom101.com/">Chaldean Numerology for Beginners</a> by Heather Alicia Lagan, here is what ' . $letter. ' means: </p>';
	echo'<p class="three">';
	echo '<em>' . getLetterInfo($letter) . '</em>';
	echo "</p>"
?>
<p>
	Refresh this page to "draw" an new number and its Meaning.
</p>

<?php get_footer(); #defaults to theme header or footer_inc.php; ?>
 

<?php

function getLetterInfo($letter){
	if($letter == 'A'){
		return "<b><b>Meaning</b></b>: power, force, pure beginnings - in ancient symbolism, the A is the Ox who plows the field in preparation for seeding, therefore the A relates to new beginnings, fertility, strength, growth and survival. Translated into a person, the A is ambitious, focused, driven, unique and determined. This is a compelling energy that will not usually take no for an answer. The A needs to learn how to interact with others successfully -- it is, after all, the first letter and knows no others. The force of the A/1 is a double one as both are the starter energies for two different scales: alpha and numeric. A few words which illustrate the A energy are attain, active, achieve, aggressive and authority.";
	}
	else if($letter =='B'){
		return "<b><b>Meaning</b></b>: The B is contained, but bursting with ideas, plans and substance - this person can be charming, kind, compassionate and domestic but is also dependent on the actions of its mate or counterpart: if that aspect is thrown out of whack, or off balance, the B can become quite belligerent and bellow like a wounded bull. The B needs a mate: the two loops of the letter itself indicate the Balance it represents: ideally between two people. This is also evident in the words Balance, Breasts, Boots and Bigamy.";
	}
	else if($letter == 'C'){
		return "<b>Meaning</b>: The C is the open mouth - also linked to the camel, this letter energy refers to what happens when one opens its mouth - have you ever heard a camel say it has no intention of moving? It will do so in no uncertain (and loud!) terms. While not necessarily loud, the C person is all about communication, whether it be creative, dramatic, instructive or eductional. The C person will be a talented talker, but it can sometimes say too much and inadvertently offend another, without even realizing it - its intensions are to offer honesty so there is generally no malice behind such occasions. The C is energetic, determined, dedicated and usually in control -- it appreciates the arts, beautiful things and people and does take pride in its appearance and conducts itself with grace and dignity. Some words that hold the C energy are call, contact, communication and conversation.";
	}
	else if($letter == 'D'){
		return "<b>Meaning</b>: The D is a door: it will either be opened or it will remain closed. Knowledge versus ignorance is the message of the D - open up to other ways of thinking and relating, or remain shut in and unenlightened. Due to the foundational aspect of the letter, a D person will also be responsible, determined, deep, dependable, methodical and yes, stubborn. Sometimes the greatest gift a D can give themselves is the chance to lighten up, have some fun and consider that there is more to the Universe than meets the eye. The D person is generally easy-going and fair...just don't make them mad: this letter energy can slam their door shut in your face and they will not open it again...for a while, at least. Some examples of the open or closed, or two-sided D energy is found in the words door, dead, double, disclose and discover.";
	}
	else if($letter == 'E'){
		return "<b>Meaning</b>: The E is the most outgoing, energetic and enthusiastic letter energy in the alphabet - it is sheer energy. Remember Einstein? E=mc2? E is ENERGY! It reaches forward with its brain, heart and feet (the three 'limbs' pointing forward) and does not hesitate to engage the unknown. The E person is as open as one can be to new advances, ideas, lifestyles and artistic avenues and is known to be impulsive, daring and sometimes excessive - the 5 can change jobs, spouses, friends, homes and directions in a heartbeat and as such, usually can point to a history of changes in their lifepath. The E person will always have something going on in their lives: they also need to be wary of excess in sensory areas (such as drugs and alcohol or intimate partners). Depending on the placement of this letter, it can govern the name holder (as a Cornerstone) or indicate periods of time when the need for freedom is strong. Some words that reflect the E energy include earthquake, extravagant, evil, endless, extreme and euphoria. Too many E energies can result in excesses that are dangerous, like addictions, obsessions, and bungee-jumping. Or rock climbing without a safety rope...that kind of thing.";
	}
	else if($letter == 'F'){
		return "<b>Meaning</b>: Like the P, the F concerns the mouth, brain or both and although it is a 'fixed' symbol (it is missing its 'legs', or lower extension), its energy is also forward moving and free-flowing. As such, its brain is always working - it considers new approaches etc, but can be hesitant to pursue them but will not hesitate to speak about them: highly intellectual, the F does tend to speak rather than act, which gifts this letter energy with a sharp and snappy tongue: the F person will manifest as an intelligent, funny, talkative, studious, reliable and stable energy who would make a fine father figure - one who would facilitate family fortunes with a firm and fair hand. And no one ever swears, so I can't even mention that other word. ";
	}
	else if($letter == 'G'){
		return "<b>Meaning</b>: An ancient connection here is to the camel: it refers to the not-immediately-apparent in much the same manner that a camel, being ornery and stubborn, is not immediately viewed as a great method of transportation. The G is an inward turning letter, which means that much is hidden or secret about the holder. Inner thoughts, secret lifestyles and even interior body functions can be indicated by the G (gastrointestinal, giggle, gut), so the G person can be secretive, protective and withholding: presenting a gregarious, highly social and fun-loving energy to others while holding their true self under guard. These are gentle and sensitive souls who can open like a flower once trust is gained. Some words which point to the inner or hidden essence of the G are gag, galvanize, garage and gift.";
	}
	else if($letter == 'H'){
		return "<b>Meaning</b>: It doesn't take too much imagination to see the H as a ladder - one that leads up to Heaven or down to Hell - and that is its essential <b>Meaning</b>. An H person will have to choose, at some point in their lives, whether to go down the ladder to the base essence of the material and sensory world or to climb the ladder to the esoteric essence of the spiritual and philosophic one. In other words, the bottom of the ladder rests in the basement of existence, where addictions and excessive negatives abound and like the E, the H will have to decide if that is where they want to live. The H persons will be sensitive freedom seekers who are highly artistic and sometimes dedicated escape artists (Houdini) as well: hence the trip down the ladder. A 'normal' energy H is friendly, sympathetic, graceful, funny and usually quite shy despite appearing socially comfortable. Many Hs will eventually find their way up the rungs and will become helpful, hopeful and holistic healers. Some H words which indicate different levels or positions on the 'ladder' are height, high, hang, half and happy.";
	}
	else if($letter == 'I'){
		return "<b>Meaning</b>: I is the connecting line between the Power or Source and man: it is the sixth sense or intuition (even the word intuition has 3 x I energies and one is the Cornerstone). The I person will be very aware of their intuition and will, ideally, listen to this sixth sense on a daily basis. The I is also the ego, the id and the sense of self, therefore an I that is stuck in the self can be arrogant, self-centered, prideful and greedy. Intellect, intuition, insight, imagination and instinct are some words that illustrate the inner aspect of this letter energy.";
	}
	else if($letter == 'J'){
		return "<b>Meaning</b>: The ego is of import here - there is a strong sense of self along with a leaning into the past, which is indicated by the hook to the left. As a person, the J is efficient, organized, critical, (can appear) unemotional, tends to remember past offenses and is often seen as distant and aloof....which is really just a protective shield: the J is actually quite vulnerable, but they cover this up...to the J, logic and facts hold the most import: emotions do not, so they are rarely displayed. Some words that contain this energy are judge, jury and justice: the J tends to looks to the past for the answers...or the events of the past can drive many areas of the current life. This can be very problematic for obvious reasons.";
	}
	else if($letter == 'K'){
		return "<b>Meaning</b>: The K is open in thought and is highly attracted to new concepts or ways of doing or approaching things and is also willing to try new ways of living - it not only welcomes the new, it is also willing to live the new. As a person, the K is wonderfully receptive and can be involved in very unusual relationships, jobs or artistic pursuits. This energy is sometimes wild and unpredictable: it is, after all, the kaleidoscope of energies and the seeker of knowledge...this is shown by ancient text as the upper reach of the letter itself being viewed as a hand, palm up, reaching out to the Source in search of divine wisdom. The K person is open, friendly, engaging and adventurous and usually has many friends and connections. Some K words include kinetic, knowledge, kite and knit...all hold different kinds of directions and elements.";
	}
	else if($letter == 'L'){
		return "<b>Meaning</b>: Ancient text connects the L to an animal prod - something to get the beast moving. This letter is moving forward - often to assist without expectation of reward. It is the desire to help or to make easier for others and can often lead the L person into situations where they are either being taken advantage of or giving too much to the wrong person, as in unhealthy love relationships. In any event, it represents moving forward (the bottom leg extends into the future) for whatever reason. Some words containing the L energy are love, lust, liberation and life. All require being willing to move forward or to engage in activity that assists or pleases another in some way. ";
	}
	else if($letter == 'M'){
		return "<b>Meaning</b>: The M is the only letter in the alphabet that is pronounced with the lips together and the mouth closed: it refers to silence and muteness. An M person can find it hard to express deep emotions (and could be compared to the Mountain, which appears solid and grounded but which can also be the home of an active, if unseen, volcano). The M is logical, quiet, reliable, effective, efficient and in control - until it erupts. The M person will appear very controlled and prefers order and routine in their life. An open (positive energy) M will display the exact opposite attributes: the mouth will serve in some capacity (usually in the career, through singing, writing, teaching or even motivational speaking) and few will realize how private the M in question actually is. Some M words that hint at a sub-surface or deep and unseen worlds are mystery, marine, marsh, mother (the development in the womb), and mine (as in gold or coal).";
	}
	else if($letter == 'N'){
		return "<b>Meaning</b>: The original symbol for the N was a fish - and that is what this letter means: the food eaten for nourishment and the food taken in for spiritual balance and growth. The N is one of the most balanced letters in that it can be turned on its head and retain its shape. For the most part, the N person remains calm and collected even in the most chaotic times...and is fair, easy-going and friendly. This letter energy flows through life: it does not over-react or throw histrionics - it seems to adapt to whatever comes its way with grace and adaptability. Some words that contain the N energy are normal, natural and neutral.";
	}
	else if($letter == 'O'){
		return "<b>Meaning</b>: This is the most complicated and extensive letter energy in the alphabet. It is at once the ending and the beginning, the inside and the outside, the opening and the closing: it increases and it decreases and holds all and nothing. This is a letter of opposites, yet of togetherness. Ancient text sees this energy as the Eye of Ayin, or Horus - the all-seeing eye. As such, its energy is omnipotent. The O person will be endlessly curious, engaging, investigative, non-judgmental and open to any and all subjects, from the mundane to the occult. Words that suggest the vast expanse of the O include ocean, orbit, omnipotence and opinions.";
	}
	else if($letter == 'P'){
		return "<b>Meaning</b>: This letter energy is centered in the head or brain as the enclosed upper bubble suggests: it is always thinking and rarely speaking. The P person will appear quieter than normal or will speak without revealing too much information about themselves or what they are feeling/thinking. In control and usually in positions of power, these folks mask their inner 'stuff' and are good leaders, goal-oriented and focused. When the P builds up too much internal pressure, it becomes pensive and potent: explosions are possible from time to time. Words that point to the essence of the thoughtful P include philosophy, psychic and ponder. And psychotic -- a chart that overflows with P energy can become so filled with fleeting and flickering thoughts that it can literally drive itself crazy.";
	}
	else if($letter == 'Q'){
		return "<b>Meaning</b>: The Q points to the back of the head - the little de-tail tickles the cerebellum. The Q person is relatively rare and is highly intelligent, eccentric and very talented in a creative/dramatic way. A few words which describe the Q energy are quick, quirky and quixotic.";
	}
	else if($letter == 'R'){
		return "<b>Meaning</b>: the R is known as the 'testing' letter and brings all manner of trials and tribulations to its holder, often within close relationships. It is also a karmic energy - so once the 'debts' are paid, the R is also the energy of second chances, or 'Rebirth'. The R person is a strong thinker who will recognize patterns and negative events as lessons to absorb and learn from: this energy is sometimes held back by situations or circumstance, but it is progressive: the R usually keeps going until it finds relief, respite and release. At which time, it is often reborn, resuscitated and reincarnated or resurrected. The R will often experience difficulties in personal and intimate relationships, however, it will also often find its soulmate later in life after the intimacy roadblocks (usually placed there in youth) have been recognized and removed. Some R words include reach, realize, revive and all of the ones mentioned above.";
	}
	else if($letter == 'S'){
		return "<b>Meaning</b>: The S is one scintillating energy! Hardly surprising, then, to find that this letter rules the SenSeS. It is open to the future and also to the past: it remembers lessons learned, but its open nature often winds up having to go through them again - for example, someone with a strong S presence who is married may find affairs hard to resist and this is directly connected to its link to those same 'senses' and the titillation affairs can provide. It is, appropriately enough, connected in ancient speak to the snake, (Kundalini) or the spine...and it moves in whichever direction is required in order to get where it is going. The S person can be very attractive, both to people in general and also to the opposite sex. It is multi-talented: creative, adaptable, charming and determined to reach its goals...even if that means being sneaky, slinky and sly or sensual, slick and seductive. The S is the sexiest letter energy in the alphabet due to its core connection to the senses.";
	}
	else if($letter == 'T'){
		return "<b>Meaning</b>: The T is a also the mathematical plus sign (+) and adds more to any energy that comes before it: this can make a bad thing worse or a good thing better, depending upon its placement within a word. If it is the Cornerstone, <b>Meaning</b> there is no focal point prior to the T, this can present a bit of a problem, as this person will be vulnerable to feeling confused about their direction in life as the T is always hungry for more: more information, more activity, more experiences...and its interests can be spread out over too many projects or people to afford individual attention to any. In other words, the T can leave unfinished business in a variety of areas - there are just too many attractive avenues to explore and the T is curious about them all: it will have many interests, likely quite a large social arena and often quite a few paramours at some point in their lives...they will need to choose points of interests and stick to them in order to find solid ground and routine. A few words that point out the 'adding to' aspect of the T include tax, time, total and tide.";
	}
	else if($letter == 'U'){
		return "<b>Meaning</b>: The U rests on a rounded base which gives it an unstable foundation, especially when dealing with emotions: anything that ruffles the 'feeling' feathers of the U can cause tippage, resulting in all manner of negative or unsteady emotions. Since the U has two avenues (the 'arms') available to it, it is able to disguise its true emotions and can appear calm, cool and collected; even regal while dealing with inner angst. The horseshoe held in this letter often translates into 'lucky breaks' for the U...and the U-turn symbol indicates the potential for complete reversals or changes in direction in the life of the U. The U person is loving, loyal, domestic and reliable...but any disloyalty on the part of others will tip their cup.This unsteady quality is reflected in any words beginning with 'un' (which is essentially, 'no' or 'not'). Additional words which indicate the different elements of the U include Universe, Umbilical, Unique and Upset.";
	}
	else if($letter == 'V'){
		return "<b>Meaning</b>: If two straight lines show two different people, then the joining of these two 'lines' would form the V and indicate a victorious union. The V person has great respect for family and the preciousness of all life: they therefore make great doctors, veterinarians and health care workers in general. The V sometimes struggles for balance (it rests on a pointed base) in its search for divine guidance and success in this material world. The V energy is kind, straight forward, honest, ambitious and loving. A rather tender <b>Meaning</b> attached to this letter energy is that it holds all life sacred. Some words that indicate the energy of the striving V are vim & vigor, victorious, validation, valour and veteran. And, INVINCEABLE...the V does not give up easily. ";
	}
	else if($letter == 'W'){
		return "<b>Meaning</b>: The W and the M are closely related, yet vastly different: while they are both connected to water and the ups and downs of life, the M is closed and protective where the W is open and receptive. The W person would make a good mate as it is positive, generous, open, sensitive and loyal: it commonly has lifelong friends and is the one letter energy that is most likely to remain married for extended periods -- through those ups and downs. The W person is a natural mediator and works well with larger groups of people and as such, they make wonderful bosses and are easy-going people in general. Some words that suggest the wavy energy of the W are warm, wacky, weird, weather, wonderful, wistful and whimsical. And Woo-Hoo! Unfortunately, W energies are also often called upon to deal with physical and emotionally extreme situations, which can knock other energies to their knees. But the even-natured W takes all in its stride and still can laugh at life.";
	}
	else if($letter == 'X'){
		return "<b>Meaning</b>: The X is another multi-dimensional letter energy - it  is vulnerable to all experiences as it is open on all sides and retains its shape or essence no matter which way it is turned. While the X might be open to these experiences, this is also a warning/beware sign, the wrong way sign, the multiplication sign, the you-are-here sign...and this letter can also be found in the XX and XY signs of our very creation. As such, it also relates to procreation, seX and the survival of the species. The X person, also rare, will entertain highly unusual ideas about life, existence and lifestyles and will be open to almost any suggestion or new adventure. There is an unknown factor to the X - as in the X-files, X-rays and X signatures.";
	}
	else if($letter == 'Y'){
		return "<b>Meaning</b>: The Y is a fork in the road and shows the need for a different direction: either by choice or by force. It suggests taking the easy route or taking a risk...its energy sometimes changes the life based on the road taken. Also connected to the dowsing rod, the Y person often has a built in knowledge, or strong intuitive sense that will guide them when making decisions in life and is just as determined as any other energy, however, this can also manifest as someone who is confused, indecisive, unstable and who sees changing circumstances regularly...which can add to the confusion. The dual directions are evident in the words yesterday (today), yes (no) and yo (yo - it has to swing back!) ";
	}
	else if($letter == 'Z'){
		return "<b>Meaning</b>: Stretch the legs of this letter out and it looks similar to a lightning bolt - and that is the power of the words this energy emits. The Z person, another rare one, will be extremely intellectual and have the ability to use words to zap! and zing! and those words can be used to hurt or heal - that is the choice for the ultra-literary Z. Like electricity, the Z person has a lot of zest and zeal for life, but needs to zone out from time to time...the typical Z needs its  zzzzzzzzzzzzzzzz...s.";
	}
	else {
		return "Something's not working right. Sorry.";
	}

}
	
?>
	

