@extends('layoutsAdmin.app')

@section('title', 'page')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ประวัติพนักงานทั้งหมด</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active">ประวัติพนักงานทั้งหมด</li>
                    </ol>

                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">ประวัติพนักงาน
                                <a href="{{ route('add') }}" role="button" class="btn btn-sm btn-info">เพิ่มพนักงาน</a>
                            </h3>

                        </div>

                        <div class="card-body table-responsive">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                        aria-describedby="example2_info">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>รหัสพนักงาน</th>
                                                <th>ชื่อ</th>
                                                <th>อายุ</th>
                                                <th>เพศ</th>
                                                <th>ที่อยู่</th>
                                                <th>เวลาเพิ่มพนักงาน</th>
                                                <th>สถานะ</th>
                                                <th>แก้ไข/ลบ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td>{{ $employee->code }}</td>
                                                    <td>{{ $employee->fname }}.{{ $employee->lname }}</td>
                                                    <td>{{ $employee->age }}</td>
                                                    <td>{{ $employee->gender }}</td>
                                                    <td>{{ $employee->address }}</td>
                                                    <td>{{ $employee->created_at->format('d/m/Y H:i') }}</td>
                                                    <td>{{ $employee->status }}</td>
                                                    <td>
                                                        <a href="{{ route('editemployee') }}" role="button"
                                                            class="btn btn-sm btn-warning">แก้ไข</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': false,
            'info': false,
            'autoWidth': false,
            "responsive": true

        });
    });
</script>
