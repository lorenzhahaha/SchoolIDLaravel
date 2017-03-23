<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
	<title></title>

   <style>

      .background {
         position: fixed;
         top: 0;
         left: 0;
         z-index: -1;
      }

      .list-border {
         position: absolute;
         left: 0;
         top: 122.5px;
         border-top: solid;
         border-color: black;
         border-top-width: 4px;
         z-index: 2;
       }

      .list {
         position: absolute;
         top: 55px;
         left: 280px;
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

      .logo {
         position: absolute;
         top: 30px;
         left: 150px;
         z-index: 5;
      }

      .buttons-update {
         text-align: right;
         padding: 6px;
         font-family: "MS Sans Serif Regular";
         font-size: 15px;
      }

      .buttons-delete {
         text-align: right;
         padding: 6px;
         font-family: "MS Sans Serif Regular";
         font-size: 15px;
      }

       .back-button {
         position: absolute;
         padding: 20px;
         top: 90px;
         left: 1000px;
         z-index: 10;
         font-family: "Vintage_fair Regular";
         font-size: 20px;
         background: linear-gradient(#996633, #d2a679);
         border: 1px solid #130d06;
         border-radius: 30px;
      }

      .back-button:hover {
         background: linear-gradient(#888888, #888880);
         color: white;
         padding: 23px;
         top: 87px;
         left: 997px;
         font-size: 21px;
      }

      .delete-history {
         position: absolute;
         padding: 20px;
         top: 90px;
         left: 1120px;
         z-index: 10;
         font-family: "Vintage_fair Regular";
         font-size: 20px;
         background: linear-gradient(#996633, #d2a679);
         border: 1px solid #130d06;
         border-radius: 30px;
      }

      .delete-history:hover {
         background: linear-gradient(#888888, #888880);
         color: white;
         padding: 23px;
         top: 87px;
         left: 1115px;
         font-size: 21px;
      }

      #tables {
         position: absolute;
         top: 185px; 
         border-top: 1px solid #ddd;
         border-left: 1px solid #ddd;
         border-right: 1px solid #ddd;
         border-bottom: 1px solid #ddd;
      }

      tbody {
       font-family: "Colonna MT Regular";
         font-size: 30px;
      }

      tbody tr:hover {
         background-color: #404040;
         color: white;
      }

      tr:hover .buttons-update {
         background: linear-gradient(#db7224, #f9b84a);
      }

      tr:hover .user {
         color: #db7224;
      }

      tr:hover .buttons-delete {
         background: linear-gradient(#cc0000, #ff3333);
      }

      th {
         background-color: #ffe6cc;
         height: 60px;
         opacity: .8;
         font-family: "Vintage_fair Regular";
         font-size: 30px;
         letter-spacing: 10px;
      }

      table {
         width: 100%;
         left: 0px;
         border-color: #ffeecc;
         border-top: 3px solid #ddd;
      }

      td {
         height: 40px;
         text-align: center;
      }

      tr:nth-child(even) {
         background-color: #f2f2f2;
      }
      tr:nth-child(odd) {
         background-color: #e6e6e6;
      }
   </style>




</head>
<body>
   <img class="background" src="{{ URL::asset('image/back.jpg') }}" width="100%" height="auto">
   <img class="list-border" src="{{ URL::asset('image/list-top-border.png') }}" width="100%" height="80px">
   <img class="logo" src="{{ URL::asset('image/laverdad.png') }}">
   <img class="list" src="{{ URL::asset('image/list.png') }}" width="500px" height="100px">

   <a href="/" style="color: black;"><span class="back-button"><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp; BACK </span></a>
   <span class="delete-history"><i class="fa fa-history" aria-hidden="true"></i>&nbsp; DELETE HISTORY </span>
	<table id="tables">
      <span id="container"> </span>
   		<thead>
   			<tr>

               <th hidden> ID </th>
               <th> </th>   				
               <th> student&nbsp;<i class="fa fa-hashtag" aria-hidden="true"></i> </th>
               <th> full name </th>
               <th> course </th>
               <th> </th>
               <th> </th>
   			</tr>
   		</thead>

   		<tbody>
   			<?php
				  foreach ($students as $student):
   			?>
   			<tr>
               <td class="user"> &nbsp;<i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;</td>
   				<td> <?php echo $student->stud_number ?></td>
               <td> <?php echo $student->f_name . " " . $student->mid_initial . ". " . $student->l_name ?> </td>
               <td> <?php echo $student->course ?></td>
               <td width="7%"> 
                  <form method="post" action="/UpdateForm">
                     {{ csrf_field() }}
                     <input type="hidden" name="StudentID" value="{{ $student->id }}">
                     <input type="hidden" name="StudentFirstName" value="{{ $student->f_name }}">
                     <input type="hidden" name="StudentMiddleInitial" value="{{ $student->mid_initial }}">
                     <input type="hidden" name="StudentLastName" value="{{ $student->l_name }}">
                     <input type="hidden" name="StudentCourse" value="{{ $student->course }}">
                     <input type="hidden" name="StudentStudentNumber" value="{{ $student->stud_number }}">
                     <button type="submit" class="buttons-update"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp; Update </button>
                  </form>
               </td>
               <td width="7%">
                  <form method="post" action="/delete/{{$student->id}}">
                     {{ csrf_field() }}
                     <input type="hidden" name="StudentID" value="{{ $student->id }}">
                     <input type="hidden" name="StudentFirstName" value="{{ $student->f_name }}">
                     <input type="hidden" name="StudentMiddleInitial" value="{{ $student->mid_initial }}">
                     <input type="hidden" name="StudentLastName" value="{{ $student->l_name }}">
                     <input type="hidden" name="StudentCourse" value="{{ $student->course }}">
                     <input type="hidden" name="StudentStudentNumber" value="{{ $student->stud_number }}"><button type="submit" class="buttons-delete"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete </button>
                     </form>
               </td>
   			</tr>
   			<?php endforeach; ?>		
   		</tbody>
   	</table>
</body>
</html>