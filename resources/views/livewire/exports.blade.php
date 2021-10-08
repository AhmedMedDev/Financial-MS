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
                <table class="table text-md-nowrap" id="example1">
                    <thead>
                        <tr>
                            <th>Receipt ID</th>
                            <th>Employee</th>
                            <th>Amount</th>
                            <th>Reason</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exports as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->client}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->reason}}</td>
                            <td>{{$item->date}}</td>
                            <td>
                                <a href="#" class="btn btn-md btn-primary-gradient">
                                    <i class="typcn typcn-briefcase"></i>
                                </a>
                                <button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit_export" wire:click.prevent="edit({{$item->id}})">
                                    <i class="las la-pen"></i>
                                </button>
                                <a href="#" class="btn btn-md btn-danger-gradient" wire:click.prevent="delete({{$item->id}})">
                                    <i class="las la-trash"></i>
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

