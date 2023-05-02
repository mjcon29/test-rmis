@extends('layouts.app', ['activePage' => $activePage, 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="bg-light p-5 rounded">
                            <h1>Files</h1>
                            <a href="{{ route('files.create') }}" class="btn btn-primary float-right mb-3">Add file</a>
                    
                            @include('layouts.partials.messages')
                    
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Size</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($files as $file)
                                  <tr>
                                    <td width="3%">{{ $file->id }}</td>
                                    <td>{{ $file->name }}</td>
                                    <td width="10%">{{ $file->size }}</td>
                                    <td width="10%">{{ $file->type }}</td>
                                    <td width="5%"><a href="{{ $file->type }}" class="btn btn-danger btn-sm">Delete</a></td>
                                  </tr>
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Document modal start --}}
            {{-- @include('modal.document.add') --}}
            @include('modal.document.add')
            @include('modal.document.edit')
            {{-- Document modal end --}}
        </div>
    </div>
@endsection
@push('footer')
    @include('scripts.documents_crud')
    @include('scripts.dropzone')
    <script>fetchAllDocuments();</script>
    
@endpush

@push('js')
    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
            if ($('.alert').length) {
                setInterval(() => {
                    $('.alert').addClass("fadeOutUp");
                }, 3000);

            }
        });
    </script>

    <script src="{{ asset('auto.js') }}"></script>

@endpush
