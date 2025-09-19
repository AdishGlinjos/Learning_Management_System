
@extends('master')
@section('content')
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">COURSE DETAILS</h4>
            <p class="mb-30">  @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif</p>
          
        </div>
      
    </div>
    <form  action="{{url('/AddCourse')}}" method="POST">
        @csrf
        {{-- <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Course Title</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="productCode" placeholder="productCode" value=" @foreach ($productcode as $item){{$item->prefix_Labal}}{{$item->start_Number}}  @endforeach">
            </div>
        </div> --}}
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Course Title</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text"  name="course_name" placeholder="Enter Course Name">
                <span class="text-danger">{{$errors->first('courseName')}}</span>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Course Description</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="course_description" placeholder="Enter Course Description">
                <span class="text-danger">{{$errors->first('courseDescription')}}</span>
            </div>
        </div>
     <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Course Price</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="number" name="course_price" placeholder="Enter Course Price">
                <span class="text-danger">{{$errors->first('course_price')}}</span>
            </div>
        </div>
        <div class="col-sm-12 text-right">
            <button type="submit" class="btn btn-primary">Add Course</button>
        </div>  
                  
                   
                </select>
            </div>
        </div>
      
    </form> 
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr onclick="{{url('updateCourse')}}">
                        <th scope="col">SL No</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $index => $course)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $course->course_name }}</td>
                            <td>{{ $course->course_description }}</td>
                            <td>{{ number_format($course->course_price, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No courses found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>



</div>
    
@endsection