@extends('layout.app')

@section('title','contactUs')

@section('content')

<body>
    <div class="page-wrapper">
        <div class="container">
            <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
                <form class="form" action="{{ route('contacAction') }}"  method="POST">
                    @if ( session('success' ))
                    <div class="alert alert-success"> {{session('success')}} mr {{ session('name') }}</div>
                    @endif
                    @csrf
                    <div class="form-items">
                        <div class="mb-3">
                            <label class="form-label required-label" for="name">Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="phone">Phone</label>
                            <input type="tel" class="form-control" name="phone" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="subject">subject</label>
                            <input type="text" class="form-control" name="subject" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="message">message</label>
                            <textarea class="form-control" name="message" ></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
    </div>


@endsection