@include('layouts.header')
<section class="about-one clearfix mt-5">
    <div class="container">
        
        <div class="row">
            <div class="col-md-3 ">
                 <div class="list-group ">
                  <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action active">Dashboard</a>
                  <a href="#" class="list-group-item list-group-item-action">Profile Management</a>
                  <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-settings"></i>Settings </a>
                  
                  
                </div> 
            </div>
            <div class="col-md-9" >
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>OnGoing Courses</h4>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table table-responsive ">

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Course</th>
                                            <th>Slot</th>
                                            <th>Duration</th>
                                            <th>Zoom Url</th>
                                            <th>Video Url</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse($courses as $course)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$course->course->name}}</td>
                                            <td>{{$course->slot->name}}</td>
                                            <td>From {{\Carbon\Carbon::parse($course->slot->start_date)->format('M d Y')}} To {{\Carbon\Carbon::parse($course->slot->end_date)->format('M d Y')}}</td>
                                            <td>{{$course->slot->zoom_url??"No Link Found!"}}</td>
                                            <td>{{$course->slot->zoom_url??"No Video Found!"}}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No Courses Joined Yet!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  
@include('layouts.footer')
