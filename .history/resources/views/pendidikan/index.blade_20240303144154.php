@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <!-- ... Your page header goes here ... -->
        </div>
        <div class="page-body">
            <div class="container">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter table-mobile-md card-table">
                                <thead>
                                    <!-- ... Your table headers go here ... -->
                                </thead>
                                <tbody>
                                    @foreach ($educations as $education)
                                        <tr>
                                            <!-- ... Your table data cells go here ... -->
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="{{ route('pendidikan.edit', $education->user_id) }}"
                                                        class="btn btn-success mb-0 font-weight-bold text-xs">Edit</a>
                                                    <form onsubmit="return confirm('Are you sure to delete this data?')"
                                                        action="{{ route('pendidikan.destroy', $education->user_id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger mb-0 font-weight-bold text-xs">
                                                            Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
