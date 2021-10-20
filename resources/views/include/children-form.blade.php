 {{-- Child Name --}}
 <div class="form-group">
    <label for="child_name">اسم الطفل</label>
    <input type="text" class="form-control" id="child_name" wire:model="child_name">
    @error('child_name') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Parent --}}
  <div class="form-group">
    <label for="parent">اسم ولى الامر</label>
    <input type="text" class="form-control" id="parent" wire:model="parent">
    @error('parent') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Phone --}}
  <div class="form-group">
    <label for="phone">رقم الهاتف</label>
    <input type="text" class="form-control" id="phone" wire:model="phone">
    @error('phone') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- notes--}}
  <div class="form-group">
    <label for="amount">ملاحظات الاخصائى</label>
    <textarea class="form-control" placeholder="Textarea" rows="3" wire:model="notes"></textarea>
    @error('notes') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Child Image --}}
  <div class="col-sm-12 col-md-12">
    <input type="file" class="dropify" data-height="200" />
  </div>