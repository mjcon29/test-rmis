


@extends('layouts.app', ['activePage' => $document->status?'archive':'dashboard', 'titlePage' => __('Document')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card form-wrap">
                        <div class="card-body ">
                            <main>
                                <div class="row g-5">
                                        <div class="col-md-4 col-lg-3 order-md-last">
                                            
                                                <ul class="list-group mb-3">

                                                    {{-- @if($lastAction->remarks ?? FALSE) --}}
                                                    @permission(['mark-as-signed'])
                                                        @if (isset($lastAction) && $lastAction !== NULL && !$document->status  && strcmp($lastAction->remarks, 'For Releasing'))
                                                            <li class="d-flex justify-content-between lh-sm ">
                                                                <button class="btn btn-success btn-block signedIcon"
                                                                    @if (!strcmp($lastAction->remarks, 'Signed')) disabled @endif
                                                                    data-id="{{ $document->id }}">
                                                                    @if (!strcmp($lastAction->remarks, 'Signed'))
                                                                        {{ __(' Signed') }} &nbsp;
                                                                    @else
                                                                        {{ __(' Mark as Signed') }} &nbsp;
                                                                    @endif
                                                                    <i class="material-icons @if (strcmp($lastAction->remarks, 'Signed'))  animate__animated animate__infinite animate__headShake animate__slower  @endif">drive_file_rename_outline_icon</i>
                                                                </button>
    
                                                            </li>
                                                        @endif
                                                    @endpermission
                                                    
                                                    @permission(['mark-as-complete'])
                                                        @if (!$document->status)
                                                        <li class="d-flex justify-content-between lh-sm ">
                                                            <button class="btn btn-info btn-block completeIcon"
                                                                data-id="{{ $document->id }}">{{ __(' Mark as Completed') }} &nbsp;
                                                                <i class="material-icons animate__animated animate__infinite animate__heartBeat">check_circle</i>
                                                            </button>
                                                        </li>
                                                        <li class="d-flex justify-content-between lh-sm ">
                                                            <button class="btn btn-archive btn-block archiveIcon"
                                                                data-id="{{ $document->id }}">{{ __(' Archive this!') }} &nbsp;
                                                                <i class="material-icons animate__animated animate__infinite animate__heartBeat">archive</i>
                                                            </button>
                                                        </li>
                                                        @endif
                                                    @endpermission
                                                    @if (!$document->status && strcmp($lastAction->remarks, 'Signed') && strcmp($lastAction->remarks, 'For Releasing'))
                                                    <li class="d-flex justify-content-between lh-sm ">
                                                        <button class="btn btn-dark bg-medium-violet-red btn-block releaseIcon"
                                                            data-id="{{ $document->id }}">{{ __(' For Release') }} &nbsp;
                                                            <i class="material-icons animate__animated animate__infinite animate__heartBeat">check_circle</i>
                                                        </button>
                                                    </li>
                                                    @endif
    
                                                    @role(['return-clerk'])
                                                        <li class="d-flex justify-content-between lh-sm ">
                                                            <button class="btn btn-return btn-block returnIcon"
                                                                data-id="{{ $document->id }}">{{ __(' Return to Sender') }} &nbsp;
                                                                <i class="material-icons animate__animated animate__infinite animate__rotateOut animate__slower">repeat</i>
                                                            </button>
                                                        </li>
                                                    @endrole
    
                                                        @if ((!is_null($lastAction) && $lastAction !== NULL && isRoutedToMe($document->id) && !$document->status) || ( !is_null($lastAction) && Auth::user()->isAbleTo('add-attachment') && !$document->status))
                                                            <li class="d-flex justify-content-between lh-sm ">
                                                                <button class="btn btn-attachment btn-block attachIcon" data-toggle="modal"
                                                                    data-target="#attachDocumentModal" id="{{ $document->id }}"  
                                                                    >
                                                                    <i
                                                                        class="material-icons @if (strcmp($lastAction->remarks, 'Signed')) animate__animated animate__infinite animate__rubberBand animate__slower	3s @endif">attach_file</i>
                                                                    {{ __('ADD ATTACHMENT ') }}
                                                                </button>
                                                            </li>
                                                        @endif
    
                                                        {{-- @endif --}}
{{-- -------------------------------------------------------------------------------------------------------------------                                                         --}}
                                            
                                                    <li class="list-group-item d-flex justify-content-between lh-sm bg-warning">
                                                        <div>
                                                            <h6 class="my-0">{{ __('Date Received') }}</h6>
                                                            <small class="text-muted">{{ $document->action_taken }}</small>
                                                        </div>
                                                        <span>{{ $document->date_received }}</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between lh-sm bg-{{ $document->expired() }} deadline">
                                                        @if (!$document->status)
                                                        <div>                                                        
                                                            <h6 class="my-0">{{ __('Deadline / Schedule') }}</h6>
                                                            <small class="text-muted">{{ $document->required_action }}</small>
                                                        </div>
                                                        <span class="">{{ $document->deadline }}</span>
    
                                                        @else
                                                        <div>                                                        
                                                            <h6 class="my-0">{{ __('Archived at:') }}</h6>
                                                            <small class="text-muted">{{ $document->required_action }}</small>
                                                        </div>
                                                        <span class="">{{ $document->updated_at }}</span>
                                                        @endif
                                                    </li>
    
                                                    <li class="list-group-item d-flex justify-content-between lh-sm bg-dark">
                                                        <div>
                                                            <h6 class="my-0 text-white"> <span class="text-success">From: </span>  {{ $origin }}</h6>
                                                        </div>
                                                        
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
                                                            <small
                                                                class="my-0">{{ __('Last Update (' . $document->updated_at . ')') }}</small>
                                                        </div>
                                                    </li>
                                                    
    
                                                    @if (sizeof($images))
                                                         @if (Auth::user()->isAbleTo('lock-pdf'))
                                                            <li class="d-flex justify-content-between lh-sm ">
                                                                <button
                                                                    class="btn btn-dark btn-block {{ pdfIsLock($images[0]->image_path) ? 'locked' : 'locked decrypted' }}"
                                                                    data-id="{{ $document->id }}"> <span
                                                                        class="lock_text">{{ pdfIsLock($images[0]->image_path) ? 'Unlock' : 'Lock' }}</span>
                                                                    <i
                                                                        class="material-icons {{ pdfIsLock($images[0]->image_path) ? '' : 'animate__animated animate__infinite animate__swing' }}">{{ pdfIsLock($images[0]->image_path) ? 'lock' : 'lock_open' }}</i>
                                                                </button>
                                                            </li>
                                                        @endrole
                                                        <li class="list-group-item d-flex justify-content-between lh-sm">
                                                            <ul class="list-group">
    
                                                                @foreach ($images as $key => $image)
                                                                    <li class="list-group-item pdf">
                                                                        <div class="alert {{ $image->is_attachment? 'alert-attachment':'alert-danger' }}"
                                                                            id="id_{{ $image->id }}">
                                                                            @if(((Auth::user()->id ==$document->user_id) || Auth::user()->hasRole('superadmin') ) && $document->status !=1)
                                                                            {{-- @if((Auth::user()->id ==$document->user_id) && $document->status !=1) --}}
                                                                            <button id="del_{{ $image->id }}" type="button"
                                                                                class="close  deleteIcon deletePDF"
                                                                                data-deltarget="{{ route('doc.delete') }}">
                                                                                <i class="material-icons">close</i>
                                                                            </button>
                                                                            @endif
                                                                            
                                                                            <a href="{{ route('show-pdf', $image->image_path) }}"
                                                                                target="_blank"
                                                                                class="font-weight-bold text-decoration-none pdflink"
                                                                                data-id="{{ $image->id }}">
                                                                                <span class="d-flex">
                                                                                    <i
                                                                                        class="bi bi-filetype-pdf text-light"></i>{{ $image->image_path }}
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
                                    
                                    
                                        <div class="col-md-8 col-lg-9">

                                    <div class="card shadow">
                                        <div
                                            class="card-header card-header-primary d-flex justify-content-between align-items-center">
                                            <h3 class="text-light">
                                                <span class="text-info">{{ __('Routes For: ') }}</span>
                                                {{ __('  ' . $document->subject . ' (' . $origin. ')') }}
                                            </h3>
                                            @permission(['routes-create'])
                                                @if (!$document->status)
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#addRouteModal">
                                                    <i class="bi-plus-circle me-2"></i> Add Route 
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
