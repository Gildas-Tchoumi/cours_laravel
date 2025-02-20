@extends('welcome')

@section('content')
    <section id="shopping-cart">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title-wrap bar-warning">
                  <h4 class="card-title">liste des roles</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="card-block">
                  <a href="{{ route('roles.create') }}" class="btn btn-success">Ajouter role</a>
                  <div class="table-responsive">
                    <table
                      id="recent-orders"
                      class="table table-hover table-xl mb-0"
                    >
                      <thead>
                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Nom</th>
                          <th class="border-top-0">Description</th>
                          <th class="border-top-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $roles as $cat)
                        <tr>
                          <td class="text-truncate">
                            <a href="#">{{ $cat->id }}</a>
                          </td>
                          <td class="text-truncate">
                           {{ $cat->name }}
                          </td>
                          <td class="text-truncate">
                            {{ $cat->description }}
                          </td>
                          <td>
                            <a href="#" class="success p-0" data-original-title="" title=""><i
                              class="fa fa-pencil font-medium-3 mr-2"></i></a>
                      <a href="#" class="info p-0" data-original-title="" title=""><i
                              class="fa fa-check font-medium-3 mr-2"></i></a>
                      <a href="#" class="danger p-0" data-original-title="" title=""><i
                              class="fa fa-trash-o font-medium-3 mr-2"></i></a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection