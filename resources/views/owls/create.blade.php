@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                    <form method="POST" action="/owls">
                        <div class="card"> {{-- The form is placed inside a Bulma Card component --}}
                            <header class="card-header">
                                <p class="card-header-title"> {{-- The Card header content --}}
                                    Create a New Owl
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">
                                    @csrf
                                    {{-- Here are all the form fields --}}
                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="name" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Version</label>
                                        <div class="control">
                                            <input name="version" class="input @error('version') is-danger @enderror"
                                                   type="number" placeholder="version" value="{{old('version')}}">
                                        </div>
                                        @error('version')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Resit</label>
                                        <div class="control">
                                            <div class="select">
                                                <select name="resit" id="resit" class="select @error('resit') is-invalid @enderror"
                                                        size="3">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('resit')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Comment</label>
                                        <div class="control">
                                            <textarea class="textarea @error('comment') is-invalid @enderror" placeholder="Comment" name="comment">{{old('comment')}}</textarea>
                                        </div>
                                        @error('comment')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                    {{-- Here are the form buttons: save, reset and cancel --}}
                                    <div class="control">
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/owls" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
