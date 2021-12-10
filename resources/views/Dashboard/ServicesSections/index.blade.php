




@section('dilevetyJS')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection




@if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                
        </div>
        @endif
<div class="col-12">
                            <div class="card mb-30">
                                <div class="card-body pt-30">
                                    <h4 class="font-20 ">{{trans('Dashboard\servicesSections.h4title')}}</h4>
                                    <a  href="{{route('admin.delivery.CreateServicesSection')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> {{trans('Dashboard\WelcomeSection.linkCreate')}}</a>
                                </div>
                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap table-bordered dh-table">
                                        <thead>
                                            <tr>
                                            <th>{{trans('Dashboard\servicesSections.name_P')}}</th>
                                   
                                            
                                                <th>{{trans('Dashboard\servicesSections.name_h')}}</th>
                                                <th>{{trans('Dashboard\servicesSections.name_span')}}</th>
                                                <th>{{trans('Dashboard\servicesSections.status')}}</th>
                                                <th>{{trans('Dashboard\servicesSections.Actions')}}</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                      @foreach($sectionsModel as $model)
                                            <tr>
                                                <td>
                                                {{$model->heading_title_top_P}}
                                               
                                                </td>
                                                <td>
                                                {{$model->heading_title_H}}
                                              
                                                </td>
                                             
                                                <td>
                                                {{$model->heading_title_bottom_P}}
                                                 
                                                </td>
                                                <td>
                                                <a href="{{ route('admin.delivery.activatedServicesSection' , ['id' => $model->id , 'bool' => $model-> is_active ])}}" 
                                                class="btn btn-danger">
                                             
                                             @if($model-> is_active == 1)
                                             {{trans('Dashboard\servicesSections.Statusactviated')}}
                                                @else
                                                {{trans('Dashboard\servicesSections.StatusUnactviated')}}
                                                @endif
                                                </a>
                                                </td>
                                                <td>
                                                                                                           
                        <a href="{{route('admin.delivery.editeServicesSection' , $model-> id)}}" style="color: #FFC107;" class="Edit" title="{{trans('Dashboard\servicesSections.actionsEdit')}}" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.delivery.deleteServicesSection' , $model-> id)}}"  style="color: #E34724;" class="delete" title="{{trans('Dashboard\servicesSections.actionsDelete')}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                                                </td>
                                            </tr>
                                         @endforeach

                                        </tbody>
                                    </table>
                                    <!-- End Invoice List Table -->
                                </div>
                            </div>    
                        </div>
                               

