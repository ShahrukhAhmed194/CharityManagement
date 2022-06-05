@extends('frontend.layouts.template-joinus')
@section('title','Join Us')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="img-view">

            </div>
        </div>
        <div class="col-md-6">
            <fieldset class="registering " >
                <h3 class="text-center" >Registration Form</h3>
                @if(session('message'))
                  <h3 class="alert alert-success"> {{session('message')}} </h3>
                  @php(Session::flush())
                @endif
                <form action='{{ route('save.joinus') }}' method="POST">
                    @csrf
                    <div class="control-group">
                        <label for="name">Name</label>
                        <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name')}}" placeholder="Abcd Efgh Ijkl" />
                        @error('name')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="nid">NID</label>
                        <input id="nid" class="block mt-1 w-full" type="text" name="nid" value="{{old('nid')}}" placeholder="1234567890" />
                        @error('nid')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="occupation">Occupation</label>
                        <input id="occupation" class="block mt-1 w-full" type="text" name="occupation" value="{{old('occupation')}}" placeholder="Student" />
                        @error('occupation')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="institute">Work/ Education Institute</label>
                        <input id="institute" class="block mt-1 w-full" type="text" name="institute" value="{{old('institute')}}" placeholder="ABCD University."/>
                        @error('institute')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="post">Post</label>
                        <input id="post" class="block mt-1 w-full" type="text" name="post" value="{{old('post')}}" placeholder="Student" />
                        @error('post')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="qualification">Qualification</label>
                        <input id="qualification" class="block mt-1 w-full" type="text" name="qualification" value="{{old('qualification')}}"  placeholder="HSC" />
                        @error('qualification')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="gender">Gender: </label>
                        <select id="gender" name="gender">
                            <option disabled>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                        @error('gender')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="height">Height (Centimeter)</label>
                        <input id="height" class="block mt-1 w-full" type="text" name="height" value="{{old('height')}}" placeholder="Heigh In Centimeter" />
                        @error('height')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="birth_mark">Birth Mark</label>
                        <input id="birth_mark" class="block mt-1 w-full" type="text" name="birth_mark" value="{{old('birth_mark')}}" placeholder="Mole in Left cheek" />
                        @error('birth_mark')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"for="father_name">Father's Name</label>
                        <input id="father_name" class="block mt-1 w-full" type="text" name="father_name" value="{{old('father_name')}}" placeholder="Abcd Efgh Ijkl" />
                        @error('father_name')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="control-group">
                        <label class="control-label" for="mother_name">Mother's Name</label>
                        <input id="mother_name" class="block mt-1 w-full" type="text" name="mother_name" value="{{old('mother_name')}}" placeholder="Abcd Efgh Ijkl" />
                        @error('mother_name')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <button class="btn btn-success float-right">Next</button>
                    </div>
                </form>   
            </fieldset>
        </div>
    </div>
</div>

@endsection