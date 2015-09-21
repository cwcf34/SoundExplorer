<script>
//When the load button is clicked loads the next 5 country artists.
$(document).ready(function(){
  $("#load").click(function(){
    $("#content2").load("Country2.php");
  });
});
</script>

<h1>Top Country Playlist</h1>

<ol>
	<li>Tim McGraw: Shotgun Rider</li>
	<iframe width="560" height="315" src="//www.youtube.com/embed/BkpuLMsDn48" frameborder="0" allowfullscreen></iframe>
	<li>Carrie Underwood: Something In The Water</li>
	<img src="Images/Underwood.jpg" alt="Underwood">
	<li>Maddie & Tae: Girl In A Country Song</li>
	<img src="Images/Maddie.jpg" alt="Maddie">
	<li>Braid Paisley: Moonshine In The Trunk</li>
	<img src="Images/Paisley.jpg" alt="Paisley">
	<li>Keith Urban: Somewhere In My Car</li>
	<img src="Images/Urban.jpg" alt="Urban">
	<li id="button"><button id="load">Load Next Five</button></li>
</ol>

<div id="content2" class="content">
</div>