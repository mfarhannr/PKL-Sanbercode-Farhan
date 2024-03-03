@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Pendidikan</h3>
                    </div>
                    <form action="{{ route('pendidikan.update', $education->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row px-4">
                            <!-- Form input fields for education data -->
                            <!-- ... Your input fields go here ... -->

                            <div class="text-end">
                                <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
