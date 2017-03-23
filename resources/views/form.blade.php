<style>

	.background {
		position: fixed;
		top: 0;
		left: 0;
		z-index: -1;
	}

	.top-border {
		position: absolute;
		margin-top: 120px;
		margin-left: 410px;
		border-top: solid;
		border-color: black;
		border-top-width: 4px;
		border-radius: 30px;
		z-index: 1;
	}

	.logo {
		position: absolute;
		margin-top: 40px;
		margin-left: 450px;
		z-index: 2;
	}

	.school {
		position: absolute;
		margin-top: 70px;
		margin-left: 560px;
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
		margin-top: 160px;
		margin-left: 430px;
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
		margin-top: 250px;
		margin-left: 500px;
		text-align: center;
	}

	.textarea {
		position: absolute;
	}

	.button {
		position: absolute;
		margin-left: -10px;
		margin-top: 20px;
		padding: 10 50;
		background-color: black;
		color: white;
		border-radius: 20px;
		font-family: "Vintage_fair Regular";
		font-size: 30px;
	}

	.button:hover{
		background-color: red;
		padding: 15 55;
		margin-left: -15px;
		margin-top: 5px;
	}

</style>

<body>
	<img class="background" src="{{ URL::asset('image/back.jpg')}}" width="100%" height="auto">
	<img class="top-border" src="{{ URL::asset('image/home-top-border.png') }}" width="40%" height="15%">
	<img class="school" src="{{ URL::asset('image/school.png') }}" width="330px" height="100px">
	<img class="logo" src="{{ URL::asset('image/laverdad.png') }}">
	<span class="fill"></span>
	<div class="general">
		<div class="position">
			<form method="POST" action="/student-reg">
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