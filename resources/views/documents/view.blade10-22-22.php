@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Document')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card form-wrap">
                    <div class="card-body ">
                        <main>
                            <div class="row g-5">

                                @if (!$document->status)
                                <div class="col-md-5 col-lg-4 order-md-last">
                                    <ul class="list-group mb-3">

                                        @role(['superadmin'])
                                        {{-- not yet sined --}}
                                        @if (isset($lastAction))
                                        <li class="d-flex justify-content-between lh-sm ">


                                            <button class="btn btn-info btn-block signedIcon" @if (!strcmp($lastAction->remarks, 'Signed')) disabled @endif
                                                data-id="{{ $document->id }}">
                                                @if (!strcmp($lastAction->remarks, 'Signed'))
                                                {{ __(' Signed') }} &nbsp;
                                                @else
                                                {{ __(' Mark as Signed') }} &nbsp;
                                                @endif

                                                <i class="material-icons @if (strcmp($lastAction->remarks, 'Signed')) animate__animated animate__infinite animate__heartBeat @endif">check_circle</i>
                                            </button>

                                        </li>
                                        @endif
                                        @else
                                        <li class="d-flex justify-content-between lh-sm ">
                                            <button class="btn btn-info btn-block completeIcon" data-id="{{ $document->id }}">{{ __(' Mark as Completed') }} &nbsp;
                                                <i class="material-icons animate__animated animate__infinite animate__heartBeat">check_circle</i>
                                            </button>
                                        </li>
                                        @endrole


                                        @permission(['routes-update'])
                                        <li class="d-flex justify-content-between lh-sm ">
                                            <button class="btn btn-attachment btn-block attachIcon" data-toggle="modal" data-target="#attachDocumentModal" id="{{ $document->id }}">
                                                <i class="material-icons animate__animated animate__infinite animate__rubberBand animate__slower	3s">attach_file</i>
                                                {{ __('ADD ATTACHMENT') }}
                                            </button>
                                        </li>
                                        @endpermission
                                        <li class="list-group-item d-flex justify-content-between lh-sm bg-warning">
                                            <div>
                                                <h6 class="my-0">{{ __('Date Received') }}</h6>
                                                <small class="text-muted">{{ $document->action_taken }}</small>
                                            </div>
                                            <span>{{ $document->date_received }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-sm bg-{{ $document->expired() }} deadline">
                                            <div>
                                                <h6 class="my-0">{{ __('Deadline / Schedule') }}</h6>
                                                <small class="text-muted">{{ $document->required_action }}</small>
                                            </div>
                                            <span class="">{{ $document->deadline }}</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <div>
                                                <h6 class="my-0">{{ $document->doctype->name }}</h6>
                                                <small class="my-0">{{ __('Means of Receiving') }}</small>
                                            </div>
                                            <span class="text-muted">{{ $document->MeansOfReceiving->name }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <div>
                                                <h6 class="my-0">{{ $document->user->name }}</h6>
                                                <small class="my-0">{{ __('Last Update (' . $document->updated_at . ')') }}</small>
                                            </div>
                                        </li>

                                        {{-- <li class="d-flex justify-content-between lh-sm ">
                                                <button class="btn btn-success btn-block completeIcon" data-id="{{$document->id}}" >{{ __("SYNC Files")}} &nbsp; <i class="material-icons animate__animated animate__infinite animate__heartBeat rotating">sync</i> </button>
                                        </li> --}}
                                        @if (sizeof($images))
                                        @role(['superadmin'])
                                        <li class="d-flex justify-content-between lh-sm ">
                                            <button class="btn btn-dark btn-block {{ pdfIsLock($images[0]->image_path) ? 'locked' : 'locked decrypted' }}" data-id="{{ $document->id }}"> <span class="lock_text">{{ pdfIsLock($images[0]->image_path) ? 'Unlock' : 'Lock' }}</span>
                                                <i class="material-icons {{ pdfIsLock($images[0]->image_path) ? '' : 'animate__animated animate__infinite animate__swing' }}">{{ pdfIsLock($images[0]->image_path) ? 'lock' : 'lock_open' }}</i>
                                            </button>
                                        </li>
                                        @endrole
                                        <li class="list-group-item d-flex justify-content-between lh-sm">
                                            <ul class="list-group">

                                                @foreach ($images as $key => $image)
                                                <li class="list-group-item pdf">
                                                    <div class="alert {{ $image->is_attachment? 'alert-attachment':'alert-danger' }}" id="id_{{ $image->id }}">
                                                        <button id="del_{{ $image->id }}" type="button" class="close  deleteIcon deletePDF" data-deltarget="{{ route('doc.delete') }}">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                        <a href="{{ route('show-pdf', $image->image_path) }}" target="_blank" class="font-weight-bold text-decoration-none pdflink" data-id="{{ $image->id }}">
                                                            <span class="d-flex">
                                                                <i class="bi bi-filetype-pdf text-light"></i>{{ $image->image_path }}
                                                            </span>
                                                        </a>

                                                    </div>

                                                </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                        @endif

                                    </ul>
                                </div>
                                @endif
                                @if (!$document->status)
                                <div class="col-md-7 col-lg-8">
                                    @else
                                    <div class="col-md-12">
                                        @endif
                                        <div class="card shadow">
                                            <div class="card-header card-header-primary d-flex justify-content-between align-items-center">
                                                <h3 class="text-light">
                                                    {{ __('Routes For -  ' . $document->subject . ' (' . $document->originOffice->name . ')') }}
                                                </h3>
                                                @permission(['routes-create'])
                                                @if (!$document->status)
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addRouteModal">
                                                    <i class="bi-plus-circle me-2"></i> Add
                                                </button>
                                                @endif
                                                @endpermission
                                            </div>

                                            <div class="card-body " id="show_all_documents">
                                                @include('layouts.components.loader')

                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </main>
                    </div>
                    <div id="example1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('modal.view_pdf')
@include('modal.add_route')
@include('modal.edit_route')
@include('modal.document.addAttachment')
@endsection
@push('footer')
@include('scripts.route_crud')
@endpush

@push('js')
<script src="https://unpkg.com/pdfobject@2.2.7/pdfobject.min.js"></script>
{{-- @if (!empty($document->images[0]))
        <script type="text/javascript">
            $(function() {
                $("a.pdflink").attr('href', url);
            });
        </script>
    @endif --}}

<script type="text/javascript">
    $(function() {
        $('.datepicker').datepicker();
    });
</script>
<script src="{{ asset('auto.js') }}"></script>
@endpush