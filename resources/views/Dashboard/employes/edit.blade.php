@extends('Dashboard.Admin.index')

@section('title')
 Create New Dilevery
@endsection


@section('dilevetyJS')
<script>
  
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
                                <h4 class="font-20 mb-20">New Create employe</h4>
                                <!----------------------------->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                            </div>
                        @endif

<!----------------------------->
      @if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

                                <!-- Form -->
                                <form action="{{route('admin.employe.update')}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf     
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                        
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name Arabic</label>
                                                <input type="text" name="ar_name" value="{{$employe-> ar_name}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details Arabic</label>
                                                <input type="text" name="ar_details" value="{{$employe-> ar_details}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">Country Arabic</label>
                                                <input type="text" name="ar_Country" value="{{$employe-> ar_Country}}"  class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                <label class="font-14 bold mb-2">City Arabic</label>
                                                <input type="text" name="ar_city" value="{{$employe-> ar_city}}"  class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">birth date</label>
                                                <input type="date"   name="birth_date" value="{{$employe-> birth_date}}"  class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">emial</label>
                                                <input type="email" name="email" value="{{$employe-> email}}"   class="theme-input-style" placeholder="emial">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            
                                     

                     
                                            
                                  

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Name English</label>
                                                <input type="text" name="en_name" value="{{$employe-> en_name}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Other Details English</label>
                                                <input type="text" name="en_details" value="{{$employe-> en_details}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">Country English</label>
                                                <input type="text" name="en_Country" value="{{$employe-> en_Country}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                <label class="font-14 bold mb-2">City English</label>
                                                <input type="text" name="en_city" value="{{$employe-> en_city}}" class="theme-input-style" placeholder="Text Arabic">
                                                </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">phone</label>
                                                <input type="number" name="phone" value="{{$employe-> phone}}" class="theme-input-style" placeholder="Text Arabic">
                                                </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label class="font-14 bold mb-2"> images Preview</label>
                                        
                                            <img id="imgs"  style="height: 200px;" src="{{asset('Dashboard/img/employes/'.$employe-> img_url)}}" >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                
                                                <input name="imgs" type="file" id="image-File" onchange="imgaesFile()" accept="image/*" />
                                                
                                                <input type="hidden" name="img_url">

                                        </div>
                                   <!-- End Form Group -->

                                        </div>

                                        
                                    </div>

                                    <input type="hidden" name="employeId" value="{{$employe-> id}}">

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