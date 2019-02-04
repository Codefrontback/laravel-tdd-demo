@extends('welcome')

@section('content')
    <form action="{{ route('post:save:article') }}" method="post">
        {{ csrf_field() }}
        <div class="login-form">
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" class="validate" name="title">
                    <label for="text">Title</label>

                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="description" id="">
                    <label for="description">description</label>
                </div>
            </div>
            <button class="btn btn-block waves-effect waves-light submit" type="submit">Save</button>
        </div>
    </form>
@stop