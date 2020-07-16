@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('events.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Post')}}</a>
        </div>
    </div>

    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Events')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Ttile')}}</th>
                    <th>{{__('Image')}}</th>
                    <th>{{__('Back Image')}}</th>
                    <th>{{__('Date')}}</th>
                    <th>{{__('Status')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
                </thead>
                <tbody>
                @php($i=0)
                @forelse($events as $event)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{  \Illuminate\Support\Str::limit(strip_tags($event->title),20, '')}}</td>
                        <td>
                            <img src="{{url('public/'.$event->img)}}" alt="image" height="32px" width="40px">
                        </td>
                        <td>
                            <img src="{{url('public/'.$event->back_img)}}" alt="image" height="32px" width="40px">
                        </td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->active_status == 1?'Active':'Inactive'}}</td>

                        <td>
                            <a style="float: left;margin-right: 3px;" class="btn btn-sm btn-primary" href="{{route('events.edit', $event->id)}}"> <i class="fa fa-edit"></i> </a>
                            <form method="POST" action="{{ route('events.destroy',$event->id) }}">
                                @csrf
                                @method("DELETE")
                                <button onclick="return confirm('Are you sure to delete ?')" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @empty

                @endforelse
                </tbody>
            </table>
            <div class="clearfix">
                <div class="pull-right">
                    {{ $events->appends(request()->input())->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection

