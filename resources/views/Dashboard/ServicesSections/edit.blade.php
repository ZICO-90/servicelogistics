@extends('Dashboard.Admin.index')

@section('title')
 Create New section Section
@endsection





@section('content')
<div class="col-lg-12">
                            <!-- Base Horizontal Form With Icons -->
                            <div class="form-element py-30 multiple-column">
                                <h4 class="font-20 mb-20">{{trans('Dashboard\servicesSections.UpdateTitle')}}</h4>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                <!-- Form -->
                                <form action="{{route('admin.delivery.updateServicesSection')}}" method="POST" >
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @method('PUT')
                                         @csrf    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.ar_name_P')}}</label>
                                                <input type="text" name="heading_title_top_P[ar]" value="{{$Section->getTranslation('heading_title_top_P', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.ar_name_h')}}</label>
                                                <input type="text" name="heading_title_H[ar]" value="{{$Section->getTranslation('heading_title_H', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                             <!-- Form Group -->
                                             <div class="form-group">
                                             <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.ar_name_span')}}</label>
                                                <input type="text" name="heading_title_bottom_P[ar]" value="{{$Section->getTranslation('heading_title_bottom_P', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                     

       
                                            
                                

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.en_name_P')}}</label>
                                                <input type="text" name="heading_title_top_P[en]" value="{{$Section->getTranslation('heading_title_top_P', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.en_name_h')}}</label>
                                                <input type="text" name="heading_title_H[en]" value="{{$Section->getTranslation('heading_title_H', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                              <label class="font-14 bold mb-2">{{trans('Dashboard\servicesSections.en_name_span')}}</label>
                                                <input type="text" name="heading_title_bottom_P[en]" value="{{$Section->getTranslation('heading_title_bottom_P', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                     

                                       

                                        </div>

                                        
                                    </div>

                                   
                                    <input type="hidden" name="SectionId" value="{{$Section->id}}" >


                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">{{trans('Dashboard\servicesSections.submitUpdate')}}</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection