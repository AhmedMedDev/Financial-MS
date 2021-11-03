<div class="card">
    <div class="card-header pb-0">
        <div class="d-flex justify-content-between">
            <h4 class="card-title mg-b-0">دفتر حضور الموظفين</h4>
            <i class="mdi mdi-dots-horizontal text-gray"></i>
        </div>
        <p class="tx-12 tx-gray-500 mb-2">لاتنسى حفظ العميلة بعد الانتهاء</p>
    </div>
    <div class="card-body">
        <div class="panel panel-primary tabs-style-3">
            <div class="tab-menu-heading">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                        <li class=""><a href="#tab11" class="active" data-toggle="tab"><i class="fa fa-laptop"></i> تسجيل الحضور</a></li>
                        <li><a href="#tab12" data-toggle="tab"><i class="fa fa-cube"></i> حذف التسجيل</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body tabs-menu-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab11">
                        @include('include.saveAttendance')
                    </div>
                    <div class="tab-pane" id="tab12">
                        @include('include.deleteAttendance')
                    </div>
                </div>
            </div>
        </div>
    </div><!-- bd -->
</div>

