@extends('admin.layout.layout_admin')
@section('title')
أضافة كتاب جديد
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">اضافة كتاب جديد </h3>
            </div>
            <!--begin::Form-->
            <form action="store " method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>العنوان</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control  @error('name') is-invalid @enderror" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>سعر الكتاب</label>
                            <input type="text" name="price" value="{{old('price')}}" class="form-control  @error('price') is-invalid @enderror" />
                            @error('price')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>تاريخ الاصدار</label>
                            <input type="int" name="Release_Date" value="{{old('Release_Date')}}" class="form-control  @error('Release_Date') is-invalid @enderror" />
                            @error('Release_Date')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>


                

                    <div class="col-lg-6">
                        <label>التصنيف</label>
                        <select required name="category_id" class="form-control selectpicker @error('category_id') is-invalid @enderror" data-live-search="true" name="param">
                            <option value=""></option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected': ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>مؤلف الكتاب</label>
                            <input type="text" name="author" value="{{old('author')}}" class="form-control  @error('author') is-invalid @enderror" />
                            @error('author')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>






                    <div class="col-lg-6 mt-5">
                        <label>صورة الكتاب</label>
                        <div class="custom-file  @error('image') is-invalid @enderror">
                            <input name="image" value="{{old('image')}}" type="file" class="custom-file-input" id="customFileLang" lang="ar">
                            <label class="custom-file-label" for="customFileLang">اختر الصورة</label>
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label> التفاصيل</label>
                        <div class="card-body     @error('Description_book') is-invalid @enderror">
                            <textarea name="Description_book" id="kt-ckeditor-1">
                            {{old('Description_book')}}
                            </textarea>
                            @error('Description_book')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>







                <div class="separator separator-dashed my-5"></div>

                <div class="col-lg-10 mt-10">
                    <button type="submit" class="btn btn-success mr-2">حفظ</button>
                </div>
        </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
</div>
</div>

@section('my-scripts')
<script src="{{asset('admin-assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/editors/ckeditor-classic.js')}}"></script>
<script src="{{asset('admin-assets/js/pages/crud/forms/widgets/select2.js')}}"></script>
@endsection
@endsection