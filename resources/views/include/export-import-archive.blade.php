    {{--  --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-md-nowrap">{{-- example1 --}}
                                    <thead>
                                        <tr>
                                            <th>الصادرات</th>
                                            <th>الواردات</th>
                                            <th>عن شهر</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ( as $item) --}}
                                            <tr>
                                                <td>{{ number_format(1000, 2) }} EGP</td>
                                                <td>{{ number_format(2000, 2) }} EGP</td>
                                                {{-- <td>{{ date('d-M', strtotime($item->date)) }}</td> --}}
                                                <td>oct</td>
                                            </tr>
                                        {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div><!-- bd -->
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}

