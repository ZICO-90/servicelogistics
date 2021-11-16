@extends('Dashboard.Admin.index')



@section('title')
 index dilevery
@endsection

<!---dilevetyJS index table --->
@section('dilevetyJS')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection

@section('content')
<div class="col-12">
                        <div class="card mb-30">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h4 class="font-20">Extended Table</h4>

                                       
                                    
                                            <!-- Dropdown Button -->
                                          <div class="dropdown-button mt-3 mt-sm-0">
                                          <a href="{{ route('admin.delivery.create')}}" type="button" class="btn s_alert bg-warning-light text-warning mr-3 mr-sm-4 mb-10" id="type-warning">Add New</a>

                                          <a href="{{route('admin.delivery.record')}}" class="btn s_alert bg-info-light text-info mr-3 mr-sm-4 mb-10" id="type-info">View Record</a>
                                            </div>
                                         </div>
                                         <!-- End Dropdown Button  -->
                                        </div>
                                    </div>
                                </div>
                                @if ($message = Session::get('success'))
                                 <div class="alert alert-success alert-block">
                                 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>
                                   <a href="{{route('admin.delivery.record')}}" >Click here to increase the display area</a>

                                 </div>
                                       @endif

                                       @if ($message = Session::get('IsActiveSection'))
                                 <div class="alert alert-success alert-block">
                                 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>
                                 

                                 </div>
                                       @endif

                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap bg-white dh-table">
                                        <thead>
                                            <tr>
                                                <th>icon</th>
                                                <th>images </th>
                                                <th>name </th>
                                                <th>details  </th>
                                                <th>title up  </th>
                                                <th>title down  </th>
                                                <th>active up </th>
                                                <th>active down  </th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                   @foreach($shiments as $model)
                                            <tr>
                                                <td>
                                                  <img  src="{{asset('Dashboard/img/delivery/'.$model-> icon_url)}}" >
                                                </td>

                                                <td>
                                                <img style="width: 50px; height: 50px;" src="{{asset('Dashboard/img/delivery/'.$model-> img_url)}}" >
                                                </td>

                                                <td>
                                                    
                                                    <ul>
                                                        <li>{{$model-> ar_name}}<il>
                                                        <li>{{$model-> en_name}}<il>
                                                    </ul>

                                                </td>
                                                
                                        
                                                <td>
                                                     <ul>
                                                        <li>{{$model-> ar_details}}<il>
                                                        <li>{{$model-> en_details}}<il>
                                                    </ul>
                                                </td>

                                                <td>
                                                     <ul>
                                                        <li>{{$model-> ar_title_Up}}<il>
                                                        <li>{{$model-> en_title_Up}}<il>
                                                    </ul>
                                                </td>

                                                <td>
                                                     <ul>
                                                        <li>{{$model-> ar_title_down}}<il>
                                                        <li>{{$model-> en_title_down}}<il>
                                                    </ul>
                                                </td>

                                              <td>
                                            <form action="{{route('admin.delivery.stauts')}}" method="POST" id="From-Status-{{$model-> id}}" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$model-> id}}" />
                                          
                                               <select style="width:100%" onchange="this.form.submit()" name="is_active">
                                                
                                                <option value="1" {{$model->is_active_limit == 1 ? 'disabled selected' : ''}} >enable</option>
                                                <option value="0" {{$model->is_active_limit == 0 ? 'disabled selected' : ''}}>disbale</option>
                                                </select>
                                                  <br>
                                                 <label class="{{$model->is_active_limit == 1 ? 'status-btn completed' :'status-btn un_paid' }}">{{ $model->is_active_limit == 1 ? "is active" :"un active" }}</label>
                                            </form>
                                                </td>

                                                <td>
                                                   
                                                <form action="{{route('admin.delivery.stautsII')}}" method="POST" id="From-Status-{{$model-> id}}" >
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$model-> id}}" />
                                          
                                               <select style="width:100%" onchange="this.form.submit()" name="is_active_section">
                                                
                                                <option value="1" {{$model->	is_active_section == 1 ? 'disabled selected' : ''}}>enable</option>
                                                <option value="0" {{$model->	is_active_section == 0 ? 'disabled selected' : ''}}>disbale</option>
                                                </select>
                                               <br>
                                               <label class="{{$model->is_active_section == 1 ? 'status-btn completed' :'status-btn un_paid' }}">{{ $model->is_active_section == 1 ? "is active" :"un active" }}</label>
                                             </form>                                                
                                                </td>
                                                <td>
                                                                                
                        <a href="{{route('admin.delivery.edit',$model->id)}}" style="color: #FFC107;" class="Edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.delivery.destroy',$model->id)}}"  style="color: #E34724;" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    
                                                
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
