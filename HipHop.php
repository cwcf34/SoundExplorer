<script>
//When the load button is clicked loads the next 5 Hip Hop Artists.
$(document).ready(function(){
  $("#load").click(function(){
    $("#content2").load("HipHop2.php");
  });
});
</script>

<h1>Top Hip-Hop Playlist</h1>

<ol>
	<li>Beyonce: 7/11</li>
	<iframe width="560" height="315" src="//www.youtube.com/embed/k4YRWT_Aldo" frameborder="0" allowfullscreen></iframe>
	<li>Big Sean: I Don't F**k With You</li>
	<img src="Images/Sean.jpg" alt="Underwood">
	<li>Drake: 0 To 100</li>
	<img src="Images/Drake.jpg" alt="Maddie">
	<li>Rae Sremmurd: No Type</li>
	<img src="Images/Sremmurd.jpg" alt="Paisley">
	<li>Jeremih: Don't Tell 'Em</li>
	<img src="Images/Jeremih.jpg" alt="Urban">
	<li id="button"><button id="load">Load Next Five</button></li>
</ol>

<div id="content2" class="content">
</div>