@extends('welcome')
@section('title', 'liste des produits')

@section('styles')

@endsection
@section('content')
    <h3 class="title m-2 text-uppercase">Liste des produits</h3>
    <div class="container-fluid"><!--Statistics cards Starts-->
        <a href="{{ route('products.create') }}" class="btn btn-info mt-3"><i class="ft-plus"></i> Ajouter
            un
            produit</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">code</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Qunatite</th>
                        <th scope="col">Qté min</th>
                        <th scope="col">Description</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Unites</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $items)
                        <tr>
                            <th scope="row">{{ $items->id }}</th>
                            <th scope="row">{{ $items->name }}</th>
                            <th scope="row">{{ $items->code }}</th>
                            <th scope="row">{{ $items->price }}</th>
                            <th scope="row">{{ $items->quantity }}</th>
                            @if ($items->quantity > $items->quantity_min)
                                <td><i class="fa fa-dot-circle-o success font-medium-1 mr-1"></i>{{ $items->quantity_min }}
                                </td>
                            @else
                                <td><i class="fa fa-dot-circle-o danger font-medium-1 mr-1"></i> {{ $items->quantity_min }}
                                </td>
                            @endif
                            <td>{{ $items->description }}</td>
                            <td>{{ $items->category->name ?? 'N/A' }}</td>
                            <td>{{ $items->unites->name ?? 'N/A' }}</td>
                            <td>
                                <a href="#" class="success p-0" data-original-title="" title=""><i
                                        class="fa fa-pencil font-medium-3 mr-2"></i></a>
                                <a href="#" class="info p-0" data-original-title=""
                                    title=""><i class="fa fa-check font-medium-3 mr-2"></i></a>
                                <a href="#" class="danger p-0" data-original-title="" title=""><i
                                        class="fa fa-trash-o font-medium-3 mr-2"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
