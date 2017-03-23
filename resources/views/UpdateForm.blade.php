 <form method="post" action="/update/{{$id}}">
	 {{ csrf_field() }}
	 <input type="hidden" name="StudentID" value="{{ $id }}">
	 <input type="text" name="StudentFirstName" value="{{ $f_name }}">
	 <input type="text" name="StudentMiddleInitial" value="{{ $mid_initial }}">
	 <input type="text" name="StudentLastName" value="{{ $l_name }}">
	 <input type="text" name="StudentCourse" value="{{ $course }}">
	 <input type="number" name="StudentStudentNumber" value="{{ $stud_number }}">
	 <button class="buttons-update" type="submit"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Update </button>
</form>