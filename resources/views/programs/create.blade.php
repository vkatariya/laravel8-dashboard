@extends('../layout/' . $layout)

@section('subhead')
    <title>Create Program </title>
@endsection

@section('subcontent')
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Program Create</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-6">
            <!-- BEGIN: Form Layout -->
          <form action="{{ route('program-store') }}" method="POST" enctype="multipart/form-data">
         @csrf


            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Program Name</label>
                    <input id="crud-form-1" name="program_title" type="text" class="form-control w-full" placeholder="Program title">
                </div>
                 <div>
                    <label for="crud-form-1" class="form-label">Sub-title</label>
                    <input id="crud-form-1" type="text" name="subtitle" class="form-control w-full" placeholder="Sub title">
                </div>
                {{-- <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Category</label>
                    <select name="category" data-placeholder="Select your favorite actors" class="tail-select w-full" id="crud-form-2" multiple>
                        <option value="1" selected>Life Wellness programs</option>
                        <option value="2">Acadmic Wellness Program</option>
                        {{-- <option value="3" >Smartphone & Tablet</option>
                        <option value="4">Photography</option>                     </select>
                </div> --}}
                <div class="mt-3">
                    <label for="crud-form-4" class="form-label">Price</label>
                    <div class="input-group">
                        <input id="crud-form-4" type="text" name="price" class="form-control" placeholder="price" aria-describedby="input-group-2">

                    </div>
                </div>
                <div class="mt-3">
                    <label for="crud-form-3" class="form-label">Discount</label>
                    <div class="input-group">
                        <input id="crud-form-3" name="discount" type="text" class="form-control" placeholder="Discount" aria-describedby="input-group-1">
                        {{-- <div id="input-group-1" class="input-group-text">pcs</div> --}}
                    </div>
                </div>

                <div class="mt-3">
                    <label for="crud-form-3" class="form-label">Duration</label>
                    <div class="input-group">
                        <input id="crud-form-3" name="duration" type="text" class="form-control" placeholder="Discount" aria-describedby="input-group-1">
                        {{-- <div id="input-group-1" class="input-group-text">pcs</div> --}}
                    </div>
                </div>
                {{-- <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input name="status" type="checkbox" class="form-check-switch">
                    </div>
                </div> --}}
                {{-- <div class="mt-3">
                    <label>Description</label>
                    <div class="mt-2">
                        <div data-simple-toolbar="true"  class="editor">
                            <p>Content of the editor.</p>
                        </div>
                    </div>
                </div> --}}
              {{-- <div class="mt-3">
                    <label>Image</label>
                <div class="fallback mt-3">
                <input name="file" type="file" />
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
