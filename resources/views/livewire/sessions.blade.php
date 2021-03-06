<div>
    <!-- Modal effects -->
    @include('livewire.create-session')
    @include('livewire.update-session')
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
                <table class="table text-md-nowrap" id="">{{-- example1 --}}
                    <thead>
                        <tr>
                            <th>رقم الجلسة</th>
                            <th>اسم الطفل</th>
                            <th>اسم الاخصائى</th>
                            <th>تكلفة الجلسة</th>
                            <th>الباقى</th>
                            <th>التاريح</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $item)
                        <tr>
                            <th scope="row">
                                {{$item->session_id}}
                            </th>
                            <td>{{$item->child_name}}</td>
                            <td>{{$item->emp_name}}</td>
                            <td>{{number_format($item->amount, 2)}} EGP</td>
                            <td>{{$item->remaining}}</td>
                            <td>{{ date('d-M', strtotime($item->date)) }}</td>
                            <td>
                                @include('include.operations', ['id' => 'session_id'])
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div><!-- bd -->
    </div>
</div>
