<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
	<form method="post" action="/editUser">
		 {{ csrf_field() }}
		 <input type="hidden" name="StudentID" value="{{ $student->id }}">
		 <input type="text" name="StudentFirstName" value="{{ $student->f_name }}">
		 <input type="text" name="StudentMiddleInitial" value="{{ $student->mid_initial }}">
		 <input type="text" name="StudentLastName" value="{{ $student->l_name }}">
		 <input type="text" name="StudentCourse" value="{{ $student->course }}">
		 <input type="number" name="StudentStudentNumber" value="{{ $student->stud_number }}">
		 <button class="buttons-update" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Update </button>
	</form>

</body>
</html>