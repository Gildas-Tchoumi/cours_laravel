@extends('welcome')

@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <h3 class="title m-2 text-uppercase">Update Unites</h3>
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="modal-body">
                        <div class="card-body">
                            <form method="post" action="{{ route('unites.update',$unit->id) }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Nom </label>
                                            <input class="form-control" id="inputFirstName" name="name" type="text" value="{{ $unit->name }}"/>
                                        </div>
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Abreviation </label>
                                            <input class="form-control" id="inputFirstName" name="abreviation"
                                                type="text" value="{{ $unit->abreviation }}"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">Status </label>
                                            <select name="status" id="status"">
                                                <option value="1"  {{ $unit->status == 1  ? 'selected' : ''}} >Detaillable</option>
                                                <option value="0" {{ $unit->status == 0  ? 'selected' : '' }}>Non Detaillable</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="inputEmail">Description</label><br>
                                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"> {{ $unit->description }}</textarea>

                                </div>

                                <div class="mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
