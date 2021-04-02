@extends('layout.app')
@section('content')
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">
                    <div class="d-flex justify-content-between">
                        <div>Create Short URL</div>
                    </div>
                </h5>
                <form action="/new" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="url ">Long Url</label>
                        <input type="text" class="form-control" id="url" name="long url">
                    </div>


                    <a href="/show"><button class="btn btn-primary">Create Short URL</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection
