<div>
    <!-- Modal effects -->
    @include('livewire.create-extra')
    @include('livewire.update-extra')
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
                <table wire:ignore.self class="table text-md-nowrap" id="">{{-- example1 --}}
                    <thead>
                        <tr>
                            <th>رقم الموظف</th>
                            <th>صورة الموظف</th>
                            <th>اسم الموظف</th>
                            <th>المبلغ</th>
                            <th>السبب</th>
                            <th>التاريخ</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($extras as $item)
                        <tr>
                            <th scope="row">{{$item->change_id}}</th>
                            <td>
                                <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->reason}}</td>
                            <td>{{$item->date}}</td>
                            <td>
                                <a href="#" class="btn btn-md btn-primary-gradient">
                                    <i class="fas fa-print"></i>
                                </a>
                                <button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$item->change_id}})">
                                    <i class="fas fa-pen"></i>
                                </button>
                                <a href="#" class="btn btn-md btn-danger-gradient" wire:click.prevent="confirmDelete({{$item->change_id}})">
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
