<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>Dashmin </title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   @include('Dashboard.Layouts.head')
   <link rel="stylesheet" href="/dashboard/fonts/elegant_icons/elegant-icons.css">
</head>

<body>

     <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      <!-- Header -->
      @include('Dashboard.Layouts.main-header')
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
       @include('Dashboard.Layouts.main-sidebar')
         <!-- End Sidebar -->




  <!-- Main Content -->
  <div class="main-content">
    <div class="container-fluid">


        <div class="form-element py-30 mb-30">
            <h4 class="font-20 mb-4">Default Form Validation</h4>

            <!-- Form -->
            <form class="form-validate-jquery" action="{{route('news.update',[$news->id])}}" method="POST"  enctype="multipart/form-data">
                @method('PUT')
                @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <!-- Form Row -->
                <div class="form-row mb-20">
                    <label class="font-14 bold">الاسم باللغه العربيه</label>
                    <input type="text" name="ar_title" class="theme-input-style is-invalid" value="{{$news->ar_title}}">

                </div>
                <input type="hidden" name="admin_id" value="{{('admin_id' ==Auth::id())}}">

                <div class="form-row mb-20">
                    <label class="font-14 bold">name at english</label>
                    <input type="text" name="en_title" class="theme-input-style is-invalid" value="{{$news->en_title}}">

                </div>
                <!-- End Form Row -->

                <!-- Form Row -->
                <div class="form-row mb-20">
                    <label class="font-14 bold">محتوى الخبر</label>
                    <textarea type="long_text" name="ar_content" class="theme-input-style is-valid" >{{$news->ar_content}}</textarea>

                </div>

                <div class="form-row mb-20">
                    <label class="font-14 bold">news content</label>
                    <textarea type="text" name="en_content" class="theme-input-style is-valid" >{{$news->en_content}}</textarea>

                </div>
                <!-- End Form Row -->
                <div class="form-row mb-5">
                    <label class="font-14 bold">photo</label>
                    <input type="file" name="photo" class="theme-input-style " value="{{$news->photo}}">

                </div>
                <!-- Form Row -->
                <div class="form-row">
                    <div class="col-12">
                        <button type="submit" class="btn long">Submit</button>
                    </div>
                </div>
                <!-- End Form Row -->
            </form>
            <!-- End Form -->
        </div>

    </div>
 </div>
 <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->

<!-- Footer -->
@include('Dashboard.Layouts.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->
@include('Dashboard.Layouts.footerjs')
</body>

</html>

 <!-- Base Horizontal Form -->

<!-- End Horizontal Form -->
