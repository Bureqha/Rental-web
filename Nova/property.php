<!--property section design-->
           <section class="property.php" id="listing">
		    	<h2 class="heading">Latest <span style="color: #0ef;">Property</span></h2>
		  <br>
		  <br>
		  <br>
		  <br>
           	  <div class="box-container">
           	  	<div class="box">
           	  		<div class="thumb">
           	  			<p class="total-images"><i class="sairnta u ka kobnyhy"></i><span>4</span></p>
           	  			<p class="type"><span>house</span><span>sale</span></p>
           	  			<form action="" method="post">
           	  				<button type="submit" name="save" class="heart"></button>
           	  			</form>
           	  			<img src="jig.png" alt="">
           	  		</div>
           	  		<h3 class="name">modern flats and apartment</h3>
           	  		<p class="location"><img src="loc.pnng"></img> <span>idacada, hargeysa, somaliland -101</span></p>
           	  		<div class="flex">
           	  			<p><img src="bed.png"></img><span>3</span> </p>
           	  			<p><img src="sofa.png"></img><span>2</span> </p>
           	  			<p><img src="kitchen.png"></img><span>730sqft</span> </p>
           	  		</div>
           	  	<a href="view-propert" class="btn">view property </a>
           	  	</div>
           	  

<!--2-->
           	  	<div class="box">
           	  		<div class="thumb">
           	  			<p class="total-images"><i class="af2.jpeg"></i><span>4</span></p>
           	  			<p class="type"><span>flat</span><span>sale</span></p>
           	  			<form action="" method="post">
           	  				<button type="submit" name="save" class="heart"></button>
           	  			</form>
           	  			<img src="af1.jpeg" alt="">
           	  		</div>
           	  		<h3 class="name">modern flats and apartment</h3>
           	  		<p class="location"><i class="wh.png"></i> <span>idacada, hargeysa, somaliland -101</span></p>
           	  		<div class="flex">
           	  			<p><img src="bed.png"></img><span>3</span> </p>
           	  			<p><img src="sofa.png"></img><span>2</span> </p>
           	  			<p><img src="kitchen.png"></img><span>730sqft</span> </p>
           	  		</div>
           	  	<a href="view-propert" class="btn">view property </a>
           	  	</div>
           	  
<!--3-->

           	  	<div class="box">
           	  		<div class="thumb">
           	  			<p class="total-images"><i class="af3.jpg"></i><span>4</span></p>
           	  			<p class="type"><span>flat</span><span>sale</span></p>
           	  			<form action="" method="post">
           	  				<button type="submit" name="save" class="heart"></button>
           	  			</form>
           	  			<img src="af3.jpg" alt="">
           	  		</div>
           	  		<h3 class="name">modern flats and apartment</h3>
           	  		<p class="location"><i class="wh.png"></i> <span>idacada, hargeysa, somaliland -101</span></p>
           	  		<div class="flex">
           	  			<p><img src="wh.png"></img><span>3</span> </p>
           	  			<p><img src="wh.png"></img><span>2</span> </p>
           	  			<p><img src="wh.png"></img><span>730sqft</span> </p>
           	  		</div>
           	  	<a href="#" class="btn-view">view property </a>
           	  	</div>
           	  </div>
           </section>


    <!--Css-->

    .listing .box-container{
	display: grid;
	grid-template-columns: repeat(auto-fit, 35rem);
	gap:2rem ;
	justify-content: center;
	align-items: flex-start;
}

.listing .box-container .box{
	background-color: var(--bg-color);
	box-shadow: 0 0 10px #0ef;
	padding: 2rem;
}

.listing .box-container .box .thumb{
	position: relative;
	height: 20rem;
}

.listing .box-container .box .thumb img{
	height: 100%;
	width: 100%;
}