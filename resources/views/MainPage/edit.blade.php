@extends('layouts.app2')
        
@section('content')

       

            <section class="page-section" id="contact">
            <div class="container">

            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj komponent  {{ $wyslij->code }}</h2>

            <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                       
                        <form action="{{ route ('update', ['id'=>$wyslij->id]) }}" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            {{ csrf_field() }}
                            @method('PUT')
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $wyslij->name}}" class="form-control" id="name" name="name" type="text" placeholder="Nazwa komponentu" data-sb-validations="required" />
                                <label for="name">Nazwa</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Podaj nazwe.</div>
                            </div>
                            @if ($errors->has('name'))
                            <div style="color: red;"> {{ $errors->first('name') }} </div>
                        @endif
                            <!-- Kod input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $wyslij->code}}" class="form-control" id="code" name="code" type="text" placeholder="Kod komponentu" data-sb-validations="required" />
                                <label for="code">Kod</label>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Podaj kod.</div>
                            </div>
                            @if ($errors->has('code'))
                            <div style="color: red;"> {{ $errors->first('code') }} </div>
                        @endif
                            <!-- Ilosc input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $wyslij->quantity}}" class="form-control" id="que" name="que" type="text" placeholder="Ilosc komponentu" data-sb-validations="required" />
                                <label for="que">Ilosc</label>
                                <div class="invalid-feedback" data-sb-feedback="que:required">Podaj ilosc.</div>
                            </div>
                            @if ($errors->has('que'))
                            <div style="color: red;"> {{ $errors->first('que') }} </div>
                        @endif
                            <!-- Lokacja input-->
                            <div class="form-floating mb-3">
                                <input value="{{ $wyslij->location}}" class="form-control" id="location" name="location" type="text" placeholder="Lokacja komponentu" data-sb-validations="required" />
                                <label for="location">Lokacja</label>
                                <div class="invalid-feedback" data-sb-feedback="location:required">Podaj lokacje.</div>
                            </div>
                            @if ($errors->has('location'))
                            <div style="color: red;"> {{ $errors->first('location') }} </div>
                        @endif

                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Zapisz komponent</button></div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection