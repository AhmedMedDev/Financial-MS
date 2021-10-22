<div>
    <!-- Modal effects -->
    @include('livewire.create-employee')
    @include('livewire.update-employee')
    <!-- End Modal effects-->
    <div class="card">
        <div class="card-header pb-0">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mg-b-0">STRIPED ROWS</h4>
                <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div>
            <p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-md-nowrap" >
                    <thead>
                        <tr>
                            <th>رقم الموظف</th>
                            <th>صورة الموظف</th>
                            <th>اسم الموظف</th>
                            <th>الوظيفه</th>
                            <th>المؤهل</th>
                            <th>تاريخ الميلاد</th>
                            <th>الهاتف</th>
                            <th>الراتب</th>
                            <th>تاريخ العمل</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <th scope="row">{{$employee->id}}</th>
                                <td>{{$employee->name}}</td>
                                <td>
                                    <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                                </td>
                                <td>{{$employee->position}}</td>
                                <td>{{$employee->qualification}}</td>
                                <td>{{$employee->date_of_birth}}</td>
                                <td>{{$employee->phone}}</td>
                                <td>{{$employee->salary}}</td>
                                <td>{{$employee->start_date}}</td>
                                <td>
                                    <button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$employee->id}})">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <a href="#" class="btn btn-md btn-danger-gradient" wire:click.prevent="confirmDelete({{$employee->id}})">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div><!-- bd -->
    </div>
</div>

