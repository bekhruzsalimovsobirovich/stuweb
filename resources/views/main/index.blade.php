@extends('main.layout.master')
@section('title', 'Asosiy sahifa')
@section('content')
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Sanoat
                                texnika <span>Universal</span> NTM</h1>
                            <p>Sanoat texnika universal o'quv markazimizda malaka oshirish va <br>qayta tayyorlovdan o'tib o'z kasbingizni yetuk mutaxassisiga aylaning.</p>
                            <a href="{{route('courses')}}" class="btn_1">Kurslar ro'yxati</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_service padding_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_tittle">
                        <h1>O'quv markazimizdagi ta'lim shakllari</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service">
                            <span class="flaticon-ui"></span>
                            <h4>Malaka oshirish</h4>
                            <p>Sanoat texnika universal nodavlat ta'lim muassasamizda malaka oshirishda kerakli bilim va ko'nikmalarni egallab sertifikat, guvuhnoma va malaka oshirganligini tasdiqlovchi ID karta olishingiz mumkin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service">
                            <span class="flaticon-ui"></span>
                            <h4>Qayta tayyorlov</h4>
                            <p>Sanoat texnika universal nodavlat ta'lim muassasamizda qayta tayyorlovda kerakli bilim va ko'nikmalarni egallab sertifikat, guvuhnoma va qayta tayyorganligini tasdiqlovchi ID karta olishingiz mumkin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_feature">
                        <div class="single_service single_service_2">
                            <span class="flaticon-ui"></span>
                            <h4>Seminar</h4>
                            <p>Sanoat texnika universal nodavlat ta'lim muassasamizda seminar traininglarda kerakli bilim va ko'nikmalarni egallab sertifikat, guvuhnoma va seminar trainingdan o'tganligini tasdiqlovchi ID karta olishingiz mumkin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about part start-->
    <section class="about_part experiance_part section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_text">
                        <h2 style="font-size: 58px">Bizda muhandislarini
                            tayyorlashda tajriba katta</h2>
                        <p>O'quv markazimizda malakali o'qituvchi mutaxassis👨🏻‍🎓 tomonidan tinglovchilar malakasini oshirish va qayta tayyorlov amalga oshirilib kelinmoqda. Tinglovchilar yakuniy imtixonlarni muvofaqqiyatli📣 topshirganlaridan so'ng kerakli hujjatlarni 🎓diplom, 🎫💳🪪sertifikat va guvohnomalarni qabul qiladilar, shuningdek tinglovchilar malaka oshirganligi va qayta tayyorlanganligini tasdiqlovchi 💳🎫🪪 ID kartalarga ham ega bo'lishadi.</p>
                        <div class="about_text_iner">
                            <div class="about_text_counter">
                                <h2>{{date("Y")-2015}}</h2>
                            </div>
                            <div class="about_iner_content">
                                <h3>yillik <span>Tajriba</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_part_img">
                        <img src="{{asset('main/img/experiance_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="member_counter padding_bottom">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{asset('main/img/icon/Icon_1.svg')}}" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span style="font-size: 44px" class="counter">26527</span>
                        <h4> <span>Bitiruvchilar soni</span> tinlovchi</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{asset('main/img/icon/Icon_2.svg')}}" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span style="font-size: 44px" class="counter">43</span>
                        <h4> <span>Tashkilotlar soni</span> Hamkor</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_counter_icon">
                        <img src="{{asset('main/img/icon/Icon_3.svg')}}" alt="">
                    </div>
                    <div class="single_member_counter">
                        <span style="font-size: 44px" class="counter">32</span>
                        <h4> <span>Yo'nalishlar soni</span> kurslar</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_project section_padding" id="portfolio">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-10">
                    <div class="section_tittle">
                        <h2>Galereya</h2>
                    </div>
                </div>
            </div>
            <div class="filters-content">
                <div class="row justify-content-between portfolio-grid">
                    <div class="col-lg-4 col-sm-6 all buildings">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm1.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm2.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm3.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-between portfolio-grid">
                    <div class="col-lg-4 col-sm-6 all buildings">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm4.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm5.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="">
                                <img src="{{asset('gallery/rasm6.jpg')}}" alt="offer_img_1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
