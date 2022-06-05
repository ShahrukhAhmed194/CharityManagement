@extends('frontend.layouts.template-joinus')
@section('title','Join Us')
<?php 
$nid = session('nid');
?>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="img-view">

            </div>
        </div>
        <div class="col-md-6">
            <fieldset class="registering " >
                <h3 class="text-center ">Registration Form</h3>
                <form action='{{ route('save.joinus1') }}' method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="nid" name="nid" value="{{$nid}}">
                    @error('nid')
                        <div class="color-red">{{ $nid.$message }}</div>
                    @enderror
                    <div class="control-group">
                        <label class="control-label" for="mobile">Mobile</label>
                        <input id="mobile" class="block mt-1 w-full" type="tel" name="mobile" value="{{old('mobile')}}" required autofocus autocomplete="mobile" />
                        @error('mobile')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <div class="control-group">
                        <label class="control-label" for="email">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" />
                        @error('email')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <div class="control-group">
                        <label class="control-label" for="blood_group">Blood Group :</label>
                        <select id="blood_group" name="blood_group" >
                            <option disabled>Select Blood Group</option>
                            <option value="a+">A+</option>
                            <option value="a-">A-</option>
                            <option value="b+">B+</option>
                            <option value="b-">B-</option>
                            <option value="o+">O+</option>
                            <option value="o-">O-</option>
                            <option value="ab+">AB+</option>
                            <option value="ab-">AB-</option>
                        </select>
                        @error('marital_status')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <div class="control-group">
                        <label class="control-label" for="marital_status">Marital Status:</label>
                        <select id="marital_status" name="marital_status">
                            <option disabled>Select Marital Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">divorced</option>
                        </select>
                        @error('marital_status')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <div class="control-group">
                        <label class="control-label" for="total_family_members">Total Family Members</label>
                        <input id="total_family_members" class="block mt-1 w-full" type="text" name="total_family_members" value="{{old('total_family_members')}}" required autofocus autocomplete="total_family_members" />
                        @error('total_family_members')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <div class="control-group">
                        <label class="control-label" for="income">Total Monthly Income : </label>
                        <input id="income" class="block mt-1 w-full" type="text" name="income" value="{{old('income')}}" required autofocus autocomplete="income" />
                        @error('income')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>                    
                    <div class="control-group">
                        <label class="control-label" for="present_address">Present Address</label>
                        <input id="present_address" class="block mt-1 w-full" type="text" name="present_address" value="{{old('present_address')}}"  autofocus autocomplete="present_address" />
                        @error('present_address')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <label for="check">Check Here If Present Address And Permanent Address Are Same</label>
                    <input type="checkbox" name="check" id="check" onclick="checkFunction()">
                    <div class="control-group">
                        <label class="control-label" for="permanent_address">Permanent Address</label>
                        <input id="permanent_address" class="block mt-1 w-full" type="text" name="permanent_address" value="{{old('permanent_address')}}"  autofocus autocomplete="permanent_address" />
                        @error('permanent_address')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>       
                    <div class="control-group">
                        <label class="control-label" for="birth_date">Birth Date</label>
                        <input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" value="{{old('birth_date')}}" required autofocus autocomplete="birth_date" />
                        @error('birth_date')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div><br>            
                    <div class="control-group">
                        <label class="control-label" for="image">Image</label>
                        <input id="image" type="file" name="image" />
                        @error('image')
                            <div class="color-red">{{ $message }}</div>
                        @enderror
                    </div>            
                    <button class="btn btn-success " style="width: 100%">Complete Registration</button>
                    </div>
                </form> 
                
                <script src="{{asset('assets/js/joinus1.js')}}"></script>
            </fieldset>
        </div>
    </div>
</div>


@endsection