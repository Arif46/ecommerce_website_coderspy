@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Google Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="GOOGLE_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="GOOGLE_CLIENT_ID" value="{{  env('GOOGLE_CLIENT_ID') }}" placeholder="Google Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="GOOGLE_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="GOOGLE_CLIENT_SECRET" value="{{  env('GOOGLE_CLIENT_SECRET') }}" placeholder="Google Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Facebook Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="FACEBOOK_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('App ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="FACEBOOK_CLIENT_ID" value="{{ env('FACEBOOK_CLIENT_ID') }}" placeholder="Facebook Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="FACEBOOK_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('App Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="FACEBOOK_CLIENT_SECRET" value="{{ env('FACEBOOK_CLIENT_SECRET') }}" placeholder="Facebook Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Twitter Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="TWITTER_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="TWITTER_CLIENT_ID" value="{{ env('TWITTER_CLIENT_ID') }}" placeholder="Twitter Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="TWITTER_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="TWITTER_CLIENT_SECRET" value="{{ env('TWITTER_CLIENT_SECRET') }}" placeholder="Twitter Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Linkedin Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="LINKEDIN_CLIENT_ID" value="{{ env('LINKEDIN_CLIENT_ID') }}" placeholder="Linkedin Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="LINKEDIN_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="LINKEDIN_CLIENT_SECRET" value="{{ env('LINKEDIN_CLIENT_SECRET') }}" placeholder="Linkedin Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Pinterest Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="PINTEREST_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="PINTEREST_CLIENT_ID" value="{{ env('PINTEREST_CLIENT_ID') }}" placeholder="Pinterest Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="PINTEREST_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="PINTEREST_CLIENT_SECRET" value="{{ env('PINTEREST_CLIENT_SECRET') }}" placeholder="Pinterest Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text-center">{{__('Instagram Login Credential')}}</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="{{ route('env_key_update.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="INSTAGRAM_CLIENT_ID">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client ID')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="INSTAGRAM_CLIENT_ID" value="{{ env('INSTAGRAM_CLIENT_ID') }}" placeholder="Instagram Client ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="types[]" value="INSTAGRAM_CLIENT_SECRET">
                        <div class="col-lg-3">
                            <label class="control-label">{{__('Client Secret')}}</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="INSTAGRAM_CLIENT_SECRET" value="{{ env('INSTAGRAM_CLIENT_SECRET') }}" placeholder="Instagram Client Secret" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
