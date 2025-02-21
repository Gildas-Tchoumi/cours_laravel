@extends('welcome')

@section('content')
    <section id="shopping-cart">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title-wrap bar-warning">
                  <h4 class="card-title">liste des unites</h4>
                </div>
              </div>
              <div class="card-body">
                <div class="card-block">
                  <a href="{{ route('unites.create') }}" class="btn btn-success">Ajouter unites</a>
                  <div class="table-responsive">
                    <table
                      id="recent-orders"
                      class="table table-hover table-xl mb-0"
                    >
                      <thead>
                        <tr>
                          <th class="border-top-0">#</th>
                          <th class="border-top-0">Status</th>
                          <th class="border-top-0">Nom</th>
                          <th class="border-top-0">Abréviation</th>
                          <th class="border-top-0">Description</th>
                          <th class="border-top-0">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $unite as $u)
                        <tr>
                          <td class="text-truncate">
                            <a href="#">{{ $u->id }}</a>
                          </td>
                          @if ($u->status == 1)
                          <td class="text-truncate">
                            <i
                              class="fa fa-dot-circle-o success font-medium-1 mr-1"
                            ></i>
                            Detaillable
                          </td>
                          @else
                            <td class="text-truncate">
                            <i
                              class="fa fa-dot-circle-o danger font-medium-1 mr-1"
                            ></i>
                            Non Detaillable
                          </td>
                          @endif
                          <td class="text-truncate">
                           {{ $u->name }}
                          </td>
                          <td class="text-truncate">
                            {{ $u->abreviation }}
                          </td>
                          <td class="text-truncate">
                            {{ $u->description }}
                          </td>
                          <td>
                            <a href="{{ route('unites.edit', $u->id) }}" class="success p-0" data-original-title="" title=""><i
                              class="fa fa-pencil font-medium-3 mr-2"></i></a>
                      <a href="#" class="info p-0" data-original-title="" title=""><i
                              class="fa fa-check font-medium-3 mr-2"></i></a>
                      <a href="{{ route('unites.delet', $u->id) }}" class="danger p-0" data-original-title="" title=""><i
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