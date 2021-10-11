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
                <table class="table text-md-nowrap" id="example1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Children</th>
                            <th>Employee</th>
                            <th>Cost</th>
                            <th>Remaining</th>
                            <th>Date</th>
                            <th>Actions</th>
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
                            <td>{{$item->amount}}$</td>
                            <td>{{$item->remaining}}</td>
                            <td>{{$item->date}}</td>
                            <td>
                                <button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$item->session_id}})">
                                    <i class="las la-pen"></i>
                                </button>
                                <a href="#" class="btn btn-md btn-danger-gradient" wire:click.prevent="confirmDelete({{$item->session_id}})">
                                    <i class="las la-trash"></i>
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
