@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Activity Log' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('activity_logs.activity_log.destroy', $activityLog->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('activity_logs.activity_log.index') }}" class="btn btn-primary" title="Show All Activity Log">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('activity_logs.activity_log.create') }}" class="btn btn-success" title="Create New Activity Log">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('activity_logs.activity_log.edit', $activityLog->id ) }}" class="btn btn-primary" title="Edit Activity Log">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Activity Log" onclick="return confirm(&quot;Click Ok to delete Activity Log.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Log Name</dt>
            <dd>{{ $activityLog->log_name }}</dd>
            <dt>Description</dt>
            <dd>{{ $activityLog->description }}</dd>
            <dt>Subject Type</dt>
            <dd>{{ $activityLog->subject_type }}</dd>
            <dt>Event</dt>
            <dd>{{ $activityLog->event }}</dd>
            <dt>Subject</dt>
            <dd>{{ optional($activityLog->subject)->id }}</dd>
            <dt>Causer Type</dt>
            <dd>{{ $activityLog->causer_type }}</dd>
            <dt>Causer</dt>
            <dd>{{ optional($activityLog->causer)->id }}</dd>
            <dt>Properties</dt>
            <dd>{{ $activityLog->properties }}</dd>
            <dt>Batch Uuid</dt>
            <dd>{{ $activityLog->batch_uuid }}</dd>
            <dt>Created At</dt>
            <dd>{{ $activityLog->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $activityLog->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection