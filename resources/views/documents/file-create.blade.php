@extends('layouts.app', ['activePage' => $activePage, 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="bg-light p-5 rounded">
                            <h1>Add file</h1>
                            
                            <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
                                @include('layouts.partials.messages')
                                @csrf

                    
                                <div class="input-group">

                                    <div class="custom-file">
                                
                                      {{-- <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip"> --}}
                                      <input type="file" name="file" class="form-control" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip">

                                      {{-- <label class="custom-file-label" for="customFileInput">Select file</label> --}}
                                
                                    </div>
                                
                                    {{-- <div class="input-group-append">
                                
                                      <button class="btn btn-primary" type="button" id="customFileInput">Upload</button>
                                
                                    </div> --}}
                                
                                  </div>
                                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Save</button>
                            </form>
                    
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
