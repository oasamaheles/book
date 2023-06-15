@extends('admin.layout.layout_admin')
@section('title', 'books')
@section('content')

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Notice-->
        <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
            <div class="alert-icon">
                <span class="svg-icon svg-icon-primary svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </div>
            <div class="alert-text">عرض الكتب
            </div>
        </div>
        <!--end::Notice-->
        <div class="row">
            <div class="col-xl-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">Base Examples</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Example-->
                        <div class="example mb-10">

                            <div class="example-preview">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th scope="col">#</th>
                                            <th scope="col">اسم الكتاب</th>
                                            <th scope="col">مؤلف الكتاب</th>
                                            <th scope="col">تصنيف الكتاب</th>
                                            <th scope="col">تاريخ الاصدار</th>
                                            <th scope="col">السعر</th>
                                            <th scope="col">الصورة</th>
                                            <th scope="col">تفاصيل الكتاب</th>
                                            <th scope="col">العمليات</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($books as $book)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>

                                            <td>{{$book->name}}</td>
                                            <td>{{$book->author}}</td>
                                            <td>{{$book->category->name}}</td>
                                            <td>{{$book->Release_Date}}</td>
                                            <td>{{$book->price}}</td>
                                            <td> <a href="{{asset('storage/'.$book->image)}}" target="_blank"><img src="{{asset('storage/'.$book->image)}}" style="width:50px; height:50px;" /></a></td>
                                            <td>{{Str::limit($book->Description_book,10)}}</td>


                                            <td>
                                                <form method="post" action="admin/books/{{$book->id}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick=" return confirm('هل انت متأكد من حذف المنشور؟')" class="btn btn-icon btn-danger btn-circle mr-2">
                                                        <img src="   https://cdn-icons-png.flaticon.com/512/1214/1214428.png " width="20" height="20" alt="" title="" class="img-small"></button>
                                                </form>


                                                <a type="#" class="btn btn-icon btn-primary btn-circle mr-2" href="admin/books/edit/{{$book->id}}">
                                                    <img src="https://cdn-icons-png.flaticon.com/128/1828/1828911.png" data- src="https://cdn-icons-png.flaticon.com/128/1828/1828911.png" alt="Pencil " title="Pencil " width="20" height="20" class="lzy lazyload--done" srcset="https://cdn-icons-png.flaticon.com/128/1828/1828911.png 4x">
                                                </a>

                                                </span>


                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!--end::Example-->
                        {{$books->links()}}


                    </div>
                </div>
                <!--end::Card-->




            </div>
            <div class="col-xl-6">





            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
@endsection