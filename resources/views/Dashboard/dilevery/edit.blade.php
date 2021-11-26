@extends('Dashboard.Admin.index')

@section('title')
  Dilevery Update
@endsection


@section('dilevetyJS')
<script>
    function iconsFile() {
        // Change icons in Choose File
        var output = document.getElementById('icons');

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }

    }

    function imgaesFile() {
// Change Images in Choose File
      var output = document.getElementById('imgs');

      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function () {
      URL.revokeObjectURL(output.src) // free memory
     }
   
    }
 </script>
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

@if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                <a href="{{route('admin.delivery.index')}}" class="btn s_alert bg-info-light text-info mr-3 mr-sm-4 mb-10" id="type-info">back index</a>
        </div>
        @endif
                                <!-- Form -->
                                <form action="{{route('admin.delivery.update')}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf        
                                 
                                <input type="hidden" name="shipmentId" value="{{$shipments->id}}" >
   
                                    <div class="row">
                                        <div class="col-lg-6">
                                        
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name Arabic</label>
                                                <input type="text" name="ar_name" value="{{$shipments->ar_name}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details Arabic</label>
                                                <input type="text" name="ar_details" value="{{$shipments->ar_details}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                         
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title Up Arabic</label>
                                                <input type="text" name="ar_title_Up" value="{{$shipments-> ar_title_Up}}"  class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">title down Arabic</label>
                                                <input type="text" name="ar_title_down" value="{{$shipments-> ar_title_down}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                            <div class="form-group">
                                            <label for="inputEmail4"> icon Preview</label>
                                            <img id="icons" style="height:200;"   src="{{asset('Dashboard/img/delivery/'.$shipments-> icon_url)}}"  >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                <label for="inputEmail4">Upload icon</label>
                                                <input name="icons" type="file" id="image-File" onchange="iconsFile()" accept="image/*" />
                                                <input type="hidden" value="{{$shipments-> icon_url}}"  name="icon_url">

    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name English</label>
                                                <input type="text" name="en_name" value="{{$shipments->en_name}}"   class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details English</label>
                                                <input type="text" name="en_details" value="{{$shipments->en_details}}"  class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                      <!-- Form Group -->
                                      <div class="form-group">
                                                <label class="font-14 bold mb-2">title Up English</label>
                                                <input type="text" name="en_title_Up" value="{{$shipments->en_title_Up}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">etitle down English</label>
                                                <input type="text" name="en_title_down" value="{{$shipments-> en_title_down}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label for="inputEmail4"> images Preview</label>
                                           

                                            <img id="imgs"  style="height: 200px;" src="{{asset('Dashboard/img/delivery/'.$shipments-> img_url)}}" >
                                            
                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                <label for="inputEmail4">Upload images</label>
                                                <input name="imgs" type="file" id="image-File" onchange="imgaesFile()" accept="image/*" />
                                                <input name="img_url" value="{{$shipments-> img_url}}" type="hidden" />
    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>

                                        
                                    </div>

                                    <!-- Form Row -->
                                    <div class="form-group pt-1">
                                        <div class="d-flex align-items-center mb-3">
                                            <!-- Custom Checkbox -->
                                            <label class="custom-checkbox position-relative mr-2">
                                                <input type="checkbox" id="check5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <!-- End Custom Checkbox -->
                                            
                                            <label for="check5">Remember me</label>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->

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