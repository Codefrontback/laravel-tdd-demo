@extends('welcome')

@section('content')
    <div class="col-sm-12">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td><a href="">Edit</a> | <a href="">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop