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
        <form action="">
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
                                    <input type="text" class="form-control" id="fname" placeholder="First name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="inputcode">รหัสพนักงาน</label>
                                    <input type="text" class="form-control" id="code" placeholder="รหัสพนักงาน"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="gender">เพศ</label>
                                    <select id="gender" class="form-control" style="width: 100%;">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputlname">นามสกุล</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Last name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="inputage">อายุ</label>
                                    <input type="text" class="form-control" id="age" placeholder="Age" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputphone">เบอร์โทรศัพท์</label>
                                    <input type="number" class="form-control" id="phone" placeholder="Phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">ที่อยู่/บ้านเลขที่</label>
                                    <input type="address" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label for="district">อำเภอ</label>
                                    <select id="district" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option ></option>
                                        <option ></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="province">จังหวัด</label>
                                    <select id="province" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option ></option>
                                        <option ></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="zipcode">รหัสไปรษณีย์</label>
                                    <input type="zipcode" class="form-control" id="zipcode" placeholder="zipcode">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="subdistrict">ตำบล</label>
                                    <select id="subdistrict" class="form-control">
                                        <option selected="">กรุณาเลือก...</option>
                                        <option></option>
                                        <option></option>
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
