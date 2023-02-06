@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>إرسال الدعوات</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <a href="{{ route('inviteds.create') }}" class="btn btn-success text-white me-0"><i
                                class="mdi mdi-plus-circle-outline"></i>
                            إضافة</a>
                        <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i>
                            أكسل</a>
                        </div>
                        
                    <div>
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="search" class="col-md-3 col-form-label text-md-right"> <h5>اللقب الأول</h5></label>
                                    <input type="text" id="search" name="search" value="">
                                         
                                </div>
                            </div>
                            <button type="submit" class="badge badge-danger badge-sm"><i
                                    class="mdi mdi-search"></i> اذهب</button>

                        </form>
                    </div>

                        <table id="invitedTable"
                            class="table table-bordered table-striped {{ count($inviteds) > 0 ? 'datatable' : '' }} dt-select">
                            <thead>
                                <tr>
                                    <th>م</th>
                                    <th>تاريخ الإرسال</th>
                                    <th>الاسم</th>
                                    <th>رقم الواتساب</th>
                                    <th>البريد الالكتروني</th>
                                    <th>تأكيد الحضور</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @if (count($inviteds) > 0)
                                    @foreach ($inviteds as $invited)
                                        <tr data-entry-id="{{ $invited->id }}">

                                            <td>{{ $invited->id }}</td>
                                            <td> {{ $invited->created_at }}</td>
                                            <td>{{ $invited->fullname }}</td>
                                            <td>{{ $invited->mobile_no }} </td>
                                            <td>{{ $invited->email }} </td>
                                            <td>
                                                @if ($invited->attendance == 'نعم')
                                                    <i class="mdi mdi-check-circle"></i>
                                                @else
                                                    <i class="mdi mdi-close-box"></i>
                                                @endif

                                            </td>

                                            <td>
                                                <a href="{{ route('inviteds.show', [$invited->id]) }}"
                                                    class="badge badge-info badge-sm">
                                                    <i class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('inviteds.edit', [$invited->id]) }}"
                                                    class="badge badge-primary badge-sm">
                                                    <i class="mdi mdi-pencil-box-outline"></i></a>
                                                <a href="#" class="badge badge-primary badge-sm">
                                                    <i class="icon-printer"></i></a>

                                                <form action="{{ route('inviteds.destroy', [$invited->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="badge badge-danger badge-sm"><i
                                                            class="mdi mdi-delete"></i></button>

                                                </form>


                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">لا يوجد دعوات في قاعدة البيانات</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
