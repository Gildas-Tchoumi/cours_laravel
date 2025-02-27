@extends('Auth.login')

@section('title', 'Create users')

@section('styles')

@endsection

@section('container')
        <div class="content-wrapper">
            <h3 class="title m-2 text-uppercase">S'inscrire</h3>
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="modal-body">
                        <div class="card-body">
                            <form method="post" action="{{ route('utilisateur.store') }}">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <label for="inputFirstName">First Name</label>
                                            <input class="form-control" id="inputFirstName" name="first_name" type="text"
                                                placeholder="Enter your first name" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Last Name</label>
                                            <input class="form-control" id="inputLastName" name="last_name" type="text"
                                                placeholder="Enter your last name" />
                                        </div>
                                    </div>
                                    <div class="col-md-8 mt-3">
                                        <div class="form-floating">
                                            <label for="inputLastName">Email</label>
                                            <input class="form-control" id="inputLastName" name="email" type="email"
                                                placeholder="Ex: exemple@gmail.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="inputEmail">Pass Word</label><br>
                                    {{-- <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"></textarea> --}}
                                    <input class="form-control" id="inputEmail" type="password" name="password"
                                        placeholder="Enter your password" />
                                </div>
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPassword" type="password"
                                                placeholder="Create a password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" id="inputPasswordConfirm" type="password"
                                                placeholder="Confirm password" />
                                            <label for="inputPasswordConfirm">Confirm Password</label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary btn-block">Create</button>
                                    {{-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create</a></div> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer grey darken-1">
            {{-- <div class="text-center mb-1">Forgot Password? <a><b>Reset</b></a></div> --}}
            <div class="text-center">Don't have an account? <a href="{{ route('login') }}"><b>SignIn</b></a></div>
        </div>
@endsection
<!-- Modal -->
{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Students</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div> --}}
