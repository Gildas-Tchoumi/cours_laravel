@extends('welcome')

@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <h3 class="title m-2 text-uppercase">Create categories</h3>
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="modal-body">
                        <div class="card-body">
                            <form method="post" action="{{ route('categories.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Nom </label>
                                            <input class="form-control" id="inputFirstName" name="name" type="text" />
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="form-floating mb-3">
                                    <label for="inputEmail">Description</label><br>
                                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"></textarea>

                                </div>

                                <div class="mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
