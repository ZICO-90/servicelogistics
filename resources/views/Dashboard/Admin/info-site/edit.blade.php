<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Page Title -->
    <title>Dashmin - Admin</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('Dashboard.Layouts.head')
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
                <div class="row">

                    <div class="col-lg-6">
                        <!-- Base Horizontal Form -->
                        <div class="form-element py-30 mb-30">
                            <h4 class="font-20 mb-30">InfoSite</h4>
                        @include('partials.session')
                        <!-- Form -->
                            <form action="{{route('admin.info-site.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <input type="hidden" name="info_id" value="{{$info['id']}}">
                            <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Title En</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="English Title" name="en_title" value="{{$info['en_title']}}">
                                        @error('en_title')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Title Ar</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Arabic Title" name="ar_title" value="{{$info['ar_title']}}">
                                        @error('ar_title')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Your Email</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="email" class="theme-input-style" placeholder="Type Email Address" name="email" value="{{$info['email']}}">
                                        @error('email')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Upload</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" class="theme-input-style" name="logo">
                                        @error('logo')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Mobile</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" class="theme-input-style" placeholder="Contact Number" name="phone" value="{{$info['phone']}}">
                                        @error('phone')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Day En</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Day En" name="en_day" value="{{$info['en_day']}}">
                                        @error('en_day')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Day Ar</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Day Ar" name="ar_day" value="{{$info['ar_day']}}">
                                        @error('ar_day')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Open Time</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Open Time" name="open_time" value="{{$info['open_time']}}">
                                        @error('open_time')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Close Time</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Close Time" name="close_time" value="{{$info['close_time']}}">
                                        @error('close_time')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">FaceBook URL</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="FaceBook Link" name="facebook_url" value="{{$info['facebook_url']}}">
                                        @error('facebook_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Twitter URL</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="Twitter Link" name="twitter_url" value="{{$info['twitter_url']}}">
                                        @error('twitter_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">Linkedin URL</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style"  name="linkedin_url" value="{{$info['linkedin_url']}}">
                                        @error('linkedin_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- End Form Row -->



                                <!-- Form Row -->
                                <div class="form-row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn long">Update</button>
                                    </div>
                                </div>
                                <!-- End Form Row -->
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Horizontal Form -->
                    </div>

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
