@extends('Dashboard.Admin.index')

@section('title')
 Create New Dilevery
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
                                <!-- Form -->
                                <form action="{{ route('admin.delivery.store') }}" method="POST" enctype="multipart/form-data">
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @csrf
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name Arabic</label>
                                                <input type="text" name="ar_name" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details Arabic</label>
                                                <input type="text" name="ar_details" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title Up Arabic</label>
                                                <input type="text" name="ar_title_Up" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">title down Arabic</label>
                                                <input type="text" name="ar_title_down" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                     

                                              <!-- Form Group -->
                                            <div class="form-group">
                                            <label for="inputEmail4"> icon Preview</label>
                                            <img id="icons" style="height:200;"   >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                <label for="inputEmail4">Upload icon</label>
                                                <input name="icons" type="file" id="image-File" onchange="iconsFile()" accept="image/*" />
                                               

    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name English</label>
                                                <input type="text" name="en_name" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details English</label>
                                                <input type="text" name="en_details" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">title Up English</label>
                                                <input type="text" name="en_title_Up" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">etitle down English</label>
                                                <input type="text" name="en_title_down" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                     

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label for="inputEmail4"> images Preview</label>
                                            <img id="imgs" style="height:200;"   >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                <label for="inputEmail4">Upload images</label>
                                                <input name="imgs" type="file" id="image-File" onchange="imgaesFile()" accept="image/*" />
                                                
    
                                        </div>
                                   <!-- End Form Group -->

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