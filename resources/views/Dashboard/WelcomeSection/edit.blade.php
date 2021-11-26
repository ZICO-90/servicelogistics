@extends('Dashboard.Admin.index')

@section('title')
 Create New section Welcome
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
                                <form action="{{route('admin.welcome.update')}}" method="POST" enctype="multipart/form-data">
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @method('PUT')
                                         @csrf    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title (p) Arabic</label>
                                                <input type="text" name="ar_title_p" value="{{$welcome->ar_title_p}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title (h) Arabic</label>
                                                <input type="text" name="ar_title_h" value="{{$welcome->ar_title_h}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">title (span) Arabic</label>
                                                <input type="text" name="ar_title_span" value="{{$welcome->ar_title_span}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                     

       
                                            
                                

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title (p) English</label>
                                                <input type="text" name="en_title_p" value="{{$welcome->en_title_p}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">title (h) English</label>
                                                <input type="text" name="en_title_h" value="{{$welcome->en_title_h}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">title (Span) English</label>
                                                <input type="text" name="en_title_span" value="{{$welcome->en_title_span}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                     

                                       

                                        </div>

                                        
                                    </div>

                                   
                                    <input type="hidden" name="welcomeId" value="{{$welcome->id}}" >


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