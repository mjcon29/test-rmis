@extends('layouts.app', ['activePage' => $activePage, 'titlePage' => __('Dashboard')])
@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Division Actions</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('division_actions.division_action.create') }}" class="btn btn-success" title="Create New Division Action">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($divisionActions) == 0)
            <div class="panel-body text-center">
                <h4>No Division Actions Available.</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Division</th>
                            <th>Action</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($divisionActions as $divisionAction)
                        <tr>
                            <td>{{ optional($divisionAction->division)->name }}</td>
                            <td>{{ optional($divisionAction->action)->name }}</td>

                            <td>

                                <form method="POST" action="{!! route('division_actions.division_action.destroy', $divisionAction->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('division_actions.division_action.show', $divisionAction->id ) }}" class="btn btn-info" title="Show Division Action">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('division_actions.division_action.edit', $divisionAction->id ) }}" class="btn btn-primary" title="Edit Division Action">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Division Action" onclick="return confirm(&quot;Click Ok to delete Division Action.&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $divisionActions->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection