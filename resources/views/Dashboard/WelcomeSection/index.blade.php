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
                                    <h4 class="font-20 ">section welcome</h4>
                                    <a  href="{{route('admin.welcome.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                                </div>
                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap table-bordered dh-table">
                                        <thead>
                                            <tr>
                                            <th>name (P)</th>
                                   
                                            
                                                <th>title (h)</th>
                                                <th>sub name (span)</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                      @foreach($welcome as $model)
                                            <tr>
                                                <td>
                                                    <ul>
                                                   
                                                        <li>{{$model->en_title_p}}</il>
                                                        <li>{{$model->ar_title_p}}</il>
                                                    </ul>
                                                </td>
                                                <td>
                                                <ul>
                                                    <li>{{$model->en_title_h}}</il>
                                                    <li>{{$model->ar_title_h}}</il>
                                                </ul>
                                                </td>
                                             
                                                <td>

                                                    <ul>
                                                       <li>{{$model->en_title_span}}</il>
                                                        <li>{{$model->ar_title_span}}</il>
                                                    </ul>
                                                </td>
                                                <td>
                                                <a href="{{ route('admin.welcome.activated' , ['id' => $model->id , 'bool' => $model-> is_active ])}}" 
                                                class="btn btn-danger">
                                             
                                             @if($model-> is_active == 1)
                                                is active
                                                @else
                                                un active
                                                @endif
                                                </a>
                                                </td>
                                                <td>
                                                                                                           
                        <a href="{{route('admin.welcome.edit' , $model-> id)}}" style="color: #FFC107;" class="Edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.welcome.destroy' , $model-> id)}}"  style="color: #E34724;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

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
