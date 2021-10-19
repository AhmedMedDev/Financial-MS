<div>
    <!-- Modal effects -->
    @include('livewire.create-children')
    @include('livewire.update-children')
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
                            <th>رقم الطفل</th>
                            <th>صورة الطفل</th>
                            <th>اسم الطفل</th>
                            <th>ولى الامر</th>
                            <th>الهاتف</th>
                            <th>التاريخ</th>
                            <th>ملاحظات الاخصائى</th>
                            <th>اجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($childrens as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->child_name}}</td>
                                <td>
                                    <img alt="Responsive image" class="img-thumbnail wd-55p wd-sm-55" src="{{asset('assets/img/photos/1.jpg')}}">
                                </td>
                                <td>{{$item->parent}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->notes}}</td>
                                <td>
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
    </div>
</div>
