@extends('main.layout.master')
@section('title', 'Kurslar')
@section('content')

    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <h3 class="mb-30">ST Universal Nodavlat Ta'lim Muassasasi</h3>
                <div class="row">
                    <div class="col-lg-12">
                        <blockquote class="generic-blockquote">
                            “Sanoat Texnika Universal Nodavlat ta'lim muassasasi 2015-yildan boshlab sanoat sohasidagi korxona va tashkilotlarga quyida jadvaldagi yo'nalishlar,
                            kurslar bo'yicha malaka oshirish, seminar training va qayta tayyorlovni amalga oshirib kelmoqda. Shu kunga qadar o'quv markazimizni 25 000 dan ziyod tinglovchi muvofaqqiyatli tamomlab turli shahar va davlatlarga borib o'zlari faoliyat yuritadigan korxona rivoji uchun o'z hissalarini qo'shib kelmoqdalar.”
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="section-top-border">
                <h3 class="mb-30">O'quv markazimizdagi yo'nalishlar ro'yxati</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Kurs nomi</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="visit">Malaka oshirish</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="percentage">Qayta tayyorlash</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="percentage">Seminar</div>
                        </div>
                        @for($i=0; $i<count($courses); $i++)
                            <div class="table-row">
                                <div class="serial">{{$i+1}}</div>
                                <div class="country">{{$courses[$i]}}</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="visit"><i style="color: #08c773; font-size: 26px;margin-left: 50px" class="fa-solid fa-square-plus"></i></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="percentage">
                                    <i style="color: #08c773; font-size: 26px;margin-left: 50px" class="fa-solid fa-square-plus"></i>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="percentage"><i style="color: #08c773; font-size: 26px;margin-left: 50px" class="fa-solid fa-square-plus"></i></div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <a href="{{asset('main/docs/yunalishlar.docx')}}" class="btn btn-danger mb-3">O'quv yo'nalishlari faylini yuklab olish</a>
        </div>
    </div>

@endsection

<br>

{{--<div class="table-row">--}}
{{--    <div class="serial">01</div>--}}
{{--    <div class="country">Автокара ҳайдовчилари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">02</div>--}}
{{--    <div class="country">Автомобилларга техник хизмат кўрсатиш бўйича техник-механиклар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-2" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">03</div>--}}
{{--    <div class="country">Сварщики (Аргонодуговая)</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-3" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">04</div>--}}
{{--    <div class="country">Аттракционларда ишловчи--}}
{{--        механик, оператор-ўрнаштирувчилар--}}
{{--    </div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-4" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">05</div>--}}
{{--    <div class="country">Баландликда (Юкорида) ишловчилар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-5" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">06</div>--}}
{{--    <div class="country">Автотранспорт ҳайдовчиларининг Меҳнат муҳофазаси, техника ва йўл ҳаракат хавфсизлиги</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-6" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">07</div>--}}
{{--    <div class="country">Босим остида ишловчи идишлар билан ишловчилар ва жавобгар шахслар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-7" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">08</div>--}}
{{--    <div class="country">Нефт ва газ қудуқларини бурғуловчилари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">09</div>--}}
{{--    <div class="country">Машинист дизелистлар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">10</div>--}}
{{--    <div class="country">ИТР и работники--}}
{{--        АЗС, АГЗС, АГНКС--}}
{{--    </div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">11</div>--}}
{{--    <div class="country">Нефт ва газ саноати корхоналари мухандислари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">12</div>--}}
{{--    <div class="country">Қозонхона машинистлари, жавобгар шахслар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">13</div>--}}
{{--    <div class="country">Барча турдаги кранлар машинистлари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">14</div>--}}
{{--    <div class="country">Қурувчилар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">15</div>--}}
{{--    <div class="country">Лифтёров</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">16</div>--}}
{{--    <div class="country">ММваТХ</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">17</div>--}}
{{--    <div class="country">Ошпазлар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">18</div>--}}
{{--    <div class="country">ПДК (Доимий Ҳаракатдаги Комиссия)</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">19</div>--}}
{{--    <div class="country">Нефт ва газ қудуқларини бурғуловчи ёрдамчиси</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">20</div>--}}
{{--    <div class="country">Созловчи(слесарь)лар </div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">21</div>--}}
{{--    <div class="country">Трактор (экскаватор, бульдозер, фронталь юклагич) ҳайдовчилари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">22</div>--}}
{{--    <div class="country">Хавфли юк ташувчи автомашина ҳайдовчилари</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">23</div>--}}
{{--    <div class="country">Электргазпайвандловчилар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">24</div>--}}
{{--    <div class="country">Электрик (электр монтажчи, электр созловчи) лар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">25</div>--}}
{{--    <div class="country">Юк илдирувчилар</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">26</div>--}}
{{--    <div class="country">Слесарь по КИПиА</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">27</div>--}}
{{--    <div class="country">Правила безопасности в газовом хозяйстве</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">28</div>--}}
{{--    <div class="country">Машинистов компрессорных установ</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">29</div>--}}
{{--    <div class="country">Правила устройства и безопасной эксплуатации сосудов, работающих под давлением</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">30</div>--}}
{{--    <div class="country">Пожарно-технический минимум для руководителей, специалистов и--}}
{{--        лиц, ответственных за пожарную безопасность--}}
{{--    </div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">31</div>--}}
{{--    <div class="country">Слесари   по   ремонту  и   обслуживанию   технологических   установок</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
{{--<div class="table-row">--}}
{{--    <div class="serial">32</div>--}}
{{--    <div class="country">Правила устройства и безопасной эксплуатации факельных систем</div>--}}
{{--    <div class="visit">645032</div>--}}
{{--    <div class="percentage">--}}
{{--        <div class="progress">--}}
{{--            <div class="progress-bar color-8" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0"--}}
{{--                 aria-valuemax="100"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="percentage">Seminar</div>--}}
{{--</div>--}}
