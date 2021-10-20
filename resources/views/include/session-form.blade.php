{{-- Children --}}
<div class="form-group">
    <label for="amount">اسم الطفل</label>
    <select wire:model="children_id" class="custom-select" id="inlineFormCustomSelectPref">
      <option selected>Choose...</option>
      @foreach (DB::table('childrens')->orderByDesc('id')->get() as $item)
        <option value="{{$item->id}}" >{{$item->child_name}}</option>
      @endforeach
    </select>
    @error('children_id') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Employee --}}
<div class="form-group">
  <label for="amount">اسم الموظف</label>
  <select wire:model="employee_id" class="custom-select" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    @foreach (DB::table('employees')->orderByDesc('id')->get() as $item)
      <option value="{{$item->id}}" >{{$item->name}}</option>
    @endforeach
  </select>
  @error('employee_id') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Cost --}}
<div class="form-group">
  <label for="amount">قيمة الجلسة</label>
  <input type="number" class="form-control" id="amount" wire:model="amount">
    @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Remaining --}}
<div class="form-group">
  <label for="amount">الباقى</label>
  <input type="number" class="form-control" id="remaining" wire:model="remaining">
    @error('remaining') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  Date --}}
<div class="form-group">
    <div class="row row-sm">
        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
            </div>
            <input class="form-control" id="datetimepicker2" type="text" placeholder="YY-MM-DD: TIME">
        </div>
    </div>
</div>
{{--  --}}