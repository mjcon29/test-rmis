<div class="row clearfix">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment_returned</i>
                </div>
                <div class="content">
                    <div class="text">RECEIVED</div>
                    <a href="{{ route('dues',['type' => 'recent' . $filter,'office_id' => 0]) }}">
                        <div class="number count-to" data-from="0" data-to="{{ $recent }}" data-speed="1000" data-fresh-interval="20">
                            {{ $recent }}
                        </div>
                    </a>
                </div>
            </div>
        
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        
            <div class="info-box bg-royal-blue hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment_returned</i>
                </div>
                <div class="content">
                    <div class="text">{{ __('FOR SIGNATURE') }}</div>
                    <a href="{{ route('dues',['type' => 'forSignature' . $filter,'office_id' => 0]) }}">
                        <div class="number count-to" data-from="0" data-to="{{ $forSign }}" data-speed="1000" data-fresh-interval="20">
                            {{ $forSign }}
                        </div>
                    </a>
                </div>
            </div>
        
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        
            <div class="info-box bg-medium-violet-red hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">assignment_returned</i>
                </div>
                <div class="content">
                    <div class="text">{{ __('FOR ACTION') }}</div>
                    <a href="{{ route('dues',['type' => 'forAction' . $filter,'office_id' => 0]) }}">
                        <div class="number count-to" data-from="0" data-to="{{ $forAction }}" data-speed="1000" data-fresh-interval="20">
                            {{ $forAction }}
                        </div>
                    </a>
                </div>
            </div>
        
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-red hover-expand-effect">
            <div class="icon">
                <i class="material-icons">assignment_late</i>
            </div>
            <div class="content">
                <div class="text">OVERDUE</div>
                <a href="{{ route('dues',['type' => 'overdue' . $filter,'office_id' => 0]) }}">
                    <div class="number count-to" data-from="0" data-to="{{ $overdues }}" data-speed="1000" data-fresh-interval="20">
                        {{ $overdues }}
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-deep-orange hover-expand-effect">
            <div class="icon">
              <i class="material-icons">flag</i>
            </div>
            <div class="content">
                <div class="text">DUE TODAY</div>
                <a href="{{ route('dues',['type' => 'duetoday' . $filter,'office_id' => 0]) }}">
                    <div class="number count-to" data-from="0" data-to="{{ $dueToday }}" data-speed="1000" data-fresh-interval="20">{{ $dueToday }}</div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-orange hover-expand-effect">
            <div class="icon">
                <i class="material-icons">low_priority</i>
            </div>
            <div class="content">
                <div class="text">DUE SOON</div>
                <a href="{{ route('dues',['type' => 'duesoon' . $filter,'office_id' => 0]) }}">
                    <div class="number count-to" data-from="0" data-to="{{ $dueSoon }}" data-speed="1000" data-fresh-interval="20">
                        {{ $dueSoon }}
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-cyan hover-expand-effect">
            <div class="icon">
                <i class="material-icons">assignment</i>
            </div>
            <div class="content">
                <div class="text">{{ __('PENDING') }}</div>
                <a href="{{ route('dues',['type' => 'active' . $filter,'office_id' => 0]) }}">
                    <div class="number count-to" data-from="0" data-to="{{ $active }}" data-speed="1000" data-fresh-interval="20">
                    {{ $active }}
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="info-box bg-grey hover-expand-effect">
            <div class="icon">
                <i class="material-icons">archive</i>
            </div>
            <div class="content">
                <div class="text">ARCHIVE</div>
                <a href="{{route('archiveList', $filter)}}">
                    <div class="number count-to" data-from="0" data-to="{{ $archive }}" data-speed="1000" data-fresh-interval="20">
                        {{ $archive }}
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
</div>

<script type="text/javascript">
  $('.count-to').countTo();
</script>
