@extends('endUser.layouts.master')


@section('content')
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                    <h1 class="heading-title style-3 has-text-left"> أترك
                        <span class="has-text-primary">تقييمك عن خدماتنا</span>
                    </h1>
                    <p class="heading-title-bottom">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك أن تولد.</p>
                    <!-- successful form message -->
                    @include('partials.session')

                    <form accept-charset="UTF-8" action="{{route('admin.testimonial.store')}}" method="POST">
                        @csrf
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="name" placeholder="الإسم" required value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="email" name="email" placeholder="الإيميل" required="" value="{{old('email')}}">
                                        @error('email')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                            </div>
                            <!-- .field-body -->
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="description" placeholder="رسالتك" >{{old('description')}}</textarea>
                                @error('description')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button" type="submit">أضف رأيك</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="column is-6-desktop is-12-tablet" data-aos="fade-up" data-aos-delay="600">
                    <br>
                    <br>
                    <br>
                    <br>
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('assetsEndUser/assets/images/global/man.png')}}"> </div>
            </div>
        </div>
    </section>
@endsection
