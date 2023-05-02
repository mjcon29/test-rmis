@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Division Action' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('division_actions.division_action.destroy', $divisionAction->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('division_actions.division_action.index') }}" class="btn btn-primary" title="Show All Division Action">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('division_actions.division_action.create') }}" class="btn btn-success" title="Create New Division Action">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('division_actions.division_action.edit', $divisionAction->id ) }}" class="btn btn-primary" title="Edit Division Action">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Division Action" onclick="return confirm(&quot;Click Ok to delete Division Action.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Division</dt>
            <dd>{{ optional($divisionAction->division)->name }}</dd>
            <dt>Action</dt>
            <dd>{{ optional($divisionAction->action)->name }}</dd>
            <dt>Created At</dt>
            <dd>{{ $divisionAction->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $divisionAction->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection