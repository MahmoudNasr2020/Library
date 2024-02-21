@extends('admin.layouts.index')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> الاقسام
                        </div>
                        <div class="card-block">
                            <div class="col-md-6">
                                <form action="{{ route('admin.category.index') }}" class="m-b-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input placeholder="بحث..." class="form-control m-b-1" name="query">
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn btn-primary" type="submit">بحث</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <table class="table table-bordered table-striped table-condensed text-sm-center">
                                <thead>
                                <tr>
                                    <th class="text-sm-center">#</th>
                                    <th class="text-sm-center">الاسم</th>
                                    <th class="text-sm-center">الصورة</th>
                                    <th class="text-sm-center">الاجراء</th>
                                </tr>
                                </thead>
                               <tbody>
                                   @php
                                       $perPage = $categories->perPage(); // عدد العناصر في كل صفحة
                                       $currentPage = $categories->currentPage(); // الصفحة الحالية
                                       $offset = ($currentPage - 1) * $perPage; // حساب العدد الإجمالي للعناصر التي تم عرضها حتى الآن
                                   @endphp
                                   @foreach($categories as $k=>$category)
                                       <tr>
                                       <td>{{ $k + $offset + 1 }}</td>
                                       <td>{{ $category->name }}</td>
                                       <td>{{ $category->image }}</td>
                                       <td>
                                           <button class="btn btn-success">تعديل</button>
                                           <button class="btn btn-danger">حذف</button>
                                       </td>
                               </tr>
                                   @endforeach

                               </tbody>
                            </table>
                            <div class="text-center">
                                {{ $categories->links("pagination::bootstrap-4") }}
                            </div>


                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
        </div>
    </div>
@stop
