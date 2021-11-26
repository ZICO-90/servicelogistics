@extends('Dashboard.Admin.index')



@section('title')
  employes index 
@endsection

<!---dilevetyJS index table --->
@section('dilevetyJS')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection


@section('content')
@if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                
        </div>
        @endif
<div class="col-12">
                            <div class="card mb-30">
                                <div class="card-body pt-30">
                                    <h4 class="font-20 ">Border Table</h4>
                                    <a  href="{{route('admin.employe.create') }}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                                </div>
                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap table-bordered dh-table">
                                        <thead>
                                            <tr>
                                            <th>picture</th>
                                                <th >Name</th>
                                                
                                                <th>Country</th>
                                                <th>city</th>
                                                
                                                <th>Year</th>
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($employe as $model)
                                            <tr>
                                            <td>
                                                <img style="width: 50px; height: 50px;" src="{{asset('Dashboard/img/employes/'.$model-> img_url)}}" >
                                            </td>

                                                <td>
                                                    
                                                
                                                    <ul>
                                                        <li>{{$model-> ar_name}}<il>
                                                        <li>{{$model-> en_name}}<il>
                                                    </ul>
                                            
                                            
                                            </td>
                                            
                                             
                                                <td>
                                                   

                                                    <ul>
                                                        <li> {{$model-> ar_Country}}<il>
                                                        <li>{{$model-> en_Country}}<il>
                                                    </ul>
                                                
                                                </td>
                                                <td>
                                                     <ul>
                                                        <li> {{$model-> ar_city}}<il>
                                                        <li>{{$model-> en_city}}<il>
                                                     </ul>
                                                </td>
                                                
                                                <td>{{$model-> age}}</td>
                                                <td>{{$model-> email}}</td>
                                                <td>{{$model-> phone}}</td>
                                               
                                                <td>
                                                <a href="{{ route('admin.employe.activated' , ['id' => $model->id , 'bool' => $model-> is_active ])}}" 
                                                class="btn btn-danger">
                                                @if($model-> is_active == 1)
                                                is active
                                                @else
                                                un active
                                                @endif

                                                </a>
                                                </td>
                                                <td>
                                                                                                           
                        <a href="{{route('admin.employe.edit', $model-> id )}}" style="color: #FFC107;" class="Edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.employe.destroy', $model-> id )}}"  style="color: #E34724;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                                                </td>
                                            </tr>
                                           @endforeach

                                        </tbody>
                                    </table>
                                    <!-- End Invoice List Table -->
                                </div>
                            </div>    
                        </div>
                               
@endsection
