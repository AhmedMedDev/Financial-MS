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
            <table class="table text-md-nowrap" id="">{{-- example1 --}}
                <thead>
                    <tr>
                        <th>Emp ID</th>
                        <th>avatar</th>
                        <th>Employee</th>
                        <th>Deduction</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absences as $item)
                    <tr>
                        <th scope="row">{{$item->employee_id}}</th>
                        <td>
                            <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="http://127.0.0.1:8000/assets/img/photos/1.jpg">
                        </td>
                        <td>{{$item->name}}</td>
                        <td> 
                            @php
                                $amount = $item->day_price;
                                $day    =  date('l', strtotime($item->date));

                                if ($day == 'Tuesday' || $day == 'Sunday') $amount *= 2;
                            @endphp
                            {{$amount}}
                        </td>
                        <td>{{ $item->date }}</td>
                        <td>
                            <button class="btn btn-danger-gradient btn-block"  
                                wire:click.prevent="deductionFromSalary({{$item->employee_id}},{{$amount}},'{{$item->date}}',{{$item->month}})">
                                Deduction from salary
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!-- bd -->
    </div><!-- bd -->
</div><!-- bd -->
