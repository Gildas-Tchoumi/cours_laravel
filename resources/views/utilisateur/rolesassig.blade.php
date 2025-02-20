@extends('welcome')

@section('title', 'Roles')

@section('styles')


@endsection


@section('content')
    <div class="main-content">
        <div class="content-wrapper">
            <h1 class="title m-2 text-uppercase">Roles Asign</h1>
            <div class="container-fluid"><!--Statistics cards Starts-->
                
                <div class="row">

                    <div class="container">
                        {{-- @dd($roles); --}}
                        <h2>Assign roles to user: {{ $utilisateur->first_name }}</h2>
                        <form 
                        action="{{ route('utilisateur.Rolesutilisateur',$utilisateur->id) }}" 
                        method="POST">
                            @csrf
                            <div class="mb-3">
                                <h4>Roles</h4>
                                @foreach ($roles as $role)
                                    <div class="form-check">
                                        <input 
                                            class="form-check-input" 
                                            type="checkbox" 
                                            name="roles_id[]" 
                                            value="{{ $role->id }}" 
                                            id="role-{{ $role->id }}" 
                                            {{-- {{ $user->role->contains($id) ? 'checked' : '' }} --}}
                                        >
                                        <label class="form-check-label" 
                                        for="role-{{ $role->id }}"
                                        >
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

                {{-- <a href="" class="btn btn-success">Asign Roles</a> --}}
            </div>
        </div>
    </div>

    
@endsection
