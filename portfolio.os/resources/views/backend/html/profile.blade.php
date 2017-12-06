@extends('backend.html.layout')
@section('content')
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Профіль</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin-index') }}">Головна</a></li>
                    <li class="active">Профіль</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <!-- .row -->
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="white-box">
                    <div class="user-bg"><img width="100%" alt="user" src="{{ Auth::user()->image_url }}">
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)"><img
                                            src="{{ asset('profile_images') }}/{{ Auth::user()->image_url }}.jpg"
                                            class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">{{ Auth::user()->name }}</h4>
                                <h5 class="text-white">{{ Auth::user()->email }}</h5></div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-purple"><i class="ti-facebook"></i></p>
                            <h1>258</h1></div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-blue"><i class="ti-twitter"></i></p>
                            <h1>125</h1></div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <p class="text-danger"><i class="ti-dribbble"></i></p>
                            <h1>556</h1></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="white-box">
                    <form class="form-horizontal form-material" enctype="multipart/form-data" method="POST"
                          action="{{ route('update-user') }}">
                        <div class="form-group">
                            <label class="col-md-12">Ваше ім'я</label>
                            <div class="col-md-12">
                                <input type="text" name="name" value="{{ Auth::user()->name }}"
                                       placeholder="Johnathan Doe" class="form-control form-control-line"></div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input type="email" value="{{ Auth::user()->email }}" placeholder="johnathan@admin.com"
                                       class="form-control form-control-line" name="email" id="email"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Пароль</label>
                            <div class="col-md-12">
                                <input type="text" name="password"
                                       value="{{ \Illuminate\Support\Facades\Crypt::decrypt(Auth::user()->password) }}"
                                       class="form-control form-control-line"></div>
                        </div>

                        <script>
                            jQuery(function ($) {
                                $("#phone_number").mask("(999) 999-9999");
                            });
                        </script>


                        <div class="form-group">
                            <label class="col-md-12">Телефон</label>
                            <div class="col-md-12">
                                <input type="text" name="phone_number" id="phone_number"
                                       value="{{ Auth::user()->phone_number }}" placeholder="123 456 7890"
                                       class="form-control form-control-line"></div>
                        </div>
                        @if(Auth::user()->role == 'admin')
                            <div class="form-group">
                                <label class="col-sm-12">Права</label>
                                <div class="col-sm-12">
                                    <span>{{ Auth::user()->role }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-sm-12">Карта</label>
                            <div class="col-sm-12">
                                <span>Введіть номер своєї карти:</span>
                                <br>
                                <input type="text" value="{{ Auth::user()->cart_number }}" id="card_number"
                                       name="card_number" placeholder="0000 0000 0000 0000"
                                       class="form-control form-control-line">
                                <script>
                                    jQuery(function ($) {
                                        $("#card_number").mask("9999 9999 9999 9999");
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-12">IP</label>
                            <div class="col-sm-12">
                                <span>{{ $_SERVER['REMOTE_ADDR'] }}</span>
                                <input type="hidden" value="{{ $_SERVER['REMOTE_ADDR'] }}" name="remote_addr">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Оновити фото</label>
                            <div class="col-sm-12">
                                <input type="file" name="avatar">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success">Оновити профіль</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection