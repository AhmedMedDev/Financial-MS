<div>
    <!-- Modal effects -->
    @include('livewire.create-export')
    @include('livewire.update-export')
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
                <table wire:ignore.self class="table text-md-nowrap" id="example1">{{-- example1 --}}
                    <thead>
                        <tr>
                            <th>رقم الايصال</th>
                            <th>اسم الموظف</th>
                            <th>المبلغ</th>
                            <th>المقابل</th>
                            <th>التاريخ</th>
                            <th>الاجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exports as $item)
                        <tr>
                            <th scope="row">{{$item->receipt}}</th>
                            <td>{{$item->client}}</td>
                            <td>{{number_format($item->amount, 2)}} EGP</td>
                            <td>{{$item->reason}}</td>
                            <td>{{ date('d-M', strtotime($item->date)) }}</td>
                            <td>
                                {{-- <a href="#" class="btn btn-md btn-primary-gradient">
                                    <i class="fas fa-print"></i>
                                </a> --}}
                                @include('include.operations', ['id' => 'id'])
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div><!-- bd -->
    </div><!-- bd -->
</div>

