@extends('Dashboard.Layouts.master')
@section('css')
    @livewireStyles

@endsection

@section('content')
    <div class="main-content">
    <div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
        <!-- Card -->
            <div class="card">

            <div class="card-body">
                <div class="title-content mb-4 mb-sm-0">
                    <h4 class="mb-4">{{trans('Dashboard\trans_ship.shipment_process')}}</h4>
                    <p>{{trans('Dashboard\trans_ship.add_shipment')}}<br><br><br>
                </div>
                    <livewire:shipment/>




            </div>

            </div>

            </div>
        <!-- End Card -->
        </div>
    </div>
    </div>
    </div>

    <!-- End Main Content -->
@endsection
@section('js')
    @livewireScripts

@parent

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ5mBAaaij69pG1mWGzMwA1FJuHLW05E4&libraries=places&callback=initAutocomplete" async defer></script>
    <script src="{{URL::asset('Dashboard/js/mapInput.js')}}"></script>

@endsection
