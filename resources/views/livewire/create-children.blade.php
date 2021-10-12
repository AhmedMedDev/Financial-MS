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
            <label for="child_name">Child's Name</label>
            <input type="text" class="form-control" id="child_name" wire:model="child_name">
            @error('child_name') <span class="error text-danger">{{ $message }}</span> @enderror
          </div>
          {{-- Parent --}}
          <div class="form-group">
            <label for="parent">Child's Parent</label>
            <input type="text" class="form-control" id="parent" wire:model="parent">
            @error('parent') <span class="error text-danger">{{ $message }}</span> @enderror
          </div>
          {{-- Phone --}}
          <div class="form-group">
            <label for="phone">Parent's Phone</label>
            <input type="text" class="form-control" id="phone" wire:model="phone">
            @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
          </div>
          {{-- notes--}}
          <div class="form-group">
            <label for="amount">Doc's Notes</label>
            <textarea class="form-control" placeholder="Textarea" rows="3" wire:model="notes"></textarea>
            @error('notes') <span class="error text-danger">{{ $message }}</span> @enderror
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


