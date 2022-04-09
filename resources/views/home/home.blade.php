@extends('welcome')
@section('content')
    <section class="first-section">
        <div class="first-section-text">
            <h1>
                <div class="first-color">Кофейный </div> уголок
            </h1>
        </div>
    </section>
    <aside>
        <a href="#" target="_bl"><img src="/public/image/icons/1.png" alt=""></a>
        <a href="https://twitter.com/navalny" target="_bl"><img src="/public/image/icons/2.png" alt=""></a>
        <a href="#" target="_bl"><img src="/public/image/icons/3.png" alt=""></a>
    </aside>
    <section class="services" id="service">
        <h1 style="text-align: center; color: blanchedalmond; font-size: 37px !important;">Почему мы?</h1>
        <br><br>
        <div class="container">
            <div class="row">
                    <div class="service-single">
                        <div class="icon-box"><i class="flaticon-chef"></i></div>
                        <h3>Профессиональная команда</h3>
                        <p>lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum  dummy text lorem ispum</p>
                    </div>

                    <div class="service-single">
                        <div class="icon-box"><i class="flaticon-recipe"></i></div>
                        <h3>Разнообразное меню</h3>
                        <p>lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum  dummy text lorem ispum</p>
                    </div>

                    <div class="service-single">
                        <div class="icon-box"><i class="flaticon-coffee-cup"></i></div>
                        <h3>Вкуснейший кофе</h3>
                        <p>lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum dummy text lorem ispum  dummy text lorem ispum</p>
                    </div>

            </div>
        </div>
    </section>
@endsection
