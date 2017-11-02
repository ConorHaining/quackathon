<!DOCTYPE html>
<html>
<head>
	<title>Quackathon | Dundee University's Computing Society</title>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }} ">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
</head>
<body>
	@if ($errors->any())
	    <div class="banner banner-error">
	    	<strong>There was some issues with your form!</strong>
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	@if( Session::has('success') )
	    <div class="banner">
			<strong>{{ Session::get('success') }}</strong>
		</div>
	@endif

	<div class="panel panel-1">
		<img src="logo.png" alt="DUCS">
		<h1>Quackathon</h1>
		<h2>Queen Mother Building, Dundee</h2>
		<h2>November 11th - 12th 2017</h2>
		<a class="btn btn-large btn-register" href="#Register">Register</a>	
	</div>

	<div class="panel panel-2">
		<h1>About</h1>
		<p>
			The Quackathon was first stated at Dundee University in 2016 and is hosted in the award winning Queen Mother Building. We are open to all students across the country to join us for our second quackathon! It is organized by students for students and is an all-inclusive event for every person. 
		</p>
		<p>
			We provide the power, wi-fi, pizza and stickers over the full <strong>24 hour event</strong> to keep you focused on the hack at hand which are all generously provided by our event sponsors who will be announced very soon.
		</p>
		<p>
			All you will need to bring are yourself, a laptop & any cables you may need. You may want to wear something comfortable as it'll be a full 24 hour event and you might want fresh clothes for the presentations!
		</p>
		<p>
			First hackathon? No problem! All are welcome regardless of ability, use this as an opportunity to learn something new or build on your existing knowledge to create something out of this world!
		</p>
		<p></p>
	</div>
	
	<div class="panel panel-3">
		<h1>Sponsors</h1>
		<div class="row">
			<img src="ducs.png" alt="Dundee University Computing Society">
			<img src="soc.png" alt="Computing at Dundee University">
			<span>Dundee University Computing Society in collaboration with Computing at the University of Dundee</span>
		</div>

		<h2>Gold Sponsors</h2>
		<div class="row gold">
			<a href="https://www.edesix.com/"><img src="Edesix-Primary-Logo-DarkBG.png" alt="Edesix"></a>
		</div>

		<h2>Silver Sponsors</h2>
		<div class="row silver">
			<a href="https://www.coopersoftware.co.uk/"><img src="coopersoftware.jpg" alt="Cooper Software"></a>
		</div>
		<div class="row silver">
			<a href="https://www.wrld3d.com/"><img src="WRLD_Logo_white.png" alt="WRLD 3D"></a>
		</div>
	</div>

	<div class="panel panel-4">
		<h1>Location</h1>
		<iframe
		  frameborder="0" height="500" style="border:0"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDYRtDqeOh-S3Fv2FV_Vdc2P_HamgIwRb4
		    &q=Queen+Mother+Building,Dundee&zoom=15" allowfullscreen>
		</iframe>
	</div>


	<div class="panel panel-5 " id="Register">
		<h1>Register</h1>
		
		@if ( (\Carbon\Carbon::create('2017', '10', '16', '20', '00', '00', 'Europe/London')->lte(\Carbon\Carbon::now()) && count($model) <= 40) || \Carbon\Carbon::create('2017', '10', '18', '20', '00', '00', 'Europe/London')->lte(\Carbon\Carbon::now()) && count($model) <= 80)
		<form action="/" method="POST">
			{{ csrf_field() }}

			<div class="row">
				<label for="forename">First Name</label>
				<input type="text" name="forename">
			</div>

			<div class="row">
				<label for="surname">Last Name</label>
				<input type="text" name="surname">
			</div>

			<div class="row">
				<label for="email">Email</label>
				<input type="email" name="email">
			</div>

			<div class="row">
				<label for="university">University / College</label>
				<select name="university">
					<option value="Ayrshire College">Ayrshire College</option>
					<option value="Borders College">Borders College</option>
					<option value="City of Glasgow College">City of Glasgow College</option>
					<option value="Dumfries and Galloway College">Dumfries and Galloway College</option>
					<option value="Dundee and Angus College">Dundee and Angus College</option>
					<option value="Edinburgh College">Edinburgh College</option>
					<option value="Edinburgh Napier University">Edinburgh Napier University</option>
					<option value="Fife College">Fife College</option>
					<option value="Forth Valley College">Forth Valley College</option>
					<option value="Glasgow Caledonian University">Glasgow Caledonian University</option>
					<option value="Glasgow Clyde College">Glasgow Clyde College</option>
					<option value="Glasgow Kelvin College">Glasgow Kelvin College</option>
					<option value="Glasgow School of Art">Glasgow School of Art</option>
					<option value="Heriot-Watt University">Heriot-Watt University</option>
					<option value="Leith School of Art">Leith School of Art</option>
					<option value="New College Lanarkshire">New College Lanarkshire</option>
					<option value="Newbattle Abbey College">Newbattle Abbey College</option>
					<option value="North East Scotland College">North East Scotland College</option>
					<option value="Queen Margaret University">Queen Margaret University</option>
					<option value="Royal Conservatoire of Scotland">Royal Conservatoire of Scotland</option>
					<option value="Scotland's Rural College (SRUC)">Scotland's Rural College (SRUC)</option>
					<option value="South Lanarkshire College">South Lanarkshire College</option>
					<option value="The Robert Gordon University">The Robert Gordon University</option>
					<option value="University of Aberdeen">University of Aberdeen</option>
					<option value="University of Abertay Dundee">University of Abertay Dundee</option>
					<option selected value="University of Dundee">University of Dundee</option>
					<option value="University of Edinburgh">University of Edinburgh</option>
					<option value="University of Glasgow">University of Glasgow</option>
					<option value="University of St Andrews">University of St Andrews</option>
					<option value="University of Stirling">University of Stirling</option>
					<option value="University of Strathclyde">University of Strathclyde</option>
					<option value="University of the Highlands and Islands">University of the Highlands and Islands</option>
					<option value="University of the West of Scotland">University of the West of Scotland</option>
					<option value="West College Scotland">West College Scotland</option>
					<option value="West Lothian College">West Lothian College</option>
				</select>
			</div>
			
			<div class="row">
				<label for="tshirt">T-Shirt Size</label>
				<select name="tshirt">
					<option value="s">S</option>
					<option value="m">M</option>
					<option value="l">L</option>
					<option value="xl">XL</option>
				</select>
			</div>

			<div class="row">
				<label for="lunch">Lunch Preference</label>
				<select name="lunch">
					<option value="plain">Plain</option>
					<option value="veg">Veg</option>
					<option value="meat">Meat</option>
				</select>
			</div>

			<div class="row">
				<label for="dinner">Dinner <small>(Pizza!)</small> Preference</label>
				<select name="dinner">
					<option value="plain">Plain</option>
					<option value="veg">Veg</option>
					<option value="meat">Meat</option>
				</select>
			</div>

			<div class="row">
				<label for="breakfast">Breakfast Preference</label>
				<select name="breakfast">
					<option value="cereal">Cereal</option>
					<option value="roll">Hot Roll</option>
				</select>
			</div>

			<div class="row">
				<label for="dietary">Any Dietary Requirements? </label>
				<input type="text" name="dietary">
			</div>	

			<div class="row">
				<input type="submit" class="btn btn-large required="true"" name="submit" value="Register!">
			</div>
		</form>
		@elseif ( (\Carbon\Carbon::create('2017', '10', '16', '20', '00', '00', 'Europe/London')->lte(\Carbon\Carbon::now()) && count($model) >= 40) || \Carbon\Carbon::create('2017', '10', '18', '20', '00', '00', 'Europe/London')->lte(\Carbon\Carbon::now()) && count($model) >= 80)
			<h2>Sorry! This batch of tickets are gone for now!</h2>
			<p>
				Keep an eye on our <a href="https://www.facebook.com/DundeeCS/">Facebook Page</a> for more details when the next round of tickets are available!
			</p>
		@else
			<h2>The first batch of tickets will be released on Monday 16th at 8PM. Come back then!</h2>
		@endif
	</div>
</body>
</html>