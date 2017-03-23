	
<style>

	.background {
		position: fixed;
		top: 0;
		left: 0;
		z-index: -1;
	}

	.top-border-2 {
		position: absolute;
		margin-top: 130px;
		margin-left: 760px;
		border-top: solid;
		border-color: black;
		border-top-width: 4px;
		border-radius: 30px;
		z-index: 1;
	}

	.complete {
		position: absolute;
		margin-top: 80px;
		margin-left: 870px;
		border-radius: 30px;
		border-top-style: solid;
		border-top-width: 4px;
		border-top-color: gray;
		border-bottom-style: solid;
		border-bottom-width: 4px;
		border-bottom-color: gray;
		z-index: 2;
	}

	.fill-2 {
		position: absolute;
		padding: 200px 250px;
		margin-top: 150px;
		margin-left: 780px;
		background-color: gray;
		border-bottom: solid;
		border-top: solid;
		border-color: black;
		border-width: 10px;
		border-radius: 50px;
		opacity: 0.4;
	}

	.general-2 {
		font-family: "Vintage_fair Regular";
		font-size: 23px;
	}

	.position-2 {
		position: absolute;
		margin-top: 250px;
		margin-left: 935px;
		text-align: center;
		float: center;
	}

	.list {
		position: absolute;
		margin-left: 880px;
		margin-top: 522.5px;
		padding: 10px 50px;
		background-color: black;
		color: white;
		border-radius: 20px;
		font-family: "Vintage_fair Regular";
		font-size: 25px;
	}

	.list:hover{
		background-color: red;
		padding: 15px 55px;
		margin-left: 878px;
		margin-top: 517.5px;
	}

	.arrow {
		position: absolute;
		margin-left: 610px;
		margin-top: 330px;
	}


/* ---------------------------------------------FILL-UP FORM -------------------------------------- */



	.top-border {
		position: absolute;
		margin-top: 100px;
		margin-left: 40px;
		border-top: solid;
		border-color: black;
		border-top-width: 4px;
		border-radius: 30px;
		z-index: 1;
	}

	.logo {
		position: absolute;
		margin-top: 20px;
		margin-left: 90px;
		z-index: 2;
	}

	.school {
		position: absolute;
		margin-top: 50px;
		margin-left: 190px;
		border-radius: 10px;
		border-top-style: solid;
		border-top-width: 4px;
		border-top-color: gray;
		border-top-right-radius: 30px;
		border-bottom-style: solid;
		border-bottom-width: 4px;
		border-bottom-color: gray;
		border-bottom-right-radius: 30px;
		z-index: 2;
	}

	.fill {
		position: absolute;
		padding: 200px 250px;
		margin-top: 120px;
		margin-left: 60px;
		background-color: gray;
		border-bottom: solid;
		border-top: solid;
		border-color: black;
		border-width: 10px;
		border-radius: 50px;
		opacity: 0.4;
	}

	.general {
		font-family: "Vintage_fair Regular";
		font-size: 23px;
	}

	.position {
		position: absolute;
		margin-top: 230px;
		margin-left: 130px;
		text-align: center;
	}

	.textarea {
		position: absolute;
	}

	.button {
		position: absolute;
		margin-left: -10px;
		margin-top: 0px;
		padding: 10px 50px;
		background-color: black;
		color: white;
		border-radius: 20px;
		font-family: "Vintage_fair Regular";
		font-size: 30px;
	}

	.button:hover{
		background-color: red;
		padding: 15px 55px;
		margin-left: -15px;
		margin-top: -5px;
	}

</style>

<body>-
	<img class="background" src="{{ URL::asset('image/back.jpg')}}" width="100%" height="auto">
	<img class="top-border-2" src="{{ URL::asset('image/home-top-border.png') }}" width="40%" height="15%">
	<img class="complete" src="{{ URL::asset('image/complete.png') }}" width="330px" height="100px">
	<span class="fill-2"></span>
		<div class="general-2">
			<div class="position-2">
				STUDENT NAME: <font style="text-transform: lowercase;"><br>
					<?php 
						$full_name= $f_name . " " . $mid_initial . ". " . $l_name;
						echo $full_name; 
					?> </font><br><br>
				COURSE: <font style="text-transform: lowercase;"><br> {{ $course }} </font><br><br>
				STUDENT NUMBER: <br> {{ $stud_number }}
			</div>
		</div>
		<form method="POST" action="/show-list">
		{{ csrf_field() }}
			<button class="list" type="submit"> show all students </button>
		</form>
	
		<img class="arrow" src="{{ URL::asset('image/arrow.png') }}" width="130px;" height="auto">

	<img class="top-border" src="{{ URL::asset('image/home-top-border.png') }}" width="40%" height="15%">
	<img class="school" src="{{ URL::asset('image/school.png') }}" width="330px" height="100px">
	<img class="logo" src="{{ URL::asset('image/laverdad.png') }}">
	<span class="fill"></span>
		<div class="general">
			<div class="position">
				<form method="POST" action="/add-user">
				{{ csrf_field() }}
						FIRST NAME: 	<input class="textarea" type="text" name="f_name" required
											style="margin-left: 40px; text-align: center;" placeholder="Ex. Lorenz"> <br><br>
						MIDDLE INITIAL: <input class="textarea" type="text" name="mid_initial" required
											style="margin-left: 25px; text-align: center;" placeholder="Ex. C"> <br><br>
						LAST NAME: 		<input class="textarea" type="text" name="l_name" required
											style="margin-left: 42.5px; text-align: center;" placeholder="Ex. Florentino"> <br><br>
						COURSE: 		<input class="textarea" type="text" name="course" required
											style="margin-left: 60px; text-align: center;" placeholder="Ex. BSIS"> <br><br>
						STUDENT NUMBER: <input class="textarea" type="number" name="stud_number" required
											style="margin-left: 10px; text-align: center;" placeholder="Ex. 1500254"> <br><br>
					<button class="button" type="submit"> register </button>	
				</form>
			</div>
		</div>
</body>

