@extends('layouts.user')

@section('user-content')
<div class="dashboard-header">
    <div class="row">
        <div class="col m5 s12">
            <div class="dashboard-page-title">
                <h5>Feedback</h5>
                <h6>Welcome to the Island Buyers Club Experience</h6>
            </div>
        </div>
        <div class="col m7 s12">
            <div class="row">
            </div>
        </div>
    </div>
</div>
<div class="feedback-page-body">
    <div class="row">
        <div class="col s12 m9">
            <div class="feedback-form-wrapper">
                <form>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Leave feedback here..."></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection