@extends('Dashboard.Admin.index')

@section('title')
records dispaly  
@endsection





@section('content')
<div class="col-lg-12">
                            <!-- Base Horizontal Form With Icons -->
                            <div class="form-element py-30 multiple-column">
                                <h4 class="font-20 mb-20">New Create</h4>
                         @if ($errors->any())
                          <div class="alert alert-danger">
                             <ul>
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                            </ul>
                           </div>
                         @endif

                         @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                <a href="{{route('admin.delivery.index')}}" class="btn s_alert bg-info-light text-info mr-3 mr-sm-4 mb-10" id="type-info">back index</a>
        </div>
        @endif
                                <!-- Form -->
                                <form action="{{route('admin.delivery.records')}}" method="POST" >
                                @method('PUT')
                                @csrf           
                                    <div class="row">
                                        <div class="col-lg-6">
                                      
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="theme-input-style">View page recoreds Count: {{$select}}</label>
                                                <input type="hidden" name="oldview" value="{{$select}}" >

                                            </div>
                                            <!-- End Form Group -->
                                            
                             

                                        </div>


                                        <div class="col-lg-6">
                                        <div class="form-group">
                                                <label class="font-14 bold mb-2">Name Arabic</label>
                                                <input type="number" name="view_row" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                 
                                        </div>
                                

                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">Submit</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection