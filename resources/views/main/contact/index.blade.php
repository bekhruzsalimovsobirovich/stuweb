@extends('main.layout.master')
@section('title', 'Bog\'lanish')
@section('content')
    <br><br>
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe width="100%" height="480" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d683.2861235539436!2d64.4396701161319!3d39.74300602592243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f500510ceccacdd%3A0x3a5313ee47821d8e!2sSanoat%20Texnika%20Universal!5e0!3m2!1sen!2s!4v1686732878909!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Bizga o'z xabaringizni qoldiring</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{route('message.store')}}" method="post" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 @error('message_description') is-invalid @enderror" name="message_description" id="message" cols="30" rows="9" placeholder = 'Xabaringizni kiriting'></textarea>
                                    @error('message_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('client_name') is-invalid @enderror" name="client_name" id="name" type="text" placeholder = 'F.I.O'>
                                    @error('client_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('client_email') is-invalid @enderror" name="client_email" id="email" type="email" placeholder = 'Pochta manzilingiz'>
                                    @error('client_email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control @error('message_title') is-invalid @enderror" name="message_title" id="subject" type="text" placeholder = 'Xabar mavzusi'>
                                    @error('message_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">Xabar jo'natish</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buxoro viloyati, Buxoro shahri.</h3>
                            <p>X. Nosiriy ko'chasi, 23-uy</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+998 (91) 4007555 <br> +998 (90) 7100208</h3>
                            <p>Haftaning barcha kunlari 09:00 dan 19:00 gacha</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>sanoattexuniversal@mail.ru</h3>
                            <p>Pochta orqali xabar qoldirishingiz mumkin!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
