<div class="modal fade" id="addRouteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content card shadow">
            <div class="modal-header card-header card-header-primary d-flex justify-content-between align-items-center">
                <h5 class="modal-title"> {{ __('Add Route') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('docroutes.create')}}"  id="add_route_form" name="add_route_form">
                {{-- <form> --}}
                    @csrf
                    @method('post')
                    <input type="hidden" name="document_id" value="{{ __($document->id) }}">
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
                                        <label for="RouteRemarksEdit" class="form-label">Remarks</label>
                                        <textarea name="remarks" id="RouteRemarksEdit" cols="30" rows="10" class="form-control"> </textarea>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="submit" id="addRoute" class="btn btn-success float-left">Add</button>
                <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@push('js')

@endpush
