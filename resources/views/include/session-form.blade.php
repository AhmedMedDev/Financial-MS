{{--  --}}
<div class="form-group">
  <label for="receipt">رقم الايصال <span class="tx-danger">*</span></label>
  <input type="number" class="form-control @error('receipt') is-invalid @enderror" id="receipt" wire:model="receipt">
  @error('receipt') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Children --}}
<div class="form-group">
    <label for="amount">اسم الطفل <span class="tx-danger">*</span></label>
    <select  class="custom-select @error('children_id') is-invalid @enderror" id="inlineFormCustomSelectPref" wire:model="children_id">
      <option selected>Choose...</option>
      @foreach (DB::table('childrens')->orderByDesc('id')->get() as $item)
        <option value="{{$item->id}}" >{{$item->child_name}}</option>
      @endforeach
    </select>
    @error('children_id') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Employee --}}
<div class="form-group">
  <label for="amount">اسم الموظف <span class="tx-danger">*</span></label>
  <select class="custom-select @error('employee_id') is-invalid @enderror" id="inlineFormCustomSelectPref" wire:model="employee_id">
    <option selected>Choose...</option>
    @foreach (DB::table('employees')->orderByDesc('id')->get() as $item)
      <option value="{{$item->id}}" >{{$item->name}}</option>
    @endforeach
  </select>
  @error('employee_id') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Cost --}}
<div class="form-group">
  <label for="amount">قيمة الجلسة <span class="tx-danger">*</span></label>
  <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" wire:model="amount">
    @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- Remaining --}}
<div class="form-group">
  <label for="amount">الباقى <span class="tx-danger">*</span></label>
  <input type="number" class="form-control @error('remaining') is-invalid @enderror" id="remaining" wire:model="remaining">
    @error('remaining') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{-- date--}}
<div class="form-group">
  <label for="date">التاريخ</label>
  <input type="text" class="form-control @error('date') is-invalid @enderror" wire:model="date" placeholder="YY-MM-DD"></input>
  @error('date') <span class="error text-danger">{{ $message }}</span> @enderror
</div>
{{--  --}}