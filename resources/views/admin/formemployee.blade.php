@extends('layoutsAdmin.app')

@section('title', 'page')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>เพิ่มพนักงาน</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('employee') }}">ประวัติพนักงาน</a></li>
                        <li class="breadcrumb-item active">เพิ่มพนักงาน</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="{{ url('/employee')}}" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">เพิ่มพนักงานใหม่</h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputfname">ชื่อจริง</label>
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First name"
                                        >
                                </div>
                                <div class="form-group">
                                    <label for="inputcode">รหัสพนักงาน</label>
                                    <input type="text" class="form-control" name="code" id="code" placeholder="รหัสพนักงาน"
                                        >
                                </div>
                                <div class="form-group">
                                    <label for="gender">เพศ</label>
                                    <select name="gender" id="gender" class="form-control" style="width: 100%;">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputlname">นามสกุล</label>
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="inputage">อายุ</label>
                                    <input type="text" class="form-control" name="age" id="age" placeholder="Age" >
                                </div>
                                <div class="form-group">
                                    <label for="inputphone">เบอร์โทรศัพท์</label>
                                    <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone" >
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">ที่อยู่/บ้านเลขที่</label>
                                    <input name="address" type="address" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="district">อำเภอ</label>
                                    <select name="district" id="district" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option ></option>
                                        <option ></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="province">จังหวัด</label>
                                    <select name="province" id="province" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option ></option>
                                        <option ></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">รหัสไปรษณีย์</label>
                                    <input name="zipcode" type="zipcode" class="form-control" id="zipcode" placeholder="zipcode">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subdistrict">ตำบล</label>
                                    <select name="subdistrict" id="subdistrict" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">ตำแหน่ง</label>
                                    <select name="status" id="status" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option value="1">SuperAdmin</option>
                                        <option value="2">Admin</option>
                                        <option value="3">Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('employee')}}" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success float-right">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
