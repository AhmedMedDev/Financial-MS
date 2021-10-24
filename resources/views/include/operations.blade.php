<button class="btn btn-md btn-info-gradient" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$item->id}})">
    <i class="fas fa-pen"></i>
</button>
<button class="btn btn-md btn-danger-gradient" wire:click.prevent="confirmDelete({{$item->id}})">
    <i class="fas fa-trash-alt"></i>
</button>