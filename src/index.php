
<?php include 'header.php'; ?>

<div style="margin-bottom:100px;">
    <div id="banner">
		<ul class="bjqs">
        <li>
			<img src="images/homepage/1.jpg" title="Photo by Tony Ferguson" />          
		</li>
        <li>
			<img src="images/homepage/2.jpg" title="Photo by Tony Ferguson" />          
		</li>
        <li>
			<img src="images/homepage/3.jpg" title="Photo by Tony Ferguson" />          
		</li>      
       </ul>
    </div>

    <p>
        Sheila Staubus was born in Des Moines, Iowa. She has resided in Duluth, Minnesota for over twenty years.
    </p>

    <p>
        Her fascination with color, line and form began in childhood, but her first class in ceramics was 
        at the Duluth Art Institute in 2001. She was hooked! She continued with a multitude of classes and workshops,
        "library learning", and practice, practice, practice to develop her skills. (The shard pile grew.)
    </p>

    <p>
        Sheila "plays with clay" in her home studio and at the Duluth Art Institute. She is an instructor at the
        ceramics studio. "Teaching others forces me to think about how and why
        I do things a certain way, and what new (or old) techniques I want to try. I also meet many wonderful
        and creative people. It's great fun!"
    </p>

    <p>
        On the non-ceramics side of things, Sheila has worked in daycare, retail sales and the public school 
        system, while raising her two daughters.
    </p>
    <p>
        Sheila's Marvelous Stuff is on display at several local festivals each year.
    </p>

</div>


<script>
	
	$(document).ready(function($) {
	$('#banner').bjqs({
		'height' : 688,
		'width' : 458,
		'animtype' : 'fade',
		'responsive' : true,
		'showcontrols' : false, 
		'centercontrols' : false,
		'nexttext' : 'Next', 
		'prevtext' : 'Prev', 
		'showmarkers' : false,
		'centermarkers' : false,
		'usecaptions' : true
	});
});
</script>


<?php include 'footer.php'; ?>