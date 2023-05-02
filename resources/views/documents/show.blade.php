@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($document->subject) ? $document->subject : 'Document' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('documents.document.destroy', $document->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('documents.document.index') }}" class="btn btn-primary" title="Show All Document">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('documents.document.create') }}" class="btn btn-success" title="Create New Document">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('documents.document.edit', $document->id ) }}" class="btn btn-primary" title="Edit Document">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Document" onclick="return confirm(&quot;Click Ok to delete Document.?&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Doc Number</dt>
            <dd>{{ $document->doc_number }}</dd>
            <dt>Origin</dt>
            <dd>{{ optional($document->OriginOffice)->name }}</dd>
            <dt>Mor</dt>
            <dd>{{ optional($document->MeansOfReceiving)->name }}</dd>
            <dt>Doctype</dt>
            <dd>{{ optional($document->DocType)->name }}</dd>
            <dt>User</dt>
            <dd>{{ optional($document->User)->name }}</dd>
            <dt>Date Received</dt>
            <dd>{{ $document->date_received }}</dd>
            <dt>Status</dt>
            <dd>{{ ($document->status) ? 'Yes' : 'No' }}</dd>
            <dt>Subject</dt>
            <dd>{{ $document->subject }}</dd>
            <dt>Deadline</dt>
            <dd>{{ $document->deadline }}</dd>
            <dt>Required Action</dt>
            <dd>{{ $document->required_action }}</dd>
            <dt>Created At</dt>
            <dd>{{ $document->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $document->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection