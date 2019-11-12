@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
            Add New Book
          </div>
          <div class="card-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.books.store')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old("title")}}"/>
              </div>
              <div class="form-group">
                <label for="title">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{old("author")}}"/>
              </div>
              <div class="form-group">
                <label for="publisher">Publisher</label>
                <select name="publisher_id">
                  @foreach ($publishers as $publisher)
                    <option value="{{$publisher->id}}" {{(old('publisher_id') == $publisher->id) ? "selected" : ""}}>
                      {{$publisher->name}}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="year">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{old("year")}}"/>
              </div>
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" value="{{old("isbn")}}"/>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old("price")}}"/>
              </div>
              <a href="{{ route('admin.books.index')}}" class="btn btn-link">Cancel</a>
              <button typre="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
