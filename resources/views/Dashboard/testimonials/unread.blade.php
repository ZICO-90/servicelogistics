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

                    <div class="col-12">
                        <div class="card mb-30">
                            <div class="card-body pt-30">
                                <h4 class="font-20 ">View ALl UnRead Testimonials</h4>
                            </div>
                            <div class="table-responsive">
                            @include('partials.session')
                            <!-- Invoice List Table -->
                                <table class="text-nowrap table-bordered dh-table">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($testimonials)
                                        @if(count($testimonials) > 0)
                                            @foreach($testimonials as $testimonial)
                                                <tr>
                                                    <td>{{$testimonial->name}}</td>
                                                    <td>{{$testimonial->email}}</td>
                                                    <td class="text-center">
                                                        @if($testimonial->status == 0)
                                                            <button type="button" class="status-btn on_hold">OnHold</button>
                                                        @else
                                                            <button type="button" class="status-btn completed">Approved</button>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin.testimonial.show', $testimonial->id)}}" class="details-btn">View Details <i class="icofont-arrow-right"></i></a></td>
                                                    <td>
                                                        <form method="post" action="{{route('admin.testimonial.destroy')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="testimonial_id" value="{{$testimonial->id}}">
                                                            <a href="#"><button type="submit" class="status-btn un_paid">Delete</button></a>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    @endisset

                                    </tbody>
                                </table>
                                <!-- End Invoice List Table -->
                            </div>
                        </div>
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
