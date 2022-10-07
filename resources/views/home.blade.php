@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>#</th>
            <th>IMAGE</th>
            <th>NAME</th>
            <th>ROLL NO</th>
            <th>CLASS</th>
            <th>PHONE</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $i = 1;
        ?>
        @foreach($students as $student)
        <tr>
            <td>{{$i++}}</td>
            <td style="width: 100px;">
                <div class="demo-item">
                    <button class="parent" type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <img class="w-100" id="img_temp" src="{{ url('public/upload/'.$student['images'])}}">
                    </button>
                </div>


            </td>
            <td>
                <div class="demo-name">
                    <span class="parent">
                        <p id="name_temp" >
                            {{$student['name']}}
                        </p>
                    </span>
                </div>
            </td>
            <td>{{$student['rollno']}}</td>
            <td>{{$student['class']}}</td>
            <td>{{$student['phone']}}</td>
            <td>
                <a class="btn btn-danger" href="delete/{{$student->id}}">Delete</a>
                <a class="ml-4 btn btn-primary" href="edit/{{$student->id}}">Edit</a>
                <a class="ml-4 btn btn-primary" href="view/{{$student->id}}">View</a>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>
<div class="row display flex justify-content-center fixed-bottom">
    
{{$students}}
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="name_popup">{{$student->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <img class="w-100" id="img_popup" src="{{ url('public/upload/'.$student['images'])}}" alt="">
</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
      $(".parent").click(function() {
        let img_src = $(this).closest('.demo-item').find('#img_temp').attr("src"); 
        let name_src = $(this).parent().parent().next().find("#name_temp").text();
        $('#img_popup').attr('src',img_src);
        $('#name_popup').text(name_src);
    });
  });
</script>
@endsection
