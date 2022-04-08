@extends('shop')

@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if ($category->parent_id !== null)
        <li class="breadcrumb-item active" aria-current="page"><a href=" {{route('voir_produits_par_cat',['id'=>$category->parent->id])}} ">{{$category->parent->nom}} </a></li>
        @endif
        <li class="breadcrumb-item active" aria-current="page"> {{$category->nom}} </li>
        @foreach ($category->childrens as $children)
        <li class="breadcrumb-item"><a href=" {{route('voir_produits_par_cat',['id'=>$children->id])}}">{{$children->nom}} </a></li>
        @endforeach


    </ol>
</nav>

<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            <div class="row">
                @foreach ($articles as $article)

                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src=" {{asset('produits/'.$article->photo_produit)}} " class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text"> {{$article->nom}} <br>{{$article->description}} </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price"> {{$article->prix_ht}} </span>
                                    <a href=" {{route('voir_produit',['id'=>$article->id])}} " class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach




            </div>


        </div>
    </div>

</main>

@endsection
