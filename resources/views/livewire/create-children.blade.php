<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new Children</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {{-- Child Name --}}
          <div class="form-group">
            <label for="amount">Child's Name</label>
            <input type="text" class="form-control" id="amount" placeholder="Enter Name" wire:model="child_name">
          </div>
          {{-- Parent --}}
          <div class="form-group">
            <label for="amount">Child's Parent</label>
            <input type="text" class="form-control" id="amount" placeholder="Enter Postion" wire:model="parent">
          </div>
          {{-- Phone --}}
          <div class="form-group">
            <label for="amount">Parent's Phone</label>
            <input type="text" class="form-control" id="amount" placeholder="Enter Phone" wire:model="phone">
          </div>
          {{-- notes--}}
          <div class="form-group">
            <label for="amount">Doc's Notes</label>
            <textarea class="form-control" placeholder="Textarea" rows="3" wire:model="notes"></textarea>
          </div>
          {{-- Child Image --}}
          <div class="col-sm-12 col-md-12">
            <input type="file" class="dropify" data-height="200" />
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click="store">Save changes</button>
      </div>
    </div>
  </div>
</div>


