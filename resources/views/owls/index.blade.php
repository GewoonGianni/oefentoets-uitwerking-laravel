@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Owls</p>
                <p class="subtitle is-3">exciting tagline</p>

            </div>
        </div>
    </section>

    <section class="hero  is-medium  is-light is-fullwidth">
        <div class="hero-body">
            <div class="container">
                <table class="table is-fullwidth">
                    <tr>
                        <th style="width: 5%">Name</th>
                        <th style="width: 1%">Resit</th>
                        <th style="width: 5%">Version</th>
                        <th>Comment</th>
                        <th style="width: 10%">Created on</th>
                        <th style="width: 10%">Last edited</th>
                        <th style="width: 10%">Teacher</th>
                    </tr>

                    @foreach($owls as $owl)
                        <tr>
                            <td>{{$owl->name}}</td>
                            <td>{{$owl->is_resit == 1 ? 'Yes' : 'No'}}</td>
                            <td>{{$owl->version_nr}}</td>
                            <td>{{$owl->comments}}</td>
                            <td>{{$owl->created_at}}</td>
                            <td>{{$owl->updated_at}}</td>
                            <td>{{$owl->teacher->name}}</td>
                        </tr>
                    @endforeach
                </table>

                <a href="/../owls/create">
                    <button class="button">
                        Create owl
                    </button>
                </a>
            </div>
        </div>
    </section>
@endsection
