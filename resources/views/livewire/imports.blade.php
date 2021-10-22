<div>
    <!-- Modal effects -->
    @include('livewire.create-import')
    @include('livewire.update-import')
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
                <table wire:ignore.self class="table text-md-nowrap" id=""> {{-- example1 --}}
                    <thead>
                        <tr>
                            <th>رقم الايصال</th>
                            <th>اسم العميل</th>
                            <th>المبلغ</th>
                            <th>المقابل</th>
                            <th>التاريخ</th>
                            <th>الاجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($imports as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->client}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->reason}}</td>
                            <td>{{ date('d-M', strtotime($item->date)) }}</td>
                            <td>
                                <a href="#" class="btn btn-md btn-primary-gradient">
                                    <i class="fas fa-print"></i>
                                </a>
                                <button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$item->id}})">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <a href="#" class="btn btn-md btn-danger-gradient" wire:click.prevent="confirmDelete({{$item->id}})">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- bd -->
        </div><!-- bd -->
    </div><!-- bd -->
</div>

