    {{--  --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ارشيف الصادرات و الواردرات</h5>
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
                                        @foreach (DB::table('financial_operation_archives')->get() as $item)
                                            <tr>
                                                <td>
                                                    <span class="tag tag-red">
                                                        {{ number_format($item->total_export, 2) }}
                                                        EGP
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="tag tag-success">
                                                        {{ number_format($item->total_import, 2) }}
                                                        EGP
                                                    </span>
                                                </td>
                                                <td>{{date('M', $item->final_month)}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- bd -->
                        </div><!-- bd -->
                    </div><!-- bd -->
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
