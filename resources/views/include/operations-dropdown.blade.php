<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      اتخاذ اجراء
    </button>
    <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
      <button class="dropdown-item" data-toggle="modal" data-target="#edit" wire:click.prevent="edit({{$item->$id}})">
        <span class="tx-white btn btn-info">
            تعديل
            <i class="fas fa-pen"></i>
        </span>
      </button>
      <button class="dropdown-item" wire:click.prevent="confirmDelete({{$item->$id}})">
        <span class="tx-white btn btn-danger">
            حذف
            <i class="fas fa-trash-alt"></i>
        </span>
      </button>
    </div>
  </div>