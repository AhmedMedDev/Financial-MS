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
            <table class="table table-striped mg-b-0 text-md-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Employee</th>
                        <th>Main Salary</th>
                        <th>Deduction</th>
                        <th>Extra</th>
                        <th>Total</th>
                        <th>For Month</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($salaries as $item)
                    <tr>
                        <th scope="row">{{$item->employee_id}}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->main_salary}}</td>
                        <td>{{$item->total_deduction}}</td>
                        <td>{{$item->total_extra}}</td>
                        <td>{{ $finalsalary = $item->main_salary + $item->total_extra + $item->total_deduction}}</td>
                        <td> {{$month}} </td>
                        <td>
                            <button class="btn btn-info-gradient btn-block" wire:click.prevent="receivedSalary({{$item->employee_id}},'{{$item->name}}',{{$finalsalary}}, {{$month}})">receive salary</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- bd -->
</div><!-- bd -->
