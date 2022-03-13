@extends('layouts.app2')
@section('content')

        <section class=" page-section komponenty" id="komponenty">
            <div class="container">
        <style>.alert {
        padding: 20px;
        background-color: #90EE90;
        color: black;
        }

        .closebtn {
        margin-left: 15px;
        color: black;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }
        </style>

            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            {{ session()->get('message')}}
            </div>
            @endif

                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">komponenty</h2>

                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa:</th>
                    <th scope="col">Kod:</th>
                    <th scope="col">Ilosc:</th>
                    <th scope="col">Lokacja:</th>
                    <th scope="col">Data utworzenia:</th>
                    <th scope="col">Aktualizacja:</th>
                    <th scope="col">Akcje:</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($komponenty as $komponent)
                    
                    <tr>
                    <th scope="row">{{ $x ++}}.</th>
                    <td>{{ $komponent->name}}</td>
                    <td>{{ $komponent->code}}</td>
                    <td>{{ $komponent->quantity}} szt.</td>
                    <td>{{ $komponent->location}}</td>
                    <td>{{ $komponent->date}}</td>
                    <td>{{ $komponent->upde}}</td>
                    <td><a href="{{route('edit',['id'=> $komponent->id])}}" class="btn btn-default" >Edytuj</a>
                    <form action="{{route('destroy',['id'=> $komponent->id])}}" method="post" id="delete-form-{{$komponent->id}}" style="display: none;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    </form>
                    <a class="btn btn-default href="" onclick="
                    if(confirm('Czy napewno chcesz usunąć?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$komponent->id}}').submit();
                        }else{
                            event.preventDefault();
                            }">
                    Usuń
                </td>
                    @endforeach
                    </tr>
                </tbody>
                </table>
            </div>
        </section>
  
@endsection

@section('contentt')


dupa
@endsection