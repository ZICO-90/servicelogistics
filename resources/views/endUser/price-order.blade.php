@extends('endUser.layouts.master')


@section('content')
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                    <h1 class="heading-title style-3 has-text-left"> طلب
                        <span class="has-text-primary">عرض أسعار</span>
                    </h1>
                    <p class="heading-title-bottom">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى حيث يمكنك أن تولد.</p>
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> شكرا جزيلا! لقد تم ارسال رسالتك بنجاح. </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> ! حدث خطأ ما ، لم نتمكن من إرسال رسالتك. </div>
                    <!-- ajax contact form -->
                    <form accept-charset="UTF-8" action="{{route('admin.priceOrder.store')}}" method="POST">
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
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="address" placeholder="العنوان" required="" value="{{old('address')}}">
                                        @error('address')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="select">
                                                <option value="air">الشحن الجوي</option>
                                                <option value="land"> النقل البري</option>
                                                <option value="sea">  الشحن البحري</option>
                                                <option value="storage">التخزين</option>
                                            </select>
                                            @error('select')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="message" placeholder="رسالتك" required="">{{old('message')}}</textarea>
                                @error('message')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button" type="submit">اطلب الآن</button>
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
