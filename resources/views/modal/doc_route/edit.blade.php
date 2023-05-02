<div class="modal fade" id="editRouteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog small" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title"> {{ __('Update Route') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
{{-- {{ dd($document->docRouteUsers) }} --}}
{{-- @foreach ($document->docRouteUsers as $docRouteUser)
 {{ $docRouteUser->user_id }}
@endforeach --}}

                <form action="{{ route('docroutes.create') }}" id="add_route_form" name="add_route_form">
                    {{-- <form> --}}
                    @csrf
                    @method('post')
                    <input type="hidden" name="document_id">
                    {{-- <input type="hidden" name="document_id" value="{{$document->id}}"> --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group info">
                                        <label for="RouteUser" class="bmd-label-static"> {{ __('Assign to:') }}</label>
                                        <select name="RouteUser" id="RouteUser" class="form-control selectpicker" data-live-search="true"  multiple title="No one selected">
                                            @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                                                         
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group action">
                                        <label for="RouteAction" class="form-label">Action</label>
                                        <select name="RouteAction" id="RouteAction" class="form-control selectpicker" data-live-search="true"  multiple title="No one selected">
                                            @foreach ($actions as $action)
                                            <option value="{{ $action->id }}">{{ $action->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="RouteRemarks" class="form-label">Remarks</label>
                                        <textarea name="remarks" id="RouteRemarks" cols="30" rows="10" class="form-control"> </textarea>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="submit" id="editRoute" class="btn btn-success float-left">Update</button>
                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@push('js')
    <script>
        // var app = @json($document->docRouteUsers);
        // $(document).ready(function() {
        //     console.log(app);
        //     $('#RouteUser.selectpicker').selectpicker('val', app);
        // });
        
    </script>


@endpush
