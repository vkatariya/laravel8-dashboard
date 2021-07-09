@extends('../layout/' . $layout)

@section('subhead')
    <title>Create Events </title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Program Create</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">

        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <!-- BEGIN: Form Layout -->
            <form action="{{ route('demouser.store') }}" method="POST" enctype='multipart/form-data'>
                @csrf
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">User Name </label>
                    <input id="crud-form-1" name="username" type="text" class="form-control w-full" placeholder="User Name">
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Email</label>
                    <input id="crud-form-1" type="email" name="email" class="form-control w-full" placeholder="User Email">
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Mobile</label>
                    <input id="crud-form-1" type="text" name="mobile" class="form-control w-full" placeholder="User Mobile">
                </div>

                 {{-- <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input name="status" type="checkbox" class="form-check-switch">
                    </div>
                </div>  --}}
              {{-- <div class="mt-3">
                    <label>Image</label>
                <div class="fallback mt-3">
                <input name="file" type="file" /> --}}
                {{-- <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/'.$program->image) }}" title=""> --}}
              {{-- </div>
                </div> --}}


                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
@endsection
