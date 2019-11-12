@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in as an ordianry user!

                    <a href="{{ route('user.books.index') }}"> Books </a>

                    <ui>
                        Hi {{Auth :: user()->name}}
                    </ui>
                    <ui>
                        Email: {{Auth :: user()->email}}
                    </ui>
                    <ui>
                        Address {{Auth :: user()->customer->address}}
                    </ui>
                    <ui>
                        Phone Number{{Auth :: user()->customer->phone_number}}
                    </ui>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
