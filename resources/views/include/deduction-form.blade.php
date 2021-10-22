{{-- Employee --}}
<div class="form-group">
    <label for="amount">اسم الموظف <span class="tx-danger">*</span></label>
    <select wire:model="employee_id" class="custom-select" id="inlineFormCustomSelectPref">
      <option selected>Choose...</option>
      @foreach (DB::table('employees')->orderByDesc('id')->get() as $item)
        <option value="{{$item->id}}" >{{$item->name}}</option>
      @endforeach
    </select>
    @error('employee_id') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Amount --}}
  <div class="form-group">
      <label for="amount">المبلغ <span class="tx-danger">*</span></label>
      <input type="number" class="form-control @error('amount') is-invalid @enderror" id="amount" wire:model="amount">
      @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Reason --}}
  <div class="form-group">
      <label for="amount">السبب <span class="tx-danger">*</span></label>
      <input type="text" class="form-control @error('reason') is-invalid @enderror" id="reason" wire:model="reason">
      @error('reason') <span class="error text-danger">{{ $message }}</span> @enderror
  </div>
  {{-- Date --}}
  <div class="form-group">
      <div class="row row-sm">
          <div class="input-group col-md-12">
              <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="far fa-clock tx-24 lh--9 op-6"></i>
                  </div>
              </div>
              <input class="form-control" id="datetimepicker2" type="text" placeholder="YY-MM-DD: TIME">
          </div>
      </div>
  </div>
  {{--  --}}