<div class="modal-footer">
    @if(Session::has('Start-Loading'))
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    @else
        <button type="button" class="btn btn-success" wire:click="store">حفظ</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
    @endif
</div>